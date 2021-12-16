<?php
session_start();
//ローカルライブラリに接続
require_once '../method.php';

//DB接続
$pdo = DB_connect();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Addresschoose</title>
    <link rel="icon"  type="image/x-icon" sizes="144*144" href="../card/favicon.ico">
    <link rel="stylesheet" href="css/Addstyle.css">
    <link rel="stylesheet" href="../syop/css/backbutton.css">
    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>

</head>
<body>
<button type="button"  class="original" onclick=history.back()>←戻る</button>
<div class="N1">
    <p><strong><big>お届け先を選択</big></strong></p>
</div>

<form action="Pay.php" method="post">
<div class="A1">
    <ul>
        <?php
        $mail=$pdo -> prepare('SELECT * FROM member where user_id = ?');
        $mail->bindValue(1,$_SESSION['user_id'],PDO::PARAM_STR);
        $mail->execute();
        $user=$mail->fetch();
        echo <<<EOM
            <li class="info0_2"><a>名前：{$user['true_name']}</a></li>
            <li class="info0_3"><a>郵便番号：{$user['yubin']}</a></li>
            <li class="info0_4"><a>住所：{$user['address']}</a></li>
        EOM;
        ?>

    </ul>
</div>
<div class="A2">
    <button class="butt">この住所を選択</button>
</div>
</form>
<hr>
<h1>住所を変更</h1>
<form action="address_tuika.php" method="post">
    <div>
        <label for="i_name">お名前</label><br>
        <input id="i_name" type="text" name="name" value="" required>
        <br>
        <label for="i_yubinbango">郵便番号（ハイフン無し）</label><br>
    <input type="text" name="yubin" size="9" maxlength="8" onKeyUp="AjaxZip3.zip2addr('zip21','zip22','addr21','addr21');" required>
    <br>
    <label for="i_todo">住所</label><br>
    <input type="text" name="address" size="100" required>

        <button type="submit" name="newAddress">住所を追加</button>
    </div>
</form>
</body>
</html>
