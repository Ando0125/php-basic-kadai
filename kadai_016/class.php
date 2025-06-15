<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>

 <?php
  class Food {
    public $name;
    public $price;

    public function __construct(string $name,int $price) {
      $this ->name = $name;
      $this ->price = $price; 
    }

    public function show_price() {
      echo '価格:' . $this -> price . '円<br>';
    }
  }

  class Animal {
    public $name;
    public $height;
    public $weight;

    public function __construct($name,$height,$weight) {
      $this -> name = $name;
      $this -> height = $height;
      $this -> weight = $weight;
    }

    public function show_height() {
      echo '身長' . $this -> height . 'cm<br>';
    }
  }

  $food_item = new Food('リンゴ',150);

  $animal_item = new Animal('キリン',500,900);

  echo '<pre>';
  print_r($food_item);
  print_r($animal_item);
  echo '</pre>';

  $food_item -> show_price();
  $animal_item -> show_height();
  ?>
</body>

</html>