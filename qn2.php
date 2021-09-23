<!-- 参考 https://watsunblog.com/contactform-php/ -->

<!-- php start -->
<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $sylinder = $_POST["sylinder"];
    $spare_sylinder = $_POST["spare_sylinder"];
    $piston = $_POST["piston"];
    $coil = $_POST["coil"];
    $coil2 = $_POST["coil2"];
}

// 発注個数を連想配列に格納する
$results = array(
    "sylinder" => $sylinder,
    "spare_sylinder" => $spare_sylinder,
    "piston" => $piston,
    "coil" => $coil,
    "coil2" => $coil2
);

// var_dump($results);  //check purposeのため

// 今回の発注個数をdata.txtに上書きする
$textfile = 'data/data2.txt';
if(isset($_POST["submit"])){
    $file = fopen($textfile, 'w');
    // file_put_contents($textfile, print_r($results, true));
    $results_jsonencode = json_encode($results);
    file_put_contents($textfile, $results_jsonencode, LOCK_EX);
    chmod($textfile, 0644);
}

// 過去の発注個数をdata_total.txtから呼び出す
// Jsonデータをjson_decode, trueで連想配列に戻す
// $textfile = 'data/data_total.txt';
// $data_jsonencode = file_get_contents($textfile);
// $results_total = json_decode($data_jsonencode, true); 
//trueを記述しないとstdClassってvalueを取り出しにくい配列になる


// 過去発注数のarray
// $results_total = array(
//     "sylinder" =>$results_total + $sylinder,
//     "spare_sylinder" =>$results_total + $spare_sylinder,
//     "piston" =>$results_total + $piston,
//     "coil" =>$results_total + $coil,
//     "coil2" =>$results_total + $coil2
// );

// total個数をdats_total.txtに上書きする
// $textfile = 'data/data_total.txt';
// if(isset($_POST["submit"])){
//     $file = fopen($textfile, 'w');
//     // file_put_contents($textfile, print_r($results_total . "\n", true));
//     $results_total_jsonencode = json_encode($results_total);
//     file_put_contents($textfile, $results_total_jsonencode, LOCK_EX);
//     chmod($textfile, 0644);
// }

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/qn2.css">
    <title>qn2</title>
</head>
<body>

<form action="qn2.php" method="post" name="confirm">
<input type="hidden" name="sylinder" value='<?php echo $sylinder; ?>'>
<input type="hidden" name="spare_sylinder" value='<?php echo $spare_sylinder; ?>'>
<input type="hidden" name="piston" value='<?php echo $piston; ?>'>
<input type="hidden" name="coil" value='<?php echo $coil; ?>'>
<input type="hidden" name="coil2" value='<?php echo $coil2; ?>'>

<h1 class="title">発注個数をご確認の上、「発注する」ボタンを押してください</h1>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
    function buttonclick() {  
        document.location.href = "http://localhost/GS/kadai05phpv2/qn3.php";
    }
    </script>
  <div class="btn-flex">
    <input class="btn revise" type="button" value="修正する" onclick="history.back(-1)">
    <!-- <?php $URL ="http://localhost/GS/kadai05phpv2/qn3.php"; ?> -->
    <button class="btn submit" type="submit" name="submit" id="submit" onclick="buttonclick()">発注する</button>
  </div>

</form>    


</body>
</html>

