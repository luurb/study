<?php
    if(!isset($_GET['radio1'])) //check if any option is checked
    echo "You didn't check any option";
    else echo "Value of checked option is " . $_GET['radio1'];
?>