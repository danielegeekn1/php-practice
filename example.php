<?php 

$file = 'note.txt';
if(file_exists($file)){
    // $ref = fopen($file,"r");

    // $content = fread($ref, filesize($file));
    // echo $content;
    // fclose($ref);

    //open file without opening it
    $content = file_get_contents($file);
    echo $content;
}else{
    echo 'file does not exists';
};

?>