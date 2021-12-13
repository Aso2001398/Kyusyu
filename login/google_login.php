<?php
//セッションを使うことを宣言
session_start();
//ローカルライブラリに接続
require_once '../method.php';

//ログイン状態の場合ログイン後のページにリダイレクト
if(isset($_SESSION["login_account"])){
    header("Location: ../syop/top.php");
    exit();
}else {
    //postされて来なかったとき
    if (count($_POST) === 0) {

    }
//postされて来た場合
    else {
        //DB接続
        $pdo = DB_connect();

        $mail=$pdo -> prepare('SELECT * FROM member');
        $mail -> execute();
        foreach ($mail as $ail){
            //同じメールアドレスを検索する
            if($ail['mail'] == $_POST['mail']) {
                //かぶっていた場合googleでの登録か確認する
                if ($ail['google_check']) {
                    session_regenerate_id(TRUE); //セッションidを再発行
                    $_SESSION["user_id"] = $ail['user_id'];
                    $_SESSION["mail"] = $ail['mail']; //セッションにログイン情報を登録
                    $_SESSION["name"] = $ail['user_name'];
                    $_SESSION["address"] = $ail['address'];
                    $_SESSION['login'] = true;
                    $_SESSION['message'] = "ようこそ、{$ail['user_name']}さん";
                    $_SESSION['re'] = 'a';
                }else{

                }
            }else{
                $rnd= substr(bin2hex(random_bytes(8)), 8, );;
                $ins=$pdo->prepare('INSERT INTO member(mail, user_name, password, join_date, google_check) 
                          VALUES(?,?,?,?,?)');
                $ins->bindValue(1,$_POST['mail'], PDO::PARAM_STR);
                $ins->bindValue(2,$_POST['name'], PDO::PARAM_STR);
                $ins->bindValue(3, $rnd, PDO::PARAM_STR);
                $ins->bindValue(4, date("Y-m-d"), PDO::PARAM_STR);
                $ins->bindValue(5, true, PDO::PARAM_STR);
                $ins->execute();
                session_regenerate_id(TRUE); //セッションidを再発行
                $_SESSION["user_id"] = $ail['user_id'];
                $_SESSION["mail"] = $ail['mail']; //セッションにログイン情報を登録
                $_SESSION["name"] = $ail['user_name'];
                $_SESSION["address"] = $ail['address'];
                $_SESSION['login'] = true;
                $_SESSION['message'] = "ようこそ、{$ail['user_name']}さん";
                $_SESSION['re'] = 'a';
            }
        }
    }
    header("Location: ../syop/top.php"); //ログイン後のページにリダイレクト
    exit();


}


