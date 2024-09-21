<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/main.css">
    <title>Log In Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
</head>
<body>
    <div class="wrapper">
        <form action="" id="login-form" method="post">
            <div class="inner-wrapper">
                <div class="profile-logo">
                    <div class="logo">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#75FBFD" id='profile-symbol' class='active'><path d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Zm80-80h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#75FB4C" id='check-symbol'><path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z"/></svg>
                    </div>
                </div>
                <h1 class="greet">
                    WELCOME USER
                </h1>
    
                <!-- username -->
                <div class="input-wrapper">
                    <input type="text" placeholder="Username" name="access-username" id="username" autocomplete="off" spellcheck="false">
                    <div class="icon-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Zm80-80h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z"/></svg>
                    </div>
                </div>
                <span id="user-dont-exist"></span>
                <!-- create  password -->
                <div class="input-wrapper">
                    <input placeholder="Password" type="password" name="access-password" id="password">
                    <div class="icon-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M240-80q-33 0-56.5-23.5T160-160v-400q0-33 23.5-56.5T240-640h40v-80q0-83 58.5-141.5T480-920q83 0 141.5 58.5T680-720v80h40q33 0 56.5 23.5T800-560v400q0 33-23.5 56.5T720-80H240Zm0-80h480v-400H240v400Zm240-120q33 0 56.5-23.5T560-360q0-33-23.5-56.5T480-440q-33 0-56.5 23.5T400-360q0 33 23.5 56.5T480-280ZM360-640h240v-80q0-50-35-85t-85-35q-50 0-85 35t-35 85v80ZM240-160v-400 400Z"/></svg>
                    </div>
                </div>
                <span id="password-not-match"></span>
    
                <!-- forgot password link and button -->
                <div class="linear-input-wrapper">
                    <div class="radio">
                        <input type="radio" name="remember-user" id="radio-elem">
                        <i class="fa-regular checker fa-circle"></i>
                    </div>

                    <label for="remember-user">Remember me</label>
                    <span id="forgot-password"><a href="#">Forgot Password?</a></span>
                </div>
    
                <div class="button-wrapper">
                    <button type="submit" id="submit">LOGIN</button>
                </div>
                <h4 id="not-a-member">Not a member?</h4>
                <div class="button-wrapper">
                    <a id="create-acc" href='signup.php'>Create account</a>
                </div>
            </div>
        </form>
    </div>
</body>
<script type="module" src="../script/ajax1.js"></script>
<script type="module" src="../script/module.js"></script>
</html>