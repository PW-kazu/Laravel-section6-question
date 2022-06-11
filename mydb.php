<?php

$dsn = 'mysql:dbname=mydb;host=localhost';
$user = 'root';
$password = 'root';

try{
  $dbh = new PDO($dsn,$user,$password);
  print("接続に成功しました。<br>");
} catch (PDOException $e) {
  print('Error:'.$e->getMessage());
}

//追加
$count = $dbh->exec('INSERT INTO items SET id =1,item_name="peach", price=210, keyword="缶詰,ピンク,甘い"');
echo $count.'件のデータを挿入しました';

$dbn = null;

?>

