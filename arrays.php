<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Loops</title>
</head>
<body>
  <?php 
  echo "<h2>While Loop</h2>";
  /*Syntax:
            while (condition is true) 
            {
            code to be executed;
            }*/
$ProfileNumber = 1;
while($ProfileNumber <= 5) 
{
  echo "The Profile number is: $ProfileNumber <br>";
  $ProfileNumber++;
}           
echo "<h2>Do..While Loop</h2>";
/*Syntax
do 
{
    code to be executed;
}while (condition is true);
*/
$ProfileNumber = 6;
do
{
  echo "The Profile number is: $ProfileNumber <br>";
  $ProfileNumber++;
}while($ProfileNumber <= 5);  
echo "<h2>for Loop</h2>";
/*Syntax
for (init counter; test counter; increment counter) 
{
    code to be executed for each iteration;
}*/
for ($ProfileNumber = 0; $ProfileNumber <= 10; $ProfileNumber++) 
{
  echo "The number is: $ProfileNumber <br>";
}
echo "<h2>foreach Loop</h2>";
/*Syntax
foreach ($array as $value) 
{
  code to be executed;
}*/
echo "<h2>Indexed Array</h2>";
$Fruits = array("Apple", "Grapes", "Mango", "strawberry");//Indexed Array
foreach ($Fruits  as $value) 
{
  echo "$value <br>";
}
echo "<h2>Associative  Array</h2>";
$Age = array("Hamza"=>"25", "Zoraiz"=>"23", "Missam"=>"24");//Associative Array
foreach($Age as $Key => $Value)
{
  echo "$Key = $Value<br>";
}
  ?>
</body>
</html>