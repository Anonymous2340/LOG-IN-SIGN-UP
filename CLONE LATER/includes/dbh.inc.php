<?php

# define the hostname
$hostname = 'localhost';
# define the root name
$user = 'root';
# define the pwd
$pwd = '';
# define the database name
$dbname = 'my_user_login_db';
# use the mysqli object to access database
$mysql = new mysqli($hostname, $user, $pwd, $dbname);