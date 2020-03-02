<?php

$filename = "text.txt";
if($handle = fopen($filename, 'r')) {

    $content = fread($handle, 100);
    echo $content;

    fclose($handle);
} else {
    echo 'The application was unable to write to the file.';
}


fclose($handle);

?>