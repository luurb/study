<?php
    session_start();
    function checkPass($user, $password){
        if($user == "admin" && $password == "qwerty"){
            $_SESSION['login'] = 1;
            return 1;
        }
        else if($user == "" || $password == ""){
            return 2;
        }
        else{
            return 0;
        }
       
    }
    if(!isset($_POST['user']) || !isset($_POST['password'])){
        //include('Location: form.php');
        header('Location: form.php');
        exit();
    }
    if(isset($_SESSION['login'])){
        header('Location: main.php');
        exit();
    }
    $var = checkPass($_POST['user'],$_POST['password']);
    if($var == 1){
        $_SESSION['comunicate'] = $_POST['user'];
        header('Location: main.php');
    }
    else if($var == 2){
        //Redirect user to login page with right comunicate
        $_SESSION['comunicate'] = "Please type your login and password";
        //include('form.php');
        header('Location: form.php');
    }
    else{
         //Redirect user to login page with right comunicate
        $_SESSION['comunicate'] = "Uncorrect login or password";
        //include('form.php');
        header('Location: form.php');
     }
?>