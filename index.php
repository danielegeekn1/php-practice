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
  $name ='Daniele';
  //Declaring a variable
  $surname = 'Basile';
  $alias_name = 'King';

  $age = 34;
  $float_number = 34.09;
  $is_online = true;

  $hobbies = ['coding', 'comics', 'anime', 'mtb'];
  $girlfriend;

  class Person
  {
    public $name;
    public $surname;
    public function __construct($name, $surname){
      $this->name = $name;
      $this->surname = $surname;
    }
  }
  $person1 = new Person('Giulia', 'Paolino');

  $example_string = "Silmarillion is epic, clearly since Talkien himself made it";
  $avatar_name = 'Feanor';

  //int data types
  $operator_1=36;
  $operator_2=5.10;
  $operator_3='10';
  $operator_4='(int)34'; // this int is necessary to change its value, which now it'll be int

  $negative_operator=-3;
  //check if a variable is of int type
      //var_dump(is_int($operator_1)); //should return bool true
  //check if a variable is of float type
      //var_dump(is_float($operator_2));
  
  //    echo $operator_1 + $operator_3; // it adds the number put i string in operator 3 to 36 int data of operator_1 
  //$result = $operator_1 + $operator_3;
  //var_dump($result); // return int in this case
  //var_dump($operator_4);//it should return int
  //var_dump(abs($negative_operator));//it return the number without the previous sign, so only 3 in this case


  //echo $example_string .$avatar_name; // two strings joined
  //echo strlen($example_string);//the length of the string 
  //echo strtolower($example_string);//string in lower case
  //echo strtoupper($example_string);//string in uppercase
  //echo str_word_count($example_string);//return the exact number of words contained in this variable
  //echo strrev($example_string); // string at reverse
  //echo strpos($example_string, 'Silmarillion'); //position of a specific string in our variable
  //echo substr($example_string, 12);//start from a specific position of our string
  //echo str_replace('Silmarillion', 'The Lord of the rings',$example_string );//replace the word silmarillion with the one put as second argument

  //echo min(10, 56, 23, 78, 100); //return the min number
  //echo max(10, 56, 23, 78, 100);//return the max number

  //echo sqrt(25);//return the square root of a number
  //echo round(10.43);//return the rounded number

  //echo rand(0, 10); //generate a random number from 0 to 10 

  /* 
  different math operations
  echo 'fo' .$operator_1 + $operator_2;

  echo 'so' .$operator_1 - $operator_2;
  echo 'to' .$operator_1 * $operator_2;
  echo 'fo' .$operator_1 / $operator_2;
  echo $operator_1 % $operator_2;
  echo $operator_1 += 5;
  */
 $cities =['Ala', 'Brentonico', 'Bolzano', 'Merano', 'Braies'];
 $cities[2] = 'Bressanone';
 echo $cities[0];
 echo $cities[2]; // instead of Bolzano we'll have Bressanone, since we've previousl changes that value
 //for loop to iterate our array
 for($i=0;$i< count($cities);$i++){
    echo ($cities[$i]);
 }
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
    <?php
    //this is to have delcared the type of the data
    /*
    var_dump($alias_name); //string 
    var_dump($age); //int/number
    var_dump($float_number);//float
    var_dump($is_online);//boolean
    var_dump($hobbies);//array with string data
    var_dump($girlfriend);//NULL - not defined yet

    var_dump($person1); //CLASS - but returned as object with two string data as in fact has been put

    //changing the types of a variable - not bound to the original type
    $name = 44;
    var_dump($name); // now the type will be int/number
    */

    ?>
  </body>
</html>
