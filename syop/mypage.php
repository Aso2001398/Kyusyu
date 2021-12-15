<?php
session_start();
if(!isset($_SESSION['login'])){
    header("Location:../login/kaiin-login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>マイページ</title>
    <link rel="stylesheet" href="css/mypage.css">
    <link rel="stylesheet" href="../syop/css/backbutton.css">
<body>
<button type="button"  class="original" onclick=history.back()>←戻る</button>



<div class="account">
    <p id="account_1">アカウント情報</p>
    <p>名前 : <?php echo $_SESSION['name']?></p>
    <p>メールアドレス : <?php echo $_SESSION['mail']?></p>

    <a href="../EC/OrderHistory.php"><p class="rireki">注文履歴</p></a>
    <a href="../login/logout.php"><p class="rogout">ログアウト</p></a>
    <a href="../login/taikai.php"><p class="taikai">退会</p></a>
</div>
<div class="button_rireki">
</div>
</body>
</html>
