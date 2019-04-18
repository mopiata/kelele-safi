<?php

/*****helper functions*****/

function clean($string){
    return htmlentities($string);
}

function redirect($location){
    return header("Location: {$location}");
}

function set_message($message){
    if(!empty($message)){
        $_SESSION['message']= $message;
    }else {
        $message = "";
    }

}

// function dispay_username(){
//     $s_username = $_SESSION;

//     echo $s_username;
// }

function dispay_message(){
    if(isset($_SESSION['message'])){
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
}

function token_generator(){
    $token = $_SESSION['token'] = md5(uniqid(mt_rand(),true));
    return $token;
}

function email_exists($email){
    $sql = "SELECT id FROM users WHERE email = '$email'";
    $result = query($sql);
    if(row_count($result) == 1){
        return true;

    }else{
        return false;
    }
}
function username_exists($username){
    $sql = "SELECT id FROM users WHERE username = '$username'";
    $result = query($sql);
    if(row_count($result) == 1){
        return true;

    }else{
        return false;
    }
}

/*****function validate user input******/
function validate_user_registration(){

    $errors = [];
    $min = 3;
    $max = 20;

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $first_name      = clean($_POST['first_name']); 
        $surname        = clean($_POST['surname']);       
        $username        = clean($_POST['username']);
        $email           = clean($_POST['email']);
        $password        = clean($_POST['password']);
        $confirmPassword = clean($_POST['confirmPassword']);
        $DOB             = clean($_POST['DOB']);

        if(strlen($first_name) < $min){
            $errors[] = "Firstname cannot be less than {$min}";
        }
        if(strlen($first_name) > $max){
            $errors[] = "Firstname cannot be greater than {$max}";
        }
        if(strlen($surname) < $min){
            $errors[] = "Surname cannot be less than {$min}";
            
        }
        if(email_exists($email)){
            $errors[] = "Sorry email already exists";
            
        }
        if(username_exists($username)){
            $errors[] = "Sorry username is  already taken";
            
        }
        
        if(strlen($surname) > $max){
            $errors[] = "Surname cannot be greater than {$max}";
        }
        if(strlen($email) > $max){
            $errors[] = "Email cannot be greater than {$max}";
        }
        if($password !== $confirmPassword){
            $errors[] = "Your passwords do not match";
        }
        if(!empty($errors)){
            foreach ($errors as $error){
                echo $error;
            }
        }else {
            if(register_user($first_name,$surname,$username,$email,$password)){
                set_message("<p class='bg-success text-center'>You have succesfully been registered. Click Log in.</p>");

                redirect("index.php");

            }
        }
        
    }
}
/*****Function Post  register user******/


function register_user($first_name,$surname,$username,$email,$password){
    $first_name    =   escape($first_name);
    $surname       =   escape($surname);
    $username      =   escape($username);
    $email         =   escape($email);
    $password      =   escape($password);
    if(email_exists($email)){
        return false;

    }elseif(username_exists($username)){
        return false;
    }
    else {
        $password = md5($password);
        $validation_code = md5(microtime());
        $GENDER = "";
        $sql = "INSERT INTO users".
         "(first_name, surname, email,password,GENDER, username, validation_code,active)".
         "VALUES"."('$first_name','$surname','$email','$password','$GENDER','$username','$validation_code',0)";
        $result = query($sql);

        confirm($result);

        $subject = "Activate Account";
        $msg = "Please click below to activate your account.
        http://localhost/login/activate.php?email=$email&code=$validation_code";

        $header = "From: noreply@youtwebsite.com";
        //send_email($email,$subject,$msg,$header);

        return true;
    }

}
/*****Function activate user******/

function activate_user(){
    if($_SERVER['REQUEST_METHOD'] == "GET"){
        if(isset($_GET['email'])){
             $email = clean($_GET['email']);
             $validation_code = clean($_GET['code']);
             $sql = "SELECT id from users where email = '".escape($_GET['email'])."' AND validation_code = '".escape($_GET['code'])."'";
             $result = query($sql);
             confirm($result);

             if(row_count($result) == 1){
            
             $sql2 = "UPDATE users SET active = 1, validation_code = 0 WHERE email='".escape($email)."' AND validation_code = '".escape($validation_code)."' ";
             $result2 = query($sql2);
             confirm($result2);
             echo "<p>Your Account is now activated, please login</p>";
             redirect("index.php");
            }
        }
    }

}
/*****Validate user login   user******/

function validate_user() {
  
    if($_SERVER['REQUEST_METHOD'] == "POST"){

    $username           = clean($_POST['username']);
    $password        = clean($_POST['password']);

    if(empty($email)){
        $error[] = "Email Field cannot be empty";
    }
    if(empty($password)){
        $error[] = "Password Field cannot be empty";
    }
    if(!empty($errors)){
        foreach ($errors as $error){
            echo $error;
        }
    }else {

        login_user($username,$password);

}
    }
}
/*****Function login   user******/


function login_user($username,$password){


//     // $password      =   escape($password);
 $sql = "select password,id from users where username = '".escape($username)."'";
 $result = query($sql);
 confirm($result);


if(row_count($result) == 1){

$row = fetch_array($result);
  $db_password = $row['password'];
    if(md5($password) == $db_password){
        // return true;
        set_message($username);
    redirect("post_details.php");
        // echo $email;
        // echo $password;


    } else { 
        return false;
    }
    return true;

}
}

/******************Insert comments*******************/
function validate_insert_comments(){
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        // $first_name      = clean($_POST['first_name']); 
        $name        =   clean($_POST['name']);
        $email       =   clean($_POST['email']);
        $subject     =   clean($_POST['subject']);

        insert_comments($name,$email,$subject);

        }

}

function insert_comments($name,$email,$subject){
    $name            =   escape($name);         
    $email           =   escape($email);
    $subject         =   escape($subject);

    // $sql = "INSERT INTO users".
    //      "(first_name, surname, email,password,GENDER, username, validation_code,active)".
    //      "VALUES"."('$first_name','$surname','$email','$password','$GENDER','$username','$validation_code',0)";

    $sql = "INSERT INTO comments". 
    "(name, email, subject, status)". 
    "VALUES"."('$name', '$email', '$subject', 'draft')";
    $result = query($sql);
    confirm($result);
    redirect("post_details.php");
    // echo $name;
    // echo $email;

}
function getComments(){
    $sql = "SELECT * FROM comments";
    $result = query($sql);
    $row =  confirm($result);

    echo $row['subject'];
    }





?>