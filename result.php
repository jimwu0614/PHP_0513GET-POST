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
        BMI為:<?=$_GET['bmi'];?>
          <!-- 等同於<?php echo $_GET['bmi']?> -->
    </h1>
    <h1>
        判定結果為:<?=$_GET['result'];?>
    </h1>
    <a href="./BMI.html">
        <button>
            回上一頁
        </button>
    </a>
</body>

</html>