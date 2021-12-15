<?php
session_start();
if(isset($_SESSION['cart_mes'])){
    echo <<<EOM
        <script type="text/javascript">
        window.onload = function (){
            alert("{$_SESSION['cart_mes']}");
        }
        </script>
    EOM;
    $_SESSION['cart_mes'] = null;
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Card</title>
    <link rel="icon"  type="image/x-icon" sizes="144*144" href="img/favicon.ico">
    <link rel="stylesheet" href="css/Cardstyle.css">
    <link rel="stylesheet" href="../syop/css/backbutton.css">
</head>
<body>
<div class="header">
    <button type="button"  class="original" onclick=history.back()>←戻る</button>

    <div class="img">
        <img src="../syop/img/logo1.png" alt="" title="九州旅行記" width="120" height="60" >
    </div>
    <div class="search">
        <form action="" method="post">
            <input type="search" style="width:300px;height: 50px;" id="search_1" placeholder="キーワードを入力">
            <input type="submit" name="submit" id="search_2" value="検索">
        </form>
    </div>
    <div class="img2">
        <a href="" ><img src="img/login.png" alt="" title="ログインアイコン" width="80" height="35" ></a>
    </div>
    <div class="img3">
        <a href="" ><img src="img/cart.png" alt="" title="カートアイコン" width="50" height="35" ></a>
    </div>
</div>
<div class="transition">
    <a href="../syop/top.php"><p class="top">トップページ</p></a>
    <a href="../kannkouti/hukuoka.php"><p class="spot">観光スポット</p></a>
    <a href="syohin.php"><p class="miyage">お土産一覧</p></a>
</div>
<form action="Addresschoose.php" method="post">
    <div class="info warp">
        <p><strong>ショッピングカード</strong></p>
        <hr>
        <ul>
            <li class="info_2"> <img src="img/img1.jpg" width="80px"/> </li>
            <li class="info_3"><a>商品名：ゴマサバ</a></li>
            <li class="info_4"><a>￥：599</a> </li>
            <li class="info_6">
                <a href="javascript:" class="btn btn_plus" role="button" title="增加"></a>
                <input class="inputNum" value="1" size="1">
                <a href="javascript:" class="btn btn_minus" role="button" title="减少"></a>
            </li>
            <hr>
            <p class="W1">合計(1個の商品)￥599</p>
    </div>
    <div class="into">
        <p class="W2">合計(1個の商品)
            <br>
            <br>:￥599</p>

        <button class="butt">購入に進む</button>
    </div>
</form>
</body>
</html>