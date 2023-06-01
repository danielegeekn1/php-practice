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
//displayNumber();
function changeGlobalScope()
{
  $GLOBALS['number'] = 5;
  echo $GLOBALS['number'] . '</br>'; //it'll output 5 sicne i changed this global variable value
}
changeGlobalScope();
//echo $number; //it will output 10 - since it'll take the value of the variable in global scope
echo $number; //it'll output 5 since i changed the value of this global variable from inside the function

//from php 7 we could assign a type to function parameters
$sum = function (int $val1, int $val2) {
  $newSum = $val1 * $val2;
  echo $newSum;
};
$sum($number, 2);
function newSum(int $val1, int $val2)
{
  $newNewSum = $val1 * $val2;
  return $newNewSum;
};
echo newSum($number, 4)
?>

<body>
  <h1>Functions in php</h1>

</body>

</html>