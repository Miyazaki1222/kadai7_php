<?php
$status = $_POST['status'];
$time = date("Y-m-d H:i:s");
$str = $time . "," . $status;

// POSTデータ確認用
echo $status . '<br>';
echo $time . '<br>';

// 
var_dump($str);



// data.csvに追記
$file = fopen("data/data.csv", "a");
fwrite($file, $str . "\n");
fclose($file);

// 入力画面に戻る
header("Location: index.php");
exit;
?>