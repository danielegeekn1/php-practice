<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<?php
//$firstPattern = '/Og[gk]i/'; // this syntax means it has to contain a word beginning with Og then it has to be one of the letter put in square brackedt and end in i
//$secondPattern = '/Og[^gk]i/'; // in this case it has not to contain one of the letter between the g or k
//$thirdPattern = '/Og[a-z]i/'; // in this case it has to conain a letter between a and z//that's considered a pattern
//[A-Z] letter from a to z uppercase [a-Z] - letters from a to z both lowercase or uppercase [0-9] - numbers from 0 to 9

//predefined class
// $text = 'Oggi è bel tempo';


// $imgName = 'firm logo';
// $spacePatternCheck = '/\s/';
// $replacement = '_';

//echo preg_replace($spacePatternCheck, $replacement, $imgName);

// $pattern = '/[\s,]+/';
// $text = 'My favourite colors are red, green and blue';
// $parts = preg_split($pattern, $text);

// foreach($parts as $part){
//   echo $part . '</br>';
// };

// $pattern = "/^M/";
// $names = array('Marco Rossi', 'Luca Verdi', 'Mattia Gialli');
// $matches = preg_grep($pattern, $names);

// foreach($matches as $match){
//   echo $match . '</br>';
// };

$pattern = '/\bcar\w*/';
$replacement = '<b>$0</b>';
$text = 'Words beginning with car: cars, cart, carrot, cartoon. Words ending with car: scar, supercar.';

echo preg_replace($pattern, $replacement, $text);
?>

<body>
  <h1>Learning regex in PHP</h1>
</body>

</html>