<?php
if(empty($_GET)){
    $height=$_POST ['height'];
    $weight=$_POST ['weight'];
}else{
    $height=$_GET ['height'];
    $weight=$_GET ['weight'];
}

$bmi=round($weight/(($height/100)*($height/100)) , 1);

$result = '';
switch($bmi){
    case $bmi < 18.5;
    $result = "體重過輕";
    break;
    case $bmi >=18.5 && $bmi<24;
    $result = "體重正常";
    break;
    case $bmi >=24 && $bmi<27;
    $result = "體重過重";
    break;
    case $bmi >=27 && $bmi<30;
    $result = "輕度肥胖";
    break;
    case $bmi >=30 && $bmi<35;
    $result = "中度肥胖";
    break;
    default;
    $result = "重度肥胖";
    break;
}


header("location:result.php?bmi=$bmi&result=$result")

?>