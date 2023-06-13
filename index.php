<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form handling</title>
  <style>
.form_style{
  display:flex;
  flex-direction:column;
  align-items:center;
  gap:0.8rem;
  color:lightgrey;
}
#name, #surname{
  width:250px;
  border-radius:23px;
}
#btn_style{
  width:180px;
  border-radius:23px;
}
  </style>
</head>
<?php

?>

<body>
  <h1>Form handling in PHP</h1>
  <form class="form_style" action="example.php" method="GET">
    <label for="name">Name</label>
    <input type="text" name="name" id="name">

    <label for="surname">Surname</label>
    <input type="text" name="surname" id="surname">

    <input type="submit" id="btn_style" value="send module">
  </form>
</body>

</html>