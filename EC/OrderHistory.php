<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>OrderHistory</title>
    <link rel="icon"  type="image/x-icon" sizes="144*144" href="../card/favicon.ico">
    <link rel="stylesheet" href="css/orderstyle.css">
    <link rel="stylesheet" href="../syop/css/backbutton.css">
</head>
<body>
<div class="header">
    <button type="button"  class="original" onclick=history.back()>←戻る</button>

    <div class="img">
        <img src="../syop/img/logo1.png" alt="" title="九州旅行記" width="130" height="50" >
    </div>
    <div class="search">
        <form action="" method="post">
            <input type="search" style="width:300px;height: 50px;" id="search_1" placeholder="キーワードを入力">
            <input type="submit" name="submit" id="search_2" value="検索">
        </form>
    </div>
    <div class="img2">
        <a href="../login/kaiin-login.php" ><img src="img/login.png" alt="" title="ログインアイコン" width="80" height="35" ></a>
    </div>
    <div class="img3">
        <a href="../EC/Card.php" ><img src="img/cart.png" alt="" title="カートアイコン" width="50" height="35" ></a>
    </div>
</div>
<div class="transition">
        <a href="../syop/top.php"><p class="top">トップページ</p></a>
        <a href="../kannkouti/hukuoka.php"><p class="spot">観光スポット</p></a>
        <a href="../syop/syohin.php"><p class="miyage">お土産一覧</p></a>
</div>

<div class="info warp">
    <h1 class="W1"><strong>注文履歴</strong></h1>
    <hr>
        <p class="info_2"> <img src="img/img1.jpg" width="120px"/> </p>
        <p class="info_3"><a>商品名：ゴマサバ</a></p>
        <p class="info_4"><a>￥：599</a> </p>
        <p class="info_5"><a>数量：1個</a> </p>
</div>
</body>
</html>