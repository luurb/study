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
        session_start();
        //Send comunicate that there is uncorrect login or password   
        if(isset($_SESSION['login'])){
            header('Location: main.php');
        }   
        if(isset($_SESSION['comunicate'])){
            echo $_SESSION['comunicate'];
        }
    ?>
    <form action="./login.php" method="post">
        <table>
            <tr>
                <td>Login:</td>
                <td>
                    <input type="text" name="user">
                </td>
            </tr>
            <tr>
                <td>Password:</td>
                <td>
                    <input type="password" name="password">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Login">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>