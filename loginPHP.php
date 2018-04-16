<?php
	/*
		This script does one of 3 things:
			1. If the user is visiting for their first time, present a login form
			2. If the login was submitted, process the credentials (username/password)
				Success = Set a cookie and redirect to page1.php
				Failure = Present the login form again with an error
			3. If the user is already logged in, redirect them to page1.php
	*/

    //pull username from $_COOKIE, if it exists
    $username=empty($_COOKIE['username']) ? '': $_COOKIE['username'];

    //if user is logged in, redirect them home
//if($username){
//    header("Location: slideshow.html");
//    exit;
//}

    $action = empty($_POST['action']) ? '': $_POST['action'];

    if($action = "do_login"){
        handle_login();
    }else{
        login_form();
    }

    function login_from(){
        $username="";
        $error="";
        require "index.php";
    }
    function handle_login(){
        $username= empty($_POST['username'])?'':$_POST['username'];
        $password= empty($_POST['password'])?'':$_POST['password'];
        //checking hte username and password, usually this is done with a database
        if($username=="admin" && $password=="pass"){
            //if they mathc, set a cookie and send the uaser to page1.php
            setcookie('username', $username);
            header("Location: upload.html");//web address for ADMIN Login
            exit;
        }else if($username=="test"&&$password=="pass"){
            setcookie('username', $username);
            header("Location: upload.html");
            exit;
        }
        else{
            $error="Error: Incorrect username or password";
            require "login.php";
        }
    }

?>
