<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Send your opinion</p>
    <form method="post" action="http://localhost/processing/opinion.php">
        <textarea rows="9" cows="20" name="opinion"></textarea>
        <br />
        <input type="submit" value="Send opinion">
    </form>
    <p>Others opinions:</p>
    <?php
        if(file_exists("./opinion.txt")){
            $str = file_get_contents('./opinion.txt');
            $str = strip_tags($str);
            echo nl2br($str);
        }
    ?>
</body>
</html>