<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<?php

// for ($i = 0; $i < 5; $i++) {
//   echo ($i . '</br>');
// };
// $personAssocArr = [
//   'name' => 'Luca',
//   'surname' => 'Rossi',
//   'age' => '25'
// ];
// // foreach mostly used for associative arrays
// foreach ($personAssocArr as $key => $value) {
//   echo $value . '</br>';
// };
// $i = 0;
// while ($i < 5) {
//   echo $i . '</br>';
//   $i++;
// };

// do {
//   echo $i . '</br>';
//   $i++;
// } while ($i < 5)
for ($i = 0; $i < 5; $i++) {

  if ($i == 3) {
    continue;
  };
  echo $i . '</br>';
};
?>

<body>
  <h1>Loop in php</h1>
</body>

</html>