<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
    <p>
        <form method="get" action="http://localhost/processing/text_script.php">
            <input type="text" name="field1"/>
            <input type="submit"/>
        </form>
    </p>
    <p>
        <form method="get" action="http://localhost/processing/radio_script.php">
            <input type="radio" name="radio1" value="option1"/>
            Option 1
            <input type="radio" name="radio1" value="option2"/>
            Option 2
            <input type="radio" name="radio1" value="option3"/>
            Option 3
            <input type="submit"/>
        </form>
    </p>
    <p>
        <form name="form1" enctype="multipart/form-data" method="post" action="http://localhost/processing/file_script.php">
            <input type="file" name="file1"/>
            <input type="submit" value="Send"/>
        </form>
    </p>
    <p>
        <form action="http://localhost/processing/download.php">
            <button>Download</button>
        </form>
    </p>
    <p>
        Download using static script: <br />
        <a href="http://localhost/processing/multi_download.php?name=file1.txt">Download first file</a><br />
        <a href="http://localhost/processing/multi_download.php?name=file2.txt">Download second file</a><br />
        <a href="http://localhost/processing/multi_download.php?name=file3.txt">Download third file</a><br />
     
    </p>
        Download using dynamic script: <br />
        <?php
            $f_path = "./m_download/";
            function print_list($path) //Dynamic generate URLs list of files in ./m_download folder
            {
              $fd = opendir($path);
              if(!$fd) return false;
              while(($file = readdir($fd)) !== false){
                  if(is_dir($path.$file)) continue; //Check if the file is not a folder
                  echo "<a href=\"http://localhost/processing/multi_download2.php?name=$file\">$file</a><br />";
              }
              closedir($fd);
            }
           print_list($f_path);
        ?>
        <br />
        Generate list from file: <br />
        <ol>
            <?php
                function print_list1(){
                    if(!($fd = fopen("./downloads/downloads.txt", 'r'))){
                        return;
                    }

                    while (!feof($fd)){//Check if there are more lines in file
                        $line = trim(fgets($fd));//Read lines from file
                        $arr = explode(";", $line);
                        if(count($arr) == 4){
                            echo "<li><a href=\"multi_download3.php?fileid=$arr[0]\">$arr[3] ($arr[1])</a></li>";
                        }
                    }
                }
                print_list1();
            ?>
        </ol>
    </p>
</body>
</html>