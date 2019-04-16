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

/*****function validation******/
function validate_user_registration(){
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        echo "Validation Works";
    }
}

?>