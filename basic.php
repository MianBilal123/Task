<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php    
echo "hello world ! <br>";
echo"<h2> operators </h2>";

// 1.Arithmatic operators
// 2.assignment operators
// 3.Comparison operators
// 4.Logical operators

echo "1.Arithmatic operators";
$x=20;
$y=25;
echo $x+$y."<br>";
echo $x-$y."<br>";
echo $x*$y."<br>";
echo $x%$y."<br>";
echo $x**$y."<br>";

echo"2.assignment operators.<br>";

$X=$y;
echo $X+=8 ;
echo "<br>";
$y=$X;
echo $y-=8; 
echo "<br>";
echo $y*=8;
echo "<br>";
echo $y/=8;
echo "<br>";


echo "3.Comparison operators <br>";
$x=10;
$y=20;
echo var_dump ($x==$y) ."<br>";
echo var_dump ($x>$y) ."<br>";
echo var_dump ($x<$y) ."<br>";
echo var_dump ($x<>$y) ."<br>";

echo "4.Logical operators <br>";
$x=50;
$y=50;
echo var_dump ($x&&$y). "<br>";
echo var_dump ($x or $y). "<br>";
echo var_dump ($x xor $y). "<br>";





?>
</body>
</html>