<?php
    //Static
    $f_path = "./m_download/";
    function check_file_name($name){ //Check if there is file with $name on the server
       $files = array(
           "file1.txt",
           "file2.txt",
           "file3.txt"
       );
       return in_array($name, $files);
    }

    function send($f_name, $f_path){ 
        if(!file_exists($f_path.$f_name)){
            echo "File doesn't exist";
            return;
        }
        $fd = fopen($f_path.$f_name, 'r');
        $size = filesize($f_path.$f_name);
        $contents = fread($fd, $size);

        fclose($fd);

        header("Content-Type: application/octet-stream");
        header("Content-Length: $size;");
        header("Content-Disposition: attachment; filename=$f_name");

        echo $contents;
    }

    //Check if there is file with $name and decide to execute send() or not
    if(isset($_GET['name'])){
        if(!check_file_name($_GET['name']))
            echo "File doesn't exist";
        else send($_GET['name'], $f_path);
    }
    else {
        echo "File doesn't exist";
    }   
?>