<?php
    if(!isset($_COOKIE['name']) && !isset($_GET['name'])){
        include('form.html');
    }
    else if(isset($_GET['name'])){
        setcookie("name", $_GET['name'], time()+(60*60*24*365));
        include('thanks.html');
    }
    else{
        include('main.php');
    }
?>