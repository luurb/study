<?php
    session_start();
    if(!isset($_SESSION['login'])){
        header('Location: form.php');
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $name = $_SESSION['comunicate'];
        echo "<h2>Login completed. Hello $name san </h2>"
    ?>
    <h2><a href="logout.php">Logout</a></h2>
</body>
</html>