<?php

$number= array("2","3","6","8","9","12","250","300");

function Divisibelby3($number)
{

    $counter=0;
    foreach ($number as $value) {

        if ($value>=300){

            $counter=0;
        }
        elseif($value%3==0){

            $counter++;
        }
    }
echo $counter;


}
        Divisibelby3($number);




?>