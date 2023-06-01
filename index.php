<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<?php
//format
/*
d- day in numeric format - 1/2/3...
D - day in string format, but shortened - Mon/Tue/... 
l - data in string format - not shortened - Monday/Tuesday .. 
m - month in numeric format - 
M - month in string format - June/july... 
y - last two number of year - 88/89...
Y - year not shortened - 1988/1989... 

h - hour in anglosaxon way - 0to12  
H - hour from 0-24 
i - minutes
s- seconds
a - am/pm without camel case 
A - am/pm with camel case
*/
$date = date('d-m-Y', 0); //format and timestamp _ this 0 means the first timestamp ever made in 1970
$date2 = date('h:i:sA', 0);
//echo $date2;

//getting the current timestamp
$currDate = date('d-m-Y H:i:s', time());
//echo $currDate;
//creating actual time stamp
$mkTime = mktime(11, 54, 35, 06, 1, 2021); //5 parameters, hour, minutes, second, month, day, year
//echo $mkTime;

//easier way to do it
$actTime = strtotime('01-06-2023 11:57:00');
//echo $actTime;
//getting future timestamp
$nextDate = date('d-m-Y', strtotime('01-06-2023' . '+7days'));
echo $nextDate;
?>

<body>
  <h1>Working with dates in php</h1>
</body>

</html>