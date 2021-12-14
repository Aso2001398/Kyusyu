<!DOCTYPE html>
<html lang="ja">
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <meta charset="UTF-8">
    <title>宮崎県</title>
    <link rel="stylesheet" href="css/style6.css">
</head>
<body>
<a href="" class="original">←　戻る</a>
<div class="picture">
    <img src="img/rogo.png">
</div>
<script language="JavaScript">
    function setBG(n)
    {
        var img_src = "img/miyazaki/aosimazinnja2.jpg"
        var img_name = "青島神社";
        var img_explanation ="（あおしまじんじゃ）は、宮崎県宮崎市青島にある、青島のほぼ中央に鎮座する神社で、周囲1.5kmの青島全島を境内地とする。旧社格は村社で、現在は神社本庁の別表神社。" +
            "青島は全島が熱帯・亜熱帯植物の群生地として、国の特別天然記念物に指定されている。";
        document.getElementById("image_change").src = img_src;
        document.getElementById("kyusyuu-change").innerText = img_name;
        document.getElementById("explanation").innerText = img_explanation;
    }
    function setCG(n)
    {
        var img_src = "img/miyazaki/kunimigaoka.jpg"
        var img_name = "国見ケ丘";
        var img_explanation = "（くにみがおか）は宮崎県高千穂町にある丘で、四方の眺めが良いのでこの名がある。ここはまた雲海の名所でもある。";
        document.getElementById("image_change").src = img_src;
        document.getElementById("kyusyuu-change").innerText = img_name;
        document.getElementById("explanation").innerText = img_explanation;
    }
    function setDG(n)
    {
        var img_src = "img/miyazaki/takatiho.jpg"
        var img_name = "高千穂峡"
        var img_explanation = "（たかちほきょう）は、宮崎県西臼杵郡高千穂町三田井にある五ヶ瀬川にかかる峡谷である。国の名勝、天然記念物に指定されている（五箇瀬川峡谷（高千穂峡谷））。真名井の滝、玉垂の滝、あららぎの滝などが有名である";
        document.getElementById("image_change").src = img_src;
        document.getElementById("kyusyuu-change").innerText = img_name;
        document.getElementById("explanation").innerText = img_explanation;
    }
</script>
<ul class="spot-list">
    <li>
        <div class="change1">
        </div>
        <img src="img/miyazaki/aosimazinnja2.jpg" class="change" onclick="setBG()" width="150" height="217" alt="">
        <img src="img/miyazaki/kunimigaoka.jpg" class="change2" onclick="setCG(2)" width="150" height="217" alt="">
        <img src="img/miyazaki/takatiho.jpg" class="change3" onclick="setDG(3)" width="150" height="217" alt="">
    </li>
</ul>
<div class="picture1">
    <img id="image_change" src="img/miyazaki/aosimazinnja2.jpg" width="1700" height="900">
</div>
<script type="text/javascript">
    img = new Array("img/miyazaki/aosimazinnja2.jpg","img/miyazaki/kunimigaoka.jpg","img/miyazaki/takatiho.jpg"); //*(1)
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
<h1 class="kannkouti2">宮崎県</h1>
<div class="kyusyuu-name">
<p id="kyusyuu-change">青島神社</p>
</div>
<p id="explanation" class="tired">（あおしまじんじゃ）は、宮崎県宮崎市青島にある、青島のほぼ中央に鎮座する神社で、周囲1.5kmの青島全島を境内地とする。旧社格は村社で、現在は神社本庁の別表神社。
    青島は全島が熱帯・亜熱帯植物の群生地として、国の特別天然記念物に指定されている。</p>
<div class="spot-text1">
        <a href="hukuoka.php" class="kannkouti">
            <div class="spot-text">
                <h1 class="button">
                    福岡県
                </h1>
                <hr width="100%" color="black" size="0">
                <img src="img/fukuoka/mozikouretoro.jpg" class="kannkou" width="200" height="200" alt="福岡県">
            </div>
        </a>
</div>
<div class="spot-text2">
        <a href="saga.php" class="kannkouti">
            <div class="spot-text">
                <h1 class="button">
                    佐賀県
                </h1>
                <hr width="99%" color="black" size="0">
                <img src="img/saga/kyuunennann.png" class="kannkou" width="200" height="200" alt="佐賀県">
            </div>
        </a>
</div>
<div class="spot-text3">
        <a href="nagasaki.php" class="kannkouti">
            <div class="spot-text">
                <h1 class="button">
                    長崎県
                </h1>
                <hr width="100%" color="black" size="0">
                <img src="img/nagasaki/iwadozinnja.jpeg" class="kannkou" width="200" height="200" alt="長崎県">
            </div>
        </a>
</div>
<div class="spot-text4">
        <a href="kumamoto.php" class="kannkouti">
            <div class="spot-text">
                <h1 class="button">
                    熊本県
                </h1>
                <hr width="100%" color="black" size="0">
                <img src="img/kumamoto/amakusagobasi.jpg" class="kannkou" width="200" height="200" alt="熊本県">
            </div>
        </a>
</div>
<div class="spot-text5">
        <a href="ooita.php" class="kannkouti">
            <div class="spot-text">
                <h1 class="button">
                    大分県
                </h1>
                <hr width="100%" color="black" size="0">
                <img src="img/ooita/yamanami2.jpg" class="kannkou" width="200" height="200" alt="大分県">
            </div>
        </a>
</div>
<div class="spot-text6">
        <a href="miyazaki.php" class="kannkouti1">
            <div class="spot-text">
                <h1 class="button">
                    宮崎県
                </h1>
                <hr width="100%" color="black" size="0">
                <img src="img/miyazaki/aosimazinnja2.jpg" class="kannkou" width="200" height="200" alt="宮崎県">
            </div>
        </a>
</div>
<div class="spot-text7">
        <a href="kagosima.php" class="kannkouti1">
            <div class="spot-text">
                <h1 class="button">
                    鹿児島県
                </h1>
                <hr width="100%" color="black" size="0">
                <img src="img/kagosima/amamioosima3.jpeg" class="kannkou" width="200" height="200" alt="鹿児島県">
            </div>
        </a>
</div>
<div class="spot-text8">
        <a href="okinawa.php" class="kannkouti1">
            <div class="spot-text">
                <h1 class="button">
                    沖縄県
                </h1>
                <hr width="100%" color="black" size="0">
                <img src="img/okinawa/mannzamou2.jpg" class="kannkou" width="200" height="200" alt="沖縄県">
            </div>
        </a>
</div>
<h1>
    <a href="syouhinn6.php" class="omiyage">＞お土産</a>
</h1>
</body>
</html>

