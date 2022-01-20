<?php
    session_start();
    if(!isset($_SESSION['login'])){
        $_SESSION['comunicate'] = "You are not logged in";
        header('Location: form.php');
        //include('form.php');
    }
    else{
        $_SESSION = array();
        setcookie(session_name(), '', time()-3600);
        session_destroy();
        header('Location: form.php');
        //include('form.php');
    }
?>