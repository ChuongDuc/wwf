<?php
    $filename = $_GET['file'];
    echo $filename. '<br>';

    $contents = file($filename);
    
    foreach($contents as $line){
        echo $line.'<br>';
    }

?>