<?php
//セッションを使うことを宣言
session_start();
//ローカルライブラリに接続
require_once '../method.php';

//ログイン状態の場合ログイン後のページにリダイレクト
if(isset($_SESSION["mail"])){
    header("Location: ../syop/mypage.php");
    exit();
}else {
    //postされて来なかったとき
    if (count($_POST) === 0) {

    }
//postされて来た場合
    else {
        //DB接続
        $pdo = DB_connect();
        $i = 1;
        $mail=$pdo -> query('SELECT * FROM member');
        $result = $mail->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $ail){
            //同じメールアドレスを検索する
            if($ail['mail'] == $_POST['mail']) {
                session_regenerate_id(TRUE); //セッションidを再発行
                $_SESSION["user_id"] = $ail['user_id'];
                $_SESSION["mail"] = $ail['mail']; //セッションにログイン情報を登録
                $_SESSION["name"] = $ail['user_name'];
                $_SESSION["address"] = $ail['address'];
                $_SESSION['login'] = true;
                $_SESSION['message'] = "ようこそ、{$ail['user_name']}さん";
                break;
            }
        }
        $rnd= substr(bin2hex(random_bytes(8)), 8, );;
        $ins=$pdo->prepare('INSERT INTO member(mail, user_name, password, join_date, google_check) 
                          VALUES(?,?,?,?,?)');
        $ins->bindValue(1,$_POST['mail'], PDO::PARAM_STR);
        $ins->bindValue(2,$_POST['name'], PDO::PARAM_STR);
        $ins->bindValue(3, $rnd, PDO::PARAM_STR);
        $ins->bindValue(4, date("Y-m-d"), PDO::PARAM_STR);
        $ins->bindValue(5, true, PDO::PARAM_STR);
        $ins->execute();
        $se=$pdo->prepare('select * from member where mail = :mail');
        $se->bindValue(':mail', $_SESSION['mail'], PDO::PARAM_STR);
        $se->execute();
        $result=$se->fetch(PDO::FETCH_ASSOC);
        session_regenerate_id(TRUE); //セッションidを再発行
        $_SESSION["user_id"] = $result['user_id'];
        $_SESSION["mail"] = $result['mail']; //セッションにログイン情報を登録
        $_SESSION["name"] = $result['user_name'];
        $_SESSION["address"] = $result['address'];
        $_SESSION['login'] = true;
        $_SESSION['message'] = "ようこそ、{$result['user_name']}さん";
    }
    header("Location: ../syop/top.php"); //ログイン後のページにリダイレクト
    exit();


}


