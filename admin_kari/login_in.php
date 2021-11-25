<?php
//セッションを使うことを宣言
session_start();

//データベースに接続する
try {
    $pdo = new PDO('mysql:host=mysql154.phy.lolipop.lan;
                    dbname=LAA1290554-kyusyu;charser=utf8',
        'LAA1290554','1341398com');
}
catch (PDOException $e) {
    exit ('データベースエラー');
}

//ログイン状態の場合ログイン後のページにリダイレクト
if (isset($_SESSION["login"])) {
    session_regenerate_id(TRUE);
    header("Location: kanri_top.php");
    exit();
}

//postされて来なかったとき
if (count($_POST) === 0) {
    $message = "";
}

//postされて来た場合
else {
    //ユーザー名またはパスワードが送信されて来なかった場合
    if(empty($_POST["id"]) || empty($_POST["pass"])) {
        $message = "ユーザー名とパスワードを入力してください";
    }
    //ユーザー名とパスワードが送信されて来た場合
    else {
        //post送信されてきたユーザー名がデータベースにあるか検索
        try {
            $stmt = $pdo -> prepare('SELECT * FROM admin WHERE admin_id=?');
            $stmt -> bindParam(1, $_POST['id'], PDO::PARAM_STR, 10);
            $stmt -> execute();
            $result = $stmt -> fetch(PDO::FETCH_ASSOC);
        }
        catch (PDOException $e) {
            exit('データベースエラー');
        }

        //検索したユーザー名に対してパスワードが正しいかを検証
        //正しくないとき
        if ($result['password']!=$_POST['pass']) {
            $message="ユーザー名かパスワードが違います";
        }
        //正しいとき
        else {
            session_regenerate_id(TRUE); //セッションidを再発行
            $_SESSION["login"] = $_POST['id']; //セッションにログイン情報を登録
            header("Location: kanri_top.php"); //ログイン後のページにリダイレクト
            exit();
        }
    }
}

$message = htmlspecialchars($message);