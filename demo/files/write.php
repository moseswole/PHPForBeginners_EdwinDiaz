<?php

$filename = "text.txt";
if($handle = fopen($filename, 'w')) {

    fwrite($handle, 'I really love PHP :)');

    fclose($handle);
} else {
    echo 'The application was unable to write to the file.';
}


fclose($handle);

?>