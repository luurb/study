<?php
    function show(){
        $path = "./voting_results.txt";
        if(file_exists($path)){
            if(($fd = fopen($path,"r+")) === false){
                echo "Server error";
                return false;
            }
        }
        else{
            echo "Server error";
            return false;
        }
        $value_arr = array(1,1,1,1,1);
        //Read all voting results
        for ($i = 0; $i < sizeof($value_arr); $i++){
            $value_arr[$i] = intval(fgets($fd));
        }
        $inscription = <<<ID1
        <table border='1'>
        <tr>
        <td>Color</td>
        <td>Votes</td>
        </tr>
        <tr>
        <td>Blue</td>
        <td>$value_arr[0]</td>
        </tr>
        <tr>
        <td>Red</td>
        <td>$value_arr[1]</td>
        </tr>
        <tr>
        <td>Yellow</td>
        <td>$value_arr[2]</td>
        </tr>
        <tr>
        <td>Black</td>
        <td>$value_arr[3]</td>
        </tr>
        <tr>
        <td>Other</td>
        <td>$value_arr[4]</td>
        </tr>
        </table>
        ID1;
        echo $inscription;
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
    <h2>Voting results</h2>
    <?php show(); ?>
    <p><a href="./voting.html">Main page</a></p>
</body>
</html>