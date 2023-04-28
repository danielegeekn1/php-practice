<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tutorial php 2023</title>
    <style>
      form {
        display: flex;
        flex-direction: column;
        width: 200px;
        padding: 40px;
      }
      label {
        margin-bottom: 5px;
      }
      input {
        margin: 10px;
      }
    </style>
  </head>
  <?php 
  $name ='Daniele'
  ?>
  <body>
    <h1>tutorial php</h1>
    <h3>My name is <?php echo $name; ?></h3>
    <form action="example.php" method="post">
      <label for="name">Name</label>
      <input type="text" name="name" placeholder="insert your name" id="name" />
      <label for="surname">Surname</label>
      <input
        type="text"
        name="surname"
        placeholder="insert your surname"
        id="surname"
      />
      <input type="submit" value="send data" />
    </form>
    <!--php if syntax -->
    <?php if(1<5): ?>
      Hi I am the first
    <?php else: ?>
      I am the second now
    <?php endif; ?>
  </body>
</html>
