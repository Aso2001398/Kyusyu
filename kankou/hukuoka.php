<!DOCTYPE html>
<html lang="ja">
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <meta charset="UTF-8">
    <title>福岡県</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<a href="" class="original">←　戻る</a>
<div class="picture">
    <img src="img/rogo.png">
</div>
<script language="JavaScript">
function setBG(n)
{
    var img_src = "img/fukuoka/mozikouretoro.jpg"
    document.getElementById("image_change").src = img_src;
}
function setCG(n)
{
    var img_src = "img/fukuoka/shiraitonotaki.jpg"
    document.getElementById("image_change").src = img_src;
}
function setDG(n)
{
    var img_src = "img/fukuoka/syounyuudou2%20(1).jpg"
    document.getElementById("image_change").src = img_src;
}
</script>
<ul class="spot-list">
    <li>
        <div class="change1">
        </div>
        <img src="img/fukuoka/mozikouretoro.jpg" name="gazou" class="change" onclick="setBG()" width="150" height="217" alt="">
        <img src="img/fukuoka/shiraitonotaki.jpg" name="gazou" class="change2" onclick="setCG(2)" width="150" height="217" alt="">
        <img src="img/fukuoka/syounyuudou2 (1).jpg" name="gazou" class="change3" onclick="setDG(3)" width="150" height="217" alt="">
    </li>
</ul>
<div class="picture1">
    <img id="image_change" src="img/fukuoka/mozikouretoro.jpg" width="1860" height="900">
</div>
<script type="text/javascript">
    img = new Array("img/fukuoka/mozikouretoro.jpg","img/fukuoka/shiraitonotaki.jpg","img/fukuoka/syounyuudou2%20(1).jpg"); //*(1)
    count = -1; //*(2)
    imgTimer();

    function imgTimer() {
//画像番号
        count++; //*(3)
//画像の枚数確認
        if (count == img.length) count = 0; //*(4)
//画像出力
        document.getElementById("image_change").src = img[count]; //*(5)
//次のタイマー呼びだし
        setTimeout("imgTimer()",10000); //*(6)
    }
</script>
<h1 class="kannkouti2">福岡県</h1>
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
                <hr width="100%" color="black" size="0">
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
