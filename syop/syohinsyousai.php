<?php
//セッション宣言
session_start();
//セッションの中身確認（削除）
//print_r($_SESSION);

//ローカルライブラリに接続
require_once '../method.php';
$pdo = DB_Connect();
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>商品詳細ページ</title>
    <link rel="stylesheet" href="css/ecSite.css">
    <link rel="stylesheet" href="css/syohin_syosai.css">
    <link rel="stylesheet" href="../syop/css/backbutton.css">
</head>

<body>
<div class="header">

        <button type="button"  class="original" onclick=history.back()>←戻る</button>

    <!--<a href="" class="btn btn-border">戻る</a>-->

    <div class="img">
        <img src="img/logo1.png" alt="" title="九州旅行記" width="150" height="50" >
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
        <a href="" ><img src="img/cart.png" alt="" title="カートアイコン" width="50" height="35" ></a>
    </div>
</div>
<div class="transition">
    <a href="../syop/top.php"><p class="top">トップページ</p></a>
    <a href="../kannkouti/hukuoka.php"><p class="spot">観光スポット</p></a>
    <a href="syohin.php"><p class="miyage">お土産一覧</p></a>
</div>
<main>
    <div class="localNavigation">
        <p>商品カテゴリ↓</p>
        <div class="kategori">
            <ul>
                <!--<li><a class="active" href="#home">Home</a></li>-->
                <li><a href="">福岡県</a></li>
                <li><a href="">佐賀県</a></li>
                <li><a href="">長崎県</a></li>
                <li><a href="">熊本県</a></li>
                <li><a href="">大分県</a></li>
                <li><a href="">宮崎県</a></li>
                <li><a href="">鹿児島県</a></li>
                <li><a href="">沖縄県</a></li>

            </ul>
            <p>観光地↓</p>
            <ul>
                <!--<li><a class="active" href="#home">Home</a></li>-->
                <li><a href="../kannkouti/hukuoka.php">福岡県</a></li>
                <li><a href="../kannkouti/saga.php">佐賀県</a></li>
                <li><a href="../kannkouti/nagasaki.php">長崎県</a></li>
                <li><a href="../kannkouti/kumamoto.php">熊本県</a></li>
                <li><a href="../kannkouti/ooita.php">大分県</a></li>
                <li><a href="../kannkouti/miyazaki.php">宮崎県</a></li>
                <li><a href="../kannkouti/kagosima.php">鹿児島県</a></li>
                <li><a href="../kannkouti/okinawa.php">沖縄県</a></li>

            </ul>
        </div>
    </div>
    <div class="shohin_shousai">
        <?php
        $item=$pdo -> prepare('SELECT * FROM item order where item_name = :name');
        $item->bindValue(':name', $_POST['item_name'],PDO::PARAM_STR);
        $item->execute();
        $result = $item->fetch(PDO::FETCH_ASSOC);
        print_r($result);
        echo <<<EOM
         <img src="../admin_kari/img/item/{$result['image_name']}" class="item_img"alt="" title="" width="700" height="400" >
        <div class="item_date_box">
            <p class="item_name">{print_r($result)}</p>
            <p class="price">&yen;1,980</p>
            <p class="zai">在庫[
                10
                ]</p>
            <p class="item_date" >おいしいおいしいおいしい</p>
            <div class="select">
                <a href="../EC/Card.php"> カートに入れる</a>
                <br>

            </div>
        </div>
        EOM;
        ?>

        <br><br>
        <p class="box"> </p>
        <p class="kaan">関連商品</p>
        <div class="item">
            <div class="float_box">
                <ul>
                    <li> <!-- [▼] アイテム -->
                        <a href="../syop/syohinsyousai.php">
                            <img src="item_img/Fukuoka_Tsurunoko.img" class="image">
                            <p class="name">TURUNOKO</p>
                            <p class="item_date" >おいしいおいしいおいしい</p>
                            <p class="price">&yen;1,980</p>
                        </a>
                    </li> <!-- [▲] アイテム -->
                    <li> <!-- [▼] アイテム -->
                        <a href="../syop/syohinsyousai.php">
                            <img src="item_img/Fukuoka_Tsurunoko.img" class="image">
                            <p class="name">TURUNOKO</p>
                            <p class="item_date" >おいしいおいしいおいしい</p>
                            <p class="price">&yen;1,980</p>
                        </a>
                    </li> <!-- [▲] アイテム -->
                    <li> <!-- [▼] アイテム -->
                        <a href="../syop/syohinsyousai.php">
                            <img src="item_img/Fukuoka_Tsurunoko.img" class="image">
                            <p class="name">TURUNOKO</p>
                            <p class="item_date" >おいしいおいしいおいしい</p>
                            <p class="price">&yen;1,980</p>
                        </a>
                    </li> <!-- [▲] アイテム -->
                    <li> <!-- [▼] アイテム -->
                        <!--<a href="#">
                          <img src="item_img/Fukuoka_Tsurunoko.img" class="image">
                          <p class="name">TURUNOKO</p>
                          <p class="item_date" >おいしいおいしいおいしい</p>
                          <p class="price">&yen;1,980</p>
                        </a>-->
                    </li> <!-- [▲] アイテム -->
                    <li> <!-- [▼] アイテム -->
                        <a href="../syop/syohinsyousai.php">
                            <img src="item_img/Fukuoka_Tsurunoko.img" class="image">
                            <p class="name">TURUNOKO</p>
                            <p class="item_date" >おいしいおいしいおいしい</p>
                            <p class="price">&yen;1,980</p>
                        </a>
                    </li> <!-- [▲] アイテム -->
                    <li> <!-- [▼] アイテム -->
                        <a href="../syop/syohinsyousai.php">
                            <img src="item_img/Fukuoka_Tsurunoko.img" class="image">
                            <p class="name">TURUNOKO</p>
                            <p class="item_date" >おいしいおいしいおいしい</p>
                            <p class="price">&yen;1,980</p>
                        </a>
                    </li> <!-- [▲] アイテム -->
                    <li> <!-- [▼] アイテム -->
                        <a href="../syop/syohinsyousai.php">
                            <img src="item_img/Fukuoka_Tsurunoko.img" class="image">
                            <p class="name">TURUNOKO</p>
                            <p class="item_date" >おいしいおいしいおいしい</p>
                            <p class="price">&yen;1,980</p>
                        </a>
                    </li> <!-- [▲] アイテム -->
                </ul>


            </div>
        </div>







    <script src="script/script2.js"></script>
</body>
</html>