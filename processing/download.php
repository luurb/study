<?php
    $fd = fopen("file.txt", "r", "./");
    $size = filesize("./file.txt");
    $contents = fread($fd, $size);
    fclose($fd);

    header("Content-Type: application/octet-stream");
    header("Content-Length: $size;");
    header("Content-Disposition: attachment; filename=file.txt");

    echo $contents;
?>