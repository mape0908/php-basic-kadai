<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>kadai_016</title>
 </head>
 
 <body>
     <p>
         <?php
         // foodクラスを定義する
         class Food {
             // プロパティを定義する  
             private $name;
             private $price;

             // メソッドを定義する
            public function show_price(int $price) {
              echo $this->price . '<br>';
          }
          

             //コンストラクタを作成
             public function __construct(string $name, int $price) {
              $this->name = $name;
              $this->price = $price;
             }
         }  
 
         // インスタンス化する
         $food = new Food('potato', 250);
 
         // インスタンス$userの各プロパティの値を出力する
         print_r($food);

         //改行
         echo '<br>';

         // animalクラスを定義する
         class Animal {
          // プロパティを定義する  
          private $name;
          private $height;
          private $weight;

          // メソッドを定義する
          public function show_height(int $height) {
            echo $this->height . '<br>';
          }


          //コンストラクタを作成
          public function __construct(string $name, int $height, int $weight) {
           $this->name = $name;
           $this->height = $height;
           $this->weight = $weight;
          }
      }

      // インスタンス化する
      $animal = new Animal('dog', 60, 5000);

      // インスタンス$userの各プロパティの値を出力する
      print_r($animal);

      //改行
      echo '<br>';

      //メソッドにアクセスして実行
      $food->show_price(250);

      //メソッドにアクセスして実行
      $animal->show_height(60);

         ?>
     </p>
 </body>
 
 </html>