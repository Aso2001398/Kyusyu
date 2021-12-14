<!DOCTYPE html>
<html lang="ja">
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <meta charset="UTF-8">
    <title>佐賀県</title>
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
        var img_src = "img/saga/kyuunennann.png"
        var img_name = "九年庵";
        var img_explanation ="（くねんあん）は佐賀県神埼市神埼町的仁比山にある数寄屋造りの邸宅および日本庭園である。" +
            "仁比山護国寺三十六坊の塔頭・不動院と子院・仁比山地蔵院跡に実業家伊丹弥太郎が1892年（明治25年）に建てた別邸。久留米の作庭家である誓行寺の阿（ほとり）和尚が9年かけて築庭したことからこの名で呼ばれている。;
        document.getElementById("image_change").src = img_src;
        document.getElementById("kyusyuu-change").innerText = img_name;
        document.getElementById("explanation").innerText = img_explanation;
    }
    function setCG(n)
    {
        var img_src = "img/saga/nanatugama.jpg"
        var img_name = "七ツ釜";
        var img_explanation ="（ななつがま）とは、佐賀県唐津市の海岸に複数並んで存在する、海食洞である。" +
            "七ツ釜は、佐賀県唐津市屋形石に位置し、上場台地が玄界灘に落ち込む場所である。玄武岩の柱状節理が発達していることで知られる。" +
            "「屋形石の七ツ釜」（やかたいしのななつがま）として、1925年に国の天然記念物に指定された。";
        document.getElementById("image_change").src = img_src;
        document.getElementById("kyusyuu-change").innerText = img_name;
        document.getElementById("explanation").innerText = img_explanation;
    }
    function setDG(n)
    {
        var img_src = "img/saga/takeo.jpg"
        var img_name = "武雄の大楠";
        var img_explanation ="全国巨木第7位にランクし、樹齢3000年以上で、市の天然記念物に指定されています。樹高30ｍ、幹回り20ｍ、枝張りは東西30ｍ・南北33ｍ。武雄市内最古の神社、武雄神社の神木となっています。" +
            "象の足を思わせる根元がごつごつした樹皮に覆われ、その中央が地表近くで口を開けています。広さおよそ12畳の内部には、天神が祀られています。";
        document.getElementById("image_change").src = img_src;
        document.getElementById("kyusyuu-change").innerText = img_name;
        document.getElementById("explanation").innerText = img_explanation;
    }
</script>
<ul class="spot-list">
    <li>
        <div class="change1">
        </div>
        <img src="img/saga/kyuunennann.png" class="change" onclick="setBG()" width="150" height="217" alt="">
        <img src="img/saga/nanatugama.jpg" class="change2" onclick="setCG(2)" width="150" height="217" alt="">
        <img src="img/saga/takeo.jpg" class="change3" onclick="setDG(3)" width="150" height="217" alt="">
    </li>
</ul>
<div class="picture1">
    <img id="image_change" src="img/saga/kyuunennann.png" width="1700" height="900">
</div>
<script type="text/javascript">
    img = new Array("img/saga/kyuunennann.png","img/saga/nanatugama.jpg","img/saga/takeo.jpg"); //*(1)
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
<h1 class="kannkouti2">佐賀県</h1>
<div class="kyusyuu-name">
<p id="kyusyuu-change">九年庵</p>
</div>
<p id="explanation" class="tired">
    （くねんあん）は佐賀県神埼市神埼町的仁比山にある数寄屋造りの邸宅および日本庭園である
</p>
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
    <a href="syouhinn2.php" class="omiyage">＞お土産</a>
</h1>
</body>
</html>

