<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>kadai_05</title>
</head>

<body>
  <p>
    <?php
     //変数を代入する
     $number_1 = 80;
     $number_2 = 60;
     $number_3 = 55;
     $number_4 = 40;
     $number_5 = 100;
     $number_6 = 25;
     $number_7 = 80;
     $number_8 = 95;
     $number_9 = 30;
     $number_10 = 60;

    //平均点用の変数を代入
    $sum = $number_1 + $number_2 + $number_3 + $number_4 + $number_5 + $number_6 + $number_7 + $number_8 + $number_9 + $number_10;
    
     //平均点算出
     echo $sum /  10;
     ?>
  </p>
</body>

</html>