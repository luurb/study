<?php
    function vote($vote){
        $path = "./voting_results.txt";
        if($vote == ""){
            return false;
        }
        if(file_exists($path)){
            if(($fd = fopen($path,"r+")) === false){
                return false;
            }  
        }
        else{
            return false; 
        }
        $value_arr = array(1,1,1,1,1);
        //Read all voting results
        for ($i = 0; $i < sizeof($value_arr); $i++){
            $value_arr[$i] = intval(fgets($fd));
        }
        //Add vote to correct value
        switch($vote){
            case "blue": $value_arr[0]++; break;
            case "red": $value_arr[1]++; break;
            case "yellow": $value_arr[2]++; break;
            case "black": $value_arr[3]++; break;
            default: $value_arr[4]++; break;
        }
        //Reset counter of file
        fseek($fd, 0);
        //Reset file size
        ftruncate($fd, 0);
        for ($i = 0; $i < sizeof($value_arr); $i++){
           file_put_contents($path, "$value_arr[$i]\n", FILE_APPEND);
        }
        fclose($fd);
        return true;

    }
    if(isset($_POST['vote'])){
        if(vote($_POST['vote'])){
            header('Location:voting_results.php');
        }
        else{
            header('Location:error.html');
        }
    }
    else{
        header('Location:error.html');
    }
?>