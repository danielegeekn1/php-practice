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

$text = 'Oggi è bel tempo';
if (preg_match($firstPattern, $text)) {
  echo 'Match found';
} else {
  echo 'match not found';
};
?>

<body>
  <h1>Learning regex in PHP</h1>
</body>

</html>