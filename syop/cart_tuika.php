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


$item=$pdo->prepare('select * from item where item_name = ?');
$item->bindValue(1,$_POST['item_name'],PDO::PARAM_STR);
$item->execute();
$result=$item->fetch(PDO::FETCH_ASSOC);

$cart=$pdo->prepare('select * from cart where user_id = ?');
$cart->bindValue(1, $_SESSION['user_id'], PDO::PARAM_STR);
$cart->execute();
foreach($cart as $art){
    if($art['item_id']==$result['item_id']){
        $_SESSION['cart_mes'] = 'すでにカートに入っています';
        header("Location: ../EC/Card.php");
        exit();
    }
}

$in=$pdo->prepare('INSERT INTO cart(user_id,item_id) VALUES(?,?)');
$in->bindValue(1,$_SESSION['user_id'],PDO::PARAM_STR);
$in->bindValue(2,$result['item_id'],PDO::PARAM_STR);
$in->execute();

$_SESSION['cart'] = null;
header("Location: ../EC/Card.php");
exit();