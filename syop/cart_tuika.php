<?php
session_start();
$_SESSION['cart'] = $_POST['item_name'];
if(!isset($_SESSION['login'])){
    $_SESSION['message'] = 'カートにアイテムを入れるにはログインを行ってください';
    header("Location: ../login/kaiin-login.php");
    exit();
}
