<?php
    $f_path = "./m_download/";

    function check_file_name($name, $path){
        $fd = opendir($path);
        if(!$fd) return false;
        $result = false;
        while(($file = readdir($fd)) !== false){//Check if there is file with name $name
            if(is_dir($path.$file)) continue; //Check if the file is not a folder
            if($file == $name){
                $result = true;
                break;
            }   
        } 
        closedir($fd);
        return $result; 
    }

    function send($name, $path){
        if(!file_exists($path.$name)){
            echo "File doesn't exist";
            return;
        }
        $fd = fopen($path.$name, 'r');
        $size = filesize($path.$name);
        $contents = fread($fd, $size);

        fclose($fd);

        header("Content-Type: application/octet-stream");
        header("Content-Length: $size;");
        header("Content-Disposition: attachment; filename=$name");

        echo $contents;
    }

    if(isset($_GET['name'])){//Check if GET method have correct value
        if(!check_file_name($_GET['name'], $f_path)){
            echo "File doesn't exist";
        }
        else{
            send($_GET['name'], $f_path);
        }
    }
    else{
        echo "File doesn't exist";
    }

?>
