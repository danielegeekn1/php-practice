<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<?php
$number = 10;
function displayNumber()
{
  //echo $number; // this i can't do since it should be put inside the function for scope reason
  $number = 8;
  echo $number; // it will output 8
};
displayNumber();
echo $number; //it will output 10 - since it'll take the value of the variable in global scope
?>

<body>
  <h1>Functions in php</h1>

</body>

</html>