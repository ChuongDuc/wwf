<?php
    $filename = $_GET['file'];
    echo $filename;

    $contents = file($filename);
    
    foreach($contents as $line){
        echo $line.'<br>';
    }

?>