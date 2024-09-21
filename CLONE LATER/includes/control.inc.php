<?php
// include "dbh.inc.php";
function access_user ($mysql, string $username) {
    try {
        // when a user access an account
        // define the query
        $inquire = "SELECT * FROM users WHERE username = ?;";
        # prepare the statement
        $statement = $mysql->prepare($inquire);
        # bind the data to the incquire statement
        # the "s" means that it is a string
        $statement->bind_param("s", $username);
        # if the statement is executed
        if ($statement->execute()){
            # get the result if so
            $data = $statement->get_result();
            # if data existed or any rows (num_rows means number of rows)
            if ($data->num_rows > 0){ # rows submitted is greater than 0 (which means there is a row)
                # do this if so
                $fetchResult = $data->fetch_assoc();
                $user_id = $fetchResult["user_id"];
                return $user_id;
            } else {
                # if not, then just quit the if statemetn and throw error (return can be used to exit a statement(function or an if else statement))
                return;
            }
        } else {
            # throw an error (throw it to the catch)
            throw new Exception("FAILED TO EXECUTE");    
        }
        # close or clean the mysql variable object and the statement variable
        $mysql->close();
        $statement->close();
    } catch (Exception $error) {
        # if an error occurs or something, return it to the front page
        return $error->getMessage();
    }
};

function password_verification_process ($mysql, $user_input_pwd, $user_identication_id) {
    try {
        $inquirie = "SELECT * FROM users WHERE user_id = ?;";
        $stmnt = $mysql->prepare($inquirie);
        $stmnt->bind_param("s", $user_identication_id);
        $stmnt->execute();
        $user_search = $stmnt->get_result();
        $fetched = $user_search->fetch_assoc();
        // $getPwd = $fetched["pwd"];
        if (password_verify($user_input_pwd, $fetched["pwd"])){
            return "VALID";
        } else {
            return "INVALID";
        };
    } catch (Exception $error){
        return $error;
    }
}

function create_user ($mysql, string $username, string $password) {
    try {
        $inquire = "INSERT INTO users (username, pwd) VALUES (?,?);";
        $statement = $mysql->prepare($inquire);
        $statement->bind_param("ss", $username, $password);
        if ($statement->execute()){
            return "SUCCESSFUL";
        } else {
            throw new Exception("FAILED");    
        }
    } catch (Exception $err) {
        return $err->getMessage();
    }
};