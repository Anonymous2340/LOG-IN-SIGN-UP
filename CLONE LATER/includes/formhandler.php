<?php
include "dbh.inc.php";
include "control.inc.php";
$messages = [];

if ($_SERVER["REQUEST_METHOD"] === "POST"){
    # define access variables
    $access_username = isset($_POST["access-username"]) ? $_POST["access-username"] : '';
    $access_password = isset($_POST["access-password"]) ? $_POST["access-password"] : '';
    $create_username = isset($_POST["create-username"]) ? $_POST["create-username"] : '';
    $create_password = isset($_POST["create-password"]) ? $_POST["create-password"] : '';

    # if someone try to access password and username of a user (account)
    if ($access_password && $access_username) {
        try {
            # user $myaccess for accessign user's id and set to session
            $myaccess = access_user($mysql, $access_username) ?? '';
            if ($myaccess){
                $verificaion_process = password_verification_process($mysql, $access_password, $myaccess);
                if ($verificaion_process === "VALID"){
                    $messages["GRANTED"] = "ACCESS GRANTED!";
                    echo json_encode($messages);
                } else if ($verificaion_process === "INVALID"){
                    throw new Exception("ACCESS DENIED!");
                } else {
                    throw new Exception('SOMETHING WENT WRONG');
                }
            } else {
                throw new Exception("ERROR USER");
            }
        } catch (Exception $errorAccess) {
            $messages["ERROR"] = $errorAccess->getMessage();
            echo json_encode($messages);
        };

    # else if they user only wants to create account
    } else if ($create_username && $create_password) {
        $passwordHash = password_hash($create_password, PASSWORD_BCRYPT);
        $tryAccess = access_user($mysql, $create_username);
        if (isset($tryAccess)){
            $messages["ERROR"] = "Username already taken!";
        } elseif (!isset($tryAccess)) {
            $messages["AVAILABLE"] = "User available!";
            try {
                $make = create_user($mysql, $create_username, $passwordHash);
                if ($make === "SUCCESSFUL"){
                    $messages["SUCCESS"] = "Account successfuly created!";
                } else {
                    throw new Exception("Failed to submit data to the database!");
                }
            } catch (Exception $e) {
                $messages["ERROR"] = $e->getMessage(); 
            }
        } else{
            $messages["FAILED"] = "Failed to access and submit database";
            echo json_encode($messages);
        } 
        echo json_encode($messages);
    } else {
        return;
    };
} else {
    return;
};