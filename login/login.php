<?php
    $login = "user";
    $password = "admin";
    function checkPass(){
        $result = 0;
        if($_POST['user'] == "" || $_POST['password'] == ""){
            $result = 1;
        }
        else if(!isset($_POST['user']) || !isset($_POST['password'])){
            $result = 2;
        }
        else{
            global $login;
            global $password;
            if($_POST['user'] == $login && $_POST['password'] == $password){
                $result = 3;   
            }
            else{
                $result = 4;
            }
        }
        switch($result){
            case "1": include('index_fill.html'); break;
            case "2": header('Location:error_page.html'); break;
            case "3": header('Location:main.php'); break;
            case "4": include('incorrect_credentials.html'); break;
            default: header('Location:error_page.html'); break;
        }
    }
    checkPass();
?>