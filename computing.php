<?php

print_r($_GET);
echo "<br>";


$height=$_GET ['height'];
$weight=$_GET ['weight'];

echo "身高為:" . $height;
echo "<br>";
echo "體重為:" . $weight;
echo "<br>";

$bmi=round($weight/(($height/100)*($height/100)) , 1);
header("location:result.php?bmi=$bmi")

?>