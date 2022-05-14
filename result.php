<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="text-align: center;">
    <h1 >
        <?php
        $bmi = $_GET['bmi'];
        echo "BMI為" . $bmi;
        ?>
    </h1>
    <div>
        <?php
        // $result = $bmi;
        switch($bmi){
            case $bmi < 18.5;
            echo "體重過輕";
            break;
            case $bmi >18.5 && $bmi<24;
            echo "體重正常";
            break;
            case $bmi >=24 && $bmi<27;
            echo "體重過重";
            break;
            case $bmi >=27 && $bmi<30;
            echo "輕度肥胖";
            break;
            case $bmi >=30 && $bmi<35;
            echo "中度肥胖";
            break;
            default;
            echo "重度肥胖";
            break;
        }
        ?>
    </div>
    <a href="./BMI.html">
        <button>
            回上一頁
        </button>
    </a>
</body>

</html>