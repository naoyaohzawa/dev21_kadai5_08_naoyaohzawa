<!-- https://www.webdesignleaves.com/pr/php/php_basic_06.php?text_input=dada&scroll_top=12889 -->

<!-- phpスタート -->
<?php

// タイムゾーンを設定
ini_set('date.timezone', 'Asia/Tokyo');

// specialcharを関数化
function h($val){
    return htmlspecialchars($val, ENT_QUOTES, 'UTF-8');
}



?>
<!-- php end -->

<!-- html書き出し -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>発注画面</title>
</head>
<body>


<h1 class="title">
    <?php echo date('Y年m月d日');?>の部品発注
</h1>

<!-- ここから部品parts -->

<form action="qn2.php" method="post">
    <div class="form-flex">
        <div class="subform-flex">
            <p>Sylinder</p>
            <img src="img/sylinder.jpeg" alt="">
            <select name="sylinder" id="sylinder">
                <?php 
                
                for($i = 0; $i<10; $i++){
                    echo '<option value="'. $i .'">'.  $i. '</option>';
                }
                ?>
            </select>
        </div>
        
        <div class="subform-flex">
            <p>Spare_Sylinder</p>
            <img src="img/spare_sylinder.jpg" alt="">
            <select name="spare_sylinder" id="spare_sylinder">
                <?php 
                
                for($i = 0; $i<10; $i++){
                    echo '<option value="'. $i .'">'.  $i. '</option>';
                }
                ?>
            </select>
        </div>

        <div class="subform-flex">
            <p>Piston</p>
            <img src="img/piston.jpg" alt="">
            <select name="piston" id="piston">
                <?php 
                
                for($i = 0; $i<10; $i++){
                    echo '<option value="'. $i .'">'.  $i. '</option>';
                }
                ?>
            </select>
        </div>

        <div class="subform-flex">
            <p>Coil</p>
            <img src="img/coil.jpg" alt="">
            <select name="coil" id="coil">
                <?php 
                
                for($i = 0; $i<10; $i++){
                    echo '<option value="'. $i .'">'.  $i. '</option>';
                }
                ?>
            </select>
        </div>


        <div class="subform-flex">
            <p>Coil2</p>
            <img src="img/coil2.jpg" alt="">
            <select name="coil2" id="coil2">
                <?php 
                
                for($i = 0; $i<10; $i++){
                    echo '<option value="'. $i .'">'.  $i. '</option>';
                }
                ?>
            </select>
        </div>
    </div>
    <div class="submit">
        <input type="submit" value="発注確認に進む" name="confirm" id="order">
    </div>
    
</form>

    
</body>
</html>
