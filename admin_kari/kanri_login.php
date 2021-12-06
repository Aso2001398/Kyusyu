<?php
//セッションを使うことを宣言
session_start();

//データベースに接続する
try {
    $pdo = new PDO('mysql:host=mysql154.phy.lolipop.lan;
                    dbname=LAA1290554-kyusyu;charser=utf8',
        'LAA1290554','1234');
}
catch (PDOException $e) {
    exit ('データベースエラー');
}

//ログイン状態の場合ログイン後のページにリダイレクト
/*if (isset($_SESSION["login"])) {
    session_regenerate_id(TRUE);
    header("Location: kanri_top.php");
    exit();
}*/

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
        try {
            if ($result['password']!=$_POST['pass']) {
                throw new Exception();
            }
            //正しいとき
            else {
                session_regenerate_id(TRUE); //セッションidを再発行
                $_SESSION["login"] = $_POST['id']; //セッションにログイン情報を登録
                header("Location: kanri_top.php"); //ログイン後のページにリダイレクト
                exit();
            }
        }catch (Exception $e){
            $message="ユーザー名かパスワードが違います";
        }

    }
}

$message = htmlspecialchars($message);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>管理者ログイン</title>
    <link rel="stylesheet" href="./css/kanri_rogin.css">
<body>
<!---->
<div class="img">
<img src="img/logo1.png" alt="" title="九州旅行記" width="300" height="200" >
</div>
<div class="login">
    <form action="kanri_login.php" method="post">
    <h2>管理者ログイン</h2>
    <p>
        <input type="text" name="id"  class="email1" placeholder="id">
    </p>
    <p>
        <input type="password" name="pass" class="email1" placeholder="パスワード">
    </p>
    <br><br>
    <p>
        <button class="btn">ログイン</button>
    </p>
    </form>
    <?php echo $message;?>
</div>





</body>
</html>