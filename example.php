<?php 

$file = 'note.txt';
if(file_exists($file)){
    $ref = fopen($file,"r");

    $content = fread($ref, filesize($file));
    echo $content;
    fclose($ref);
}else{
    echo 'file does not exists';
};

?>