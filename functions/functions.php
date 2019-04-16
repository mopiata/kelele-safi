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

/*****function validation******/
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
                echo "User registered";
            }
        }
        
    }
}

// Post requests register user
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
        $validation_code = md5($username + microtime());
        $GENDER = "";
        $sql = "INSERT INTO users".
         "(first_name, surname, email,password,GENDER, username, validation_code,active)".
         "VALUES"."('$first_name','$surname','$email','$password','$GENDER','$username','$validation_code',0)";
        $result = query($sql);

        confirm($result);
        return true;
    }
}

?>