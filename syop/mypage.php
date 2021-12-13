<?php session_start();print_r($_SESSION)?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>マイページ</title>
    <link rel="stylesheet" href="css/item_delete.css">
<body>
<button type="button" onclick=history.back()>←戻る</button>

<div class="img">
    <img src="img/logo1.png" alt="" title="九州旅行記" width="300" height="200" >
</div>

<div class="account">
    <p id="account_1">アカウント情報</p>
    <p>名前 : <?php echo $_SESSION['name']?></p>
    <p>メールアドレス : <?php echo $_SESSION['mail']?></p>
    <a href="../login/logout.php">ログアウト</a>
    <a href="../login/taikai.php">退会</a>
</div>
<div class="button_rireki">
</div>
</body>
</html>
