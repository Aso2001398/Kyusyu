<?php
session_start();
$_SESSION['log']='tai';


//ローカルライブラリに接続
require_once '../method.php';

//DB接続
$pdo = new PDO('mysql:host=mysql154.phy.lolipop.lan;
                dbname=LAA1290554-kyusyu;charser=utf8',
    'LAA1290554', '1234');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>User-Out</title>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id"
          content="165332448198-6hl3alti9ihbgihoit1nqu4f6bmvphtg.apps.googleusercontent.com">
    <link rel="icon"  type="image/x-icon" sizes="144*144" href="taikai/favicon.ico">
    <link rel="stylesheet" href="css/taikai_style.css"><!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title>User-Out</title>
        <link rel="icon"  type="image/x-icon" sizes="144*144" href="taikai/favicon.ico">
        <link rel="stylesheet" href="css/taikai_style.css">
        <style>
            body{background-color:gray;}
            button{
                width: 80px;
                height:40px;
            }
        </style>
    </head>
    <body>
    <button  class="button" onclick=history.back()>戻る</button>
    <div class="logo">
        <img src="../syop/img/logo1.png" title="九州旅行記" width="400" height="200" >
    </div>
    <div class = "nav">
        <div>
            <div class = "bgDiv">
                <div class = "taikai">
                    <div class ="mokujii">
                        <h1>退会しますか？</h1>
                    </div>
                    <button class = "btn1" onclick="window.location.href = '../syop/mypage.php'">取消</button>
                    <button class = "btn2" onclick="window.location.href = '../login/enter.php'">確認</button>


                </div>
        </div>
    </div>
    </div>
    <script src="https://apis.google.com/js/platform.js?onload=onLoad" async defer></script>
    </body>
</html>