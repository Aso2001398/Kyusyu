<?php
session_start();
//ローカルライブラリに接続
require_once '../method.php';

//DB接続
$pdo = DB_connect();

if(isset($_POST['item_name'])){
    $_SESSION['cart'] = $_POST['item_name'];
}
if(!isset($_SESSION['login'])){
    $_SESSION['message'] = 'カートにアイテムを入れるにはログインを行ってください';
    header("Location: ../login/kaiin-login.php");
    exit();
}

$se=$pdo->prepare('select * from member where mail = :mail');
$se->bindValue(':mail', $_SESSION['mail'], PDO::PARAM_STR);
$se->execute();
$result=$se->fetch(PDO::FETCH_ASSOC);

$item=$pdo->prepare('select * from item where item_name = ?');
$item->bindValue(1,$_POST['item_name'],PDO::PARAM_STR);
$item->execute();
$result2=$item->fetch(PDO::FETCH_ASSOC);


$in=$pdo->prepare('insert into cart(user_id,item_id) values (:user,:item)');
$in->bindValue(':user',$result['user_id'],PDO::PARAM_STR);
$in->bindValue(':item',$result2['item_id'],PDO::PARAM_STR);
$item->execute();

$_SESSION['cart'] = null;
header("Location: ../EC/Card.php");
exit();