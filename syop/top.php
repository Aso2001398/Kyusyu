<?php
//セッション宣言
//セッションの中身確認（削除）
session_start();
print_r($_SESSION);
if(isset($_SESSION['re'])){
    echo <<<EOM
        <script type="text/javascript">
        location.reload();
        </script>
    EOM;
    $_SESSION['re'] = null;
}
//ローカルライブラリに接続
require_once '../method.php';
if(isset($_SESSION['message'])){
    echo <<<EOM
        <script type="text/javascript">
        window.onload = function (){
            alert("{$_SESSION['message']}");
        }
        </script>
    EOM;
    $_SESSION['message'] = null;
}
?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>九州旅行記トップページ</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <link rel="stylesheet" href="css/top.css">
    <link rel="stylesheet" href="css/shohin.css">


</head>
<body>
    <div class="header">
        <div class="img">
            <img src="img/logo1.png" alt="" title="九州旅行記" width="150" height="50" >
        </div>

        <div class="img2">
            <a href="../login/kaiin-login.php" ><img src="img/login.png" alt="" title="ログインアイコン" width="80" height="35" ></a>
        </div>
    </div><!--ヘッダー終わり-->
    <p class="box"> </p>
    <div class="transition">
        <a href="../syop/top.php"><p class="top">トップページ</p></a>
        <a href="../kannkouti/hukuoka.php/"><p class="spot">観光スポット</p></a>
        <a href="../syop/syohin.html"><p class="miyage">お土産一覧</p></a>
    </div>
    <!--画像-->
    <div class="pics-slide">
    <img id="mypic" src="pics/1.jpg" width="80%" height="600">
    <script>
        var pics_src = new Array("pics/1.jpg","pics/2.jpg","pics/3.jpg","pics/4.jpg","pics/5.jpg","pics/6.jpg","pics/7.jpg","pics/8.jpg");
        var num = -1;

        slideshow_timer();

        function slideshow_timer(){
            if (num == 7){
                num = 0;
            }
            else {
                num ++;
            }
            document.getElementById("mypic").src=pics_src[num];
            setTimeout("slideshow_timer()",10000);
        }
    </script>
    </div>
<br>
    <br>

    <p class="box"> </p>
    <p class="spot-text1">Spot・九州旅行記  </p>
    <ul class="spot-list" >
        <li>
            <a href="../kannkouti/hukuoka.php" class="kannkouti">
                <div class="spot-text">
                    <h1 class="button">
                        福岡県
                    </h1>

                    <img src="img/fukuoka/mozikouretoro.jpg" class="kannkou" width="200" height="200" alt="福岡県">
                </div>
            </a>
            <a href="../kannkouti/saga.php" class="kannkouti">
                <div class="spot-text">
                    <h1 class="button">
                        佐賀県
                    </h1>

                    <img src="img/saga/kyuunennann.png" class="kannkou" width="200" height="200" alt="佐賀県">
                </div>
            </a>
            <a href="../kannkouti/nagasaki.php" class="kannkouti">
                <div class="spot-text">
                    <h1 class="button">
                        長崎県
                    </h1>

                    <img src="img/nagasaki/iwadozinnja.jpeg" class="kannkou" width="200" height="200" alt="長崎県">
                </div>
            </a>
            <a href="../kannkouti/kumamoto.php" class="kannkouti">
                <div class="spot-text">
                    <h1 class="button">
                        熊本県
                    </h1>

                    <img src="img/kumamoto/amakusagobasi.jpg" class="kannkou" width="200" height="200" alt="熊本県">
                </div>
            </a>
            <br>
            <a href="../kannkouti/ooita.php" class="kannkouti">
                <div class="spot-text">
                    <h1 class="button">
                        大分県
                    </h1>

                    <img src="img/ooita/yamanami2.jpg" class="kannkou" width="200" height="200" alt="大分県">
                </div>
            </a>
            <a href="../kannkouti/miyazaki.php" class="kannkouti">
                <div class="spot-text">
                    <h1 class="button">
                        宮崎県
                    </h1>
                    <img src="img/miyazaki/aosimazinnja2.jpg" class="kannkou" width="200" height="200" alt="宮崎県">
                </div>
            </a>
            <a href="../kannkouti/kagosima.php" class="kannkouti">
                <div class="spot-text">
                    <h1 class="button">
                        鹿児島県
                    </h1>

                    <img src="img/kagosima/amamioosima3.jpeg" class="kannkou" width="200" height="200" alt="鹿児島県">
                </div>
            </a>
            <a href="../kannkouti/okinawa.php" class="kannkouti">
                <div class="spot-text">
                    <h1 class="button">
                        沖縄県
                    </h1>
                    <img src="img/okinawa/mannzamou2.jpg" class="kannkou" width="200" height="200" alt="沖縄県">
                </div>
            </a>
        </li>
    </ul>
<br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <p class="box"> </p>
    <p class="spot-text1">新着商品</p>
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
    <div class="item">
        <div class="float_box">
            <ul>
                <li> <!-- [▼] アイテム -->
                    <a href="#">
                        <img src="item_img/Fukuoka_Tsurunoko.img" class="image">
                        <p class="name">TURUNOKO</p>
                        <p class="item_date" >おいしいおいしいおいしい</p>
                        <p class="price">&yen;1,980</p>
                    </a>
                </li> <!-- [▲] アイテム -->
                <li> <!-- [▼] アイテム -->
                    <a href="#">
                        <img src="item_img/Fukuoka_Tsurunoko.img" class="image">
                        <p class="name">TURUNOKO</p>
                        <p class="item_date" >おいしいおいしいおいしい</p>
                        <p class="price">&yen;1,980</p>
                    </a>
                </li> <!-- [▲] アイテム -->
                <li> <!-- [▼] アイテム -->
                    <a href="#">
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
                    <a href="#">
                        <img src="item_img/Fukuoka_Tsurunoko.img" class="image">
                        <p class="name">TURUNOKO</p>
                        <p class="item_date" >おいしいおいしいおいしい</p>
                        <p class="price">&yen;1,980</p>
                    </a>
                </li> <!-- [▲] アイテム -->
                <li> <!-- [▼] アイテム -->
                    <a href="#">
                        <img src="item_img/Fukuoka_Tsurunoko.img" class="image">
                        <p class="name">TURUNOKO</p>
                        <p class="item_date" >おいしいおいしいおいしい</p>
                        <p class="price">&yen;1,980</p>
                    </a>
                </li> <!-- [▲] アイテム -->
                <li> <!-- [▼] アイテム -->
                    <a href="#">
                        <img src="item_img/Fukuoka_Tsurunoko.img" class="image">
                        <p class="name">TURUNOKO</p>
                        <p class="item_date" >おいしいおいしいおいしい</p>
                        <p class="price">&yen;1,980</p>
                    </a>
                </li> <!-- [▲] アイテム -->
            </ul>


        </div>
    </div>
    </div>
<br>
<br>
<br>
    <p class="box"> </p>
    <a id="pageTop" href="#">
        <img src="img/upButton.png" alt="ページトップへ" width="150" height="70">
    </a>
    <script type="text/javascript">$(function(){
        // ボタンをクリックしたら、スクロールして上に戻る
        topBtn.click(function(){
            $('body,html').animate({
                scrollTop: 0},500);
            return false;
        });
    });</script>

</body>
</html>