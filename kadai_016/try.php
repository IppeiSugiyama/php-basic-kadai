<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>kadai_016</title>
</head>

<body>
  <p>
    <?php
    // Foodクラスを定義
    class Food {
      private $name;
      private $price;
      
      // コンストラクタ
      public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
      }

      // 価格を表示するメソッド
      public function show_price() {
        echo  $this->price . "<br>";
      }
        
    } 
    ?>
  </p>

  <p>
    <?php
    // Animalクラスを定義
    class Animal {
      private $name;
      private $height;
      private $weight;
      
      // コンストラクタ
      public function __construct(string $name, float $height, float $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }

      // 身長を表示するメソッド
      public function show_height() {
        echo $this->height . "<br>";
      }
    }
    ?>
  </p>

  <p>
    <?php
    // インスタンスを作成→出力
    $potato = new Food("potato", 250);
    $dog = new Animal("dog", 60, 5000);

    print_r($potato);
    print_r($dog);
    
     // FoodClassのメソッドを使用
    $potato->show_price();
    
    // AnimalClassのメソッドを使用
    $dog->show_height();

    ?>
  </p>
</body>

</html>
