<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>kadai_05</title>
</head>

<body>
  <p>この文章はHTMLで出力しています。</p>
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

     //合計点算出
     echo $number_1 + $number_2 + $number_3 + $number_4 + $number_5 + $number_6 + $number_7 + $number_8 + $number_9 + $number_10;

    //改行
    echo '<br>';

    //平均点用の変数を代入

    $ave = 80 + 60 + 55 + 40 + 100 + 25 + 80 + 95 + 30 + 60;
    
     //平均点算出
     echo $ave /  10;
     ?>
  </p>
</body>

</html>