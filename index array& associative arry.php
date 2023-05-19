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
echo"<h2>Index Array</h2>";
$cars_name= array('TOYOTA','BMW','Honda','RolsRoyce');
foreach($cars_name as $value)
{
echo " $value <br>";
}

echo"<h2>Associative array</h2>";

$cars_price=array('TOYOTA'=>'50lacs','BMW'=>'90lcs','Honda'=>'40lcs','RolsRoyce'=>'600lcs');
foreach($cars_price as $key=>$value)
{
    echo"$key = $value <br>";
}

?>



</body>
</html>