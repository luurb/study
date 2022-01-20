<?php
    //varaible $_FILES['name_of_input'] contains data sent to server
   /*echo "Original file name: " . $_FILES['file1']['name'];
    echo "<br />Type MIME of file: " . $_FILES['file1']['type'];
    echo "<br />Size of file (baits): " . $_FILES['file1']['size'];
    echo "<br />Temporary name of file: " . $_FILES['file1']['tmp_name'];
    echo "<br />Error code: " . $_FILES['file1']['error'];
    echo "<br /><br />";*/
    

    //Scipt check if there is not errors in upload file
    $uploaddir = './';
    if($_FILES['file1']['error'] == UPLOAD_ERR_OK){
        $new_name = $uploaddir.$_FILES['file1']['name'];
        if(move_uploaded_file($_FILES['file1']['tmp_name'], $new_name)){
            echo "File was successfully loaded";
        }
        else {
            echo "Not correct file";
        }
    }
    else {
        echo "Error occur: ";
        switch($_FILES['file1']['error']){
            case UPLOAD_ERR_INI_SIZE:
            case UPLOAD_ERR_FORM_SIZE:
                echo "File size excedeed";
                break;
            case UPLOAD_ERR_PARTIAL:
                echo "Not receive full file";
                break;
            case UPLOAD_ERR_NO_FILE:
                echo "No receive file";
                break;
            case UPLOAD_ERR_NO_TMP_DIR:
                echo "No access to temporary catalog";
                break;
            case UPLOAD_ERR_CANT_WRITE:
                echo "Can't save file";
                break;
            case UPLOAD_ERR_EXTENSION:
                echo "File loading interrupted by extension";
                break;
            default:
                echo "Undefined error";

        }
    }
?>