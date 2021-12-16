<?php
session_start();
//ローカルライブラリに接続
require_once '../method.php';

//DB接続
$pdo = DB_connect();
$ins=$pdo->prepare('update member set true_name=?,yubin=?,address=? where user_id=?');
$ins->bindValue(1,$_POST['name'], PDO::PARAM_STR);
$ins->bindValue(2,$_POST['yubin'], PDO::PARAM_STR);
$ins->bindValue(3,$_POST['address'], PDO::PARAM_STR);
$ins->bindValue(4,$_SESSION['user_id'], PDO::PARAM_STR);
$ins->execute();

header("Location: Addresschoose.php");
exit();