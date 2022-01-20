<?php
    if(!isset($_POST["opinion"]) || ($_POST["opinion"]) == ""){
        exit ("Nothing was send");
    }
    //Cut length of opinion to 255 baits
    $str = substr($_POST["opinion"], 0, 255);
    //Strip HTML tags
    $str = strip_tags($str);

    if(file_put_contents("./opinion.txt", "$str\n", FILE_APPEND) === false){
        echo "Server error. Opinion was not saved";
    }
    else{
        echo "Thank you for your opinion";
    }
?>