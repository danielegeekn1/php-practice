<?php 
//superglobal variables - derived from form - post 
//echo 'Hello'.$_POST['name']. '' .$_POST['surname'];

$name = $_POST['name'];
echo $name;

function greet(){
    $GLOBALS['name'] ='Orazio';
    echo $GLOBALS['name'];
}
greet();
echo $name
?>