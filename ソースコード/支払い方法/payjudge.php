<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<!--あとでcssで整える-->
<h1>支払い方法追加結果画面</h1>
<?php require 'header.php'?>
<?php
$pdo = new PDO('mysql:host=mysql153.phy.lolipop.lan;
dbname=LAA1290607-smartphone;charset=UTF8',
    'LAA1290607',
    'Pass2525');

$sql = $pdo->prepare('INSERT INTO m_credit(customer_code,card_number) VALUES(?,?)');
$sql->bindValue(1,$_SESSION['name'],PDO::PARAM_STR);
$sql->bindValue(2,$_POST['card'],PDO::PARAM_STR);
$sql->execute();
echo '追加しました<br>';
echo '<META http-equiv="Refresh" content="10;URL=paymethod.php">';
?>
</body>
</html>
