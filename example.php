<?php 
//superglobal variables - derived from form - post 
//echo 'Hello'.$_POST['name']. '' .$_POST['surname'];

// $name = $_POST['name'];
// echo $name;

// function greet(){
//     $GLOBALS['name'] ='Orazio';
//     echo $GLOBALS['name'];
// }
// greet();
// echo $name

//DECLARING CONSTANTS
define('WAY', 'via carrera');
const ADDRESS = 'viale genova';
echo WAY;
echo ADDRESS;
function greet(){
    define('GREET', 'hi there');
}
greet();
?>