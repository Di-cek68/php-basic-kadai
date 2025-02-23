<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP KADAI_016</title>
</head>
<body>

<?php

/*
class Dog {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function bark() {
        echo $this->name . " says: ワンワン！";
    }

}
$my1Dog = new Dog("ポチ");
$my1Dog->bark();
*/

class Food {
    private $name;
    private $price;

    public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function show_price() {
        echo "価格: " . $this->price . "円\n";
    }
}

class Animal {
    private $name;
    private $height;
    private $weight;

    public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    public function show_height() {
        echo "高さ: " . $this->height . "cm\n";
    }
}

?>

<?php
// ... (Step2のコード)

// Foodクラスのインスタンスを作成
$apple = new Food("リンゴ", 150);
$banana = new Food("バナナ", 200);

// Animalクラスのインスタンスを作成
$dog = new Animal("ポチ", 50, 20);
$cat = new Animal("タマ", 30, 10);

// インスタンスを出力
echo "Foodインスタンス:<br>\n";
print_r($apple);
echo "<br>\n";
print_r($banana);
echo "<br>\n";
echo "<hr>\n";
echo "Animalインスタンス:<br>\n";
print_r($dog);
echo "<br>\n";
print_r($cat);
echo "<br>\n";
echo "<hr>\n";
// メソッドを実行
$apple->show_price();
echo "<br>\n";
$dog->show_height();

?>