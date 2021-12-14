<!DOCTYPE html>
<html lang="ja">
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <meta charset="UTF-8">
    <title>Title </title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<a href="" class="original">←　戻る</a>
<div class="picture">
<img src="img/rogo.png">
</div>
<ul class="spot-list">
<li>
    <div class="change1">
    </div>
    <img src="img/fukuoka/mozikouretoro.jpg" class="change" onclick="slideshow()" width="150" height="217" alt="">
    <img src="img/yosinokouenn.jpeg" class="change2" onclick="slideshow()" width="150" height="217" alt="">
    <img src="img/ueguu.jpg" class="change3" onclick="slideshow()" width="150" height="217" alt="">
    <script>
        const img_src = ["mozikouretoro.jpg", "yosinokouenn.jpeg", "ueguu.jpg"];
        let num = -1;

        function slide_time() {
        for ()
            }
            document.getElementById("slide_img").src = img_src[num];
        }
        setInterval(slide_time, 1300);
    </script>
</li>
</ul>
<div class="picture1">
<img src="img/yakusima2.jpg" width="1860" height="900">
</div>
<h1 class="kannkouti2">観光地</h1>
<input type="text" class="kannkouti3" style="width: 1600px; height: 60px;">
<ul class="spot-list" >
<li>
<a href="hukuoka.php" class="kannkouti">
    <div class="spot-text">
        <h1 class="button">
            福岡県
        </h1>
        <hr width="100%" color="black" size="0">
        <img src="img/fukuoka/mozikouretoro.jpg" class="kannkou" width="200" height="200" alt="福岡県">
    </div>
</a>
    <a href="saga.php" class="kannkouti">
        <div class="spot-text">
            <h1 class="button">
                佐賀県
            </h1>
            <hr width="99%" color="black" size="0">
            <img src="img/fukuoka/mozikouretoro.jpg" class="kannkou" width="200" height="200" alt="佐賀県">
        </div>
    </a>
    <a href="nagasaki.php" class="kannkouti">
        <div class="spot-text">
            <h1 class="button">
                長崎県
            </h1>
            <hr width="100%" color="black" size="0">
            <img src="img/fukuoka/mozikouretoro.jpg" class="kannkou" width="200" height="200" alt="長崎県">
        </div>
    </a>
    <a href="kumamoto.php" class="kannkouti">
        <div class="spot-text">
            <h1 class="button">
                熊本県
            </h1>
            <hr width="100%" color="black" size="0">
            <img src="img/fukuoka/mozikouretoro.jpg" class="kannkou" width="200" height="200" alt="熊本県">
        </div>
    </a>
    <a href="ooita.php" class="kannkouti">
        <div class="spot-text">
            <h1 class="button">
                大分県
            </h1>
            <hr width="100%" color="black" size="0">
            <img src="img/fukuoka/mozikouretoro.jpg" class="kannkou" width="200" height="200" alt="大分県">
        </div>
    </a>
    <a href="miyazaki.php" class="kannkouti1">
        <div class="spot-text">
            <h1 class="button">
                宮崎県
            </h1>
            <hr width="100%" color="black" size="0">
            <img src="img/fukuoka/mozikouretoro.jpg" class="kannkou" width="200" height="200" alt="宮崎県">
        </div>
    </a>
    <a href="kagosima.php" class="kannkouti1">
        <div class="spot-text">
            <h1 class="button">
                鹿児島県
            </h1>
            <hr width="100%" color="black" size="0">
            <img src="img/fukuoka/mozikouretoro.jpg" class="kannkou" width="200" height="200" alt="鹿児島県">
        </div>
    </a>
    <a href="okinawa.php" class="kannkouti1">
        <div class="spot-text">
            <h1 class="button">
                沖縄県
            </h1>
            <hr width="100%" color="black" size="0">
            <img src="img/fukuoka/mozikouretoro.jpg" class="kannkou" width="200" height="200" alt="沖縄県">
        </div>
    </a>
</li>
</ul>
<h1>
    <a href="" class="omiyage">＞お土産</a>
</h1>
</body>
</html>
