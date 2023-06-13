<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<?php
$firstPattern = '/Og[gk]i/'; // this syntax means it has to contain a word beginning with Og then it has to be one of the letter put in square brackedt and end in i
$secondPattern = '/Og[^gk]i/'; // in this case it has not to contain one of the letter between the g or k
$thirdPattern = '/Og[a-z]i/'; // in this case it has to conain a letter between a and z//that's considered a pattern
//[A-Z] letter from a to z uppercase [a-Z] - letters from a to z both lowercase or uppercase [0-9] - numbers from 0 to 9

$text = 'Oggi è bel tempo';

$imgName = 'firm logo';
$spacePatternCheck = '/\s/';
$replacement = '_';

echo preg_replace($spacePatternCheck, $replacement, $imgName);
?>

<body>
  <h1>Learning regex in PHP</h1>
</body>

</html>