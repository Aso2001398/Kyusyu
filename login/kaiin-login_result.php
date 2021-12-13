<?php
//セッションを使うことを宣言
session_start();

//ローカルライブラリに接続
require_once '../method.php';

//DB接続
$pdo = DB_connect();
$message = "";
//ログイン状態の場合ログイン後のページにリダイレクト
if (isset($_SESSION["login"])) {
    session_regenerate_id(TRUE);
    header("Location: ../syop/top.php");
    exit();
}

//postされて来なかったとき
if (count($_POST) === 0) {
    header("Location: kaiin-login.php");
    exit();
}

//postされて来た場合
else {
    $mail=$pdo -> prepare('SELECT * FROM member');
    $mail -> execute();
    foreach ($mail as $ail){
        //同じメールアドレスを検索する
        if($ail['mail'] == $_POST['mail']) {
            //かぶっていた場合googleでの登録か確認する
            if ($ail['google_check']) {
                $message = 'googleアカウントからログインしてください';
                }else{
                try {
                    if ($ail['password']!=$_POST['password']) {
                        throw new Exception();
                    }
                    //正しいとき
                    else {
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
                    }
                }catch (Exception $e){
                    $message="ユーザー名かパスワードが違います";
                }
            }
        }else{
            $message = "ユーザー名かパスワードが違います";
        }
    }
}
$_SESSION['message'] = $message;
header("Location: kaiin-login.php");
exit();
