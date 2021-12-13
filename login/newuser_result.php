<?php
session_start();
$_SESSION['err']=null;

//postされていない場合入力画面へ飛ばす
if(!isset($_POST['mail'])){
    header("Location:newuser.php");
    exit();
}
//ローカルライブラリに接続
require_once '../method.php';
//DB接続
$pdo = DB_connect();

$ame=$pdo -> prepare('SELECT * FROM member');
$ame -> execute();
//重複しているメールアドレスを検索する
foreach ($ame as $ae){
    if($ae['mail'] == $_POST['mail']){
        //同じメールアドレスが見つかった場合、入力ページへ飛ばし、メッセージを表示する
        $_SESSION['err'] = '同じメールアドレスが使用されています。';
        header("location: newuser.php");
        exit();
    }
}

$ins=$pdo->prepare('INSERT INTO member(mail, user_name, password, join_date) 
                          VALUES(?,?,?,?)');
$ins->bindValue(1,$_POST['mail'], PDO::PARAM_STR);
$ins->bindValue(2,$_POST['user_name'], PDO::PARAM_STR);
$ins->bindValue(3,$_POST['password'], PDO::PARAM_STR);
$ins->bindValue(4, date("Y-m-d"), PDO::PARAM_STR);
$ins->execute();

$mail=$pdo -> prepare('SELECT * FROM member');
$mail -> execute();
foreach ($mail as $ail){
    if($ail['mail'] == $_POST['mail']){
        session_regenerate_id(TRUE); //セッションidを再発行
        $_SESSION["user_id"] = $ail['user_id'];
        $_SESSION["login_account"] = $ail['mail']; //セッションにログイン情報を登録
        $_SESSION["name"] = $ail['user_name'];
        $_SESSION["address"] = $ail['address'];
        $_SESSION['login'] = true;
        $_SESSION['message'] = "ようこそ、{$ail['user_name']}さん";
        header("Location: ../syop/top.php");
        exit();
    }
}
