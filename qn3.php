<?php 
// error箇所を表示するためのコード
ini_set("display_errors", 1);
error_reporting(E_ALL);

// 改行が面倒なので関数化
function br(){
  echo "<br>";
}

// Jsonデータをjson_decode, trueで連想配列に戻す
$textfile = 'data/data2.txt';
$data_jsonencode = file_get_contents($textfile);
$results = json_decode($data_jsonencode, true); //trueを記述しないとstdClassってvalueを取り出しにくい形式になる（怒）

// var_dump($results);

// メモ
// jsondecodeがarray型かobeject型なのか（以下、例）
// array型 array {["name" => "もも"]}; $array["name"] or $array[0];で取得
// object型 class object {public $name = "もも"} $object->name;
// https://ysklog.net/php/7450.html
// var_dump($results);  //checkのため
// br();


// 配列の値を変数に入力
$sylinder = $results['sylinder'];
$spare_sylinder = $results['spare_sylinder'];
$piston = $results['piston'];
$coil = $results['coil'];
$coil2 = $results['coil2'];

// checkのため
// echo $sylinder;
// br();
// echo $spare_sylinder;
// br();
// echo $piston;
// br();
// echo $coil;
// br();
// echo $coil2;
// br();



?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/qn3.css">
  <title>発注結果</title>
</head>
<body>
<h1 class="title">発注個数一覧表</h1>

  <table class="order-table">
    <tr>
      <th>品物</th>
      <th> 発注個数</th>
      <th>画像</th>
    </tr>
    <tr>
      <td>Sylinder</td>
      <td><?= $sylinder?></td>
      <td><img src="img/sylinder.jpeg" alt=""></td>
    </tr>
    <tr>
      <td>Spare_Sylinder</td>
      <td><?= $spare_sylinder?></td>
      <td><img src="img/spare_sylinder.jpg" alt=""></td>
    </tr>
    <tr>
      <td>piston</td>
      <td><?= $piston?></td>
      <td><img src="img/piston.jpg" alt=""></td>
    </tr>
    <tr>
      <td>coil</td>
      <td><?= $coil?></td>
      <td><img src="img/coil.jpg" alt=""></td>
    </tr>
    <tr>
      <td>coil2</td>
      <td><?= $coil2?></td>
      <td><img src="img/coil2.jpg" alt=""></td>
    </tr>
  </table>
  
</body>
</html>