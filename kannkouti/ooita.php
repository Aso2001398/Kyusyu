<!DOCTYPE html>
<html lang="ja">
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <meta charset="UTF-8">
    <title>大分県</title>
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
        var img_src = "img/ooita/umitamago3.png"
        var img_name = "うみたまご";
        var img_explanation ="（おおいたマリーンパレスすいぞくかん）は、大分県大分市の高崎山下海岸にある水族館である。通称は、うみたまご。" +
            "1964年に大分生態水族館マリーンパレス（おおいたせいたいすいぞくかんマリーンパレス）として開館。2004年4月1日にリニューアル開業して、大分マリーンパレス水族館「うみたまご」となった";
        document.getElementById("image_change").src = img_src;
        document.getElementById("kyusyuu-change").innerText = img_name;
        document.getElementById("explanation").innerText = img_explanation;
    }
    function setCG(n)
    {
        var img_src = "img/ooita/yamanami2.jpg"
        var img_name = "やまなみハイウェイ";
        var img_explanation ="（きゅうしゅうおうだんのみち やまなみハイウェイ）は、大分県中部から西部に至る日本風景街道のひとつである。" +
            "名称に「やまなみハイウェイ」が含まれているが、大分県道・熊本県道11号別府一の宮線（やまなみハイウェイ）だけでなく、九重連山周辺の他の道路が含まれる。やまなみハイウェイの熊本県側は九州横断の道 阿蘇くまもと路として、同じく日本風景街道に登録されている。";
        document.getElementById("image_change").src = img_src;
        document.getElementById("kyusyuu-change").innerText = img_name;
        document.getElementById("explanation").innerText = img_explanation;
    }
    function setDG(n)
    {
        var img_src = "img/ooita/yuhuinn.jpg"
        var img_name = "湯布院";
        var img_explanation ="（ゆふいんちょう）は、大分県のほぼ中央に位置し、大分郡に属していた町である。町内に3ヶ所の温泉地がある町として町名は有名であった。" +
            "2005年10月1日に郡内の挾間町、庄内町と合併し、由布市（ゆふし）となり自治体としては消滅した。現在「湯布院町」という地名は、旧町域にある大字の頭に付く形で残っている。";
        document.getElementById("image_change").src = img_src;
        document.getElementById("kyusyuu-change").innerText = img_name;
        document.getElementById("explanation").innerText = img_explanation;
    }
</script>
<ul class="spot-list">
    <li>
        <div class="change1">
        </div>
        <img src="img/ooita/umitamago3.png" class="change" onclick="setBG()" width="150" height="217" alt="">
        <img src="img/ooita/yamanami2.jpg" class="change2" onclick="setCG(2)" width="150" height="217" alt="">
        <img src="img/ooita/yuhuinn.jpg" class="change3" onclick="setDG(3)" width="150" height="217" alt="">
    </li>
</ul>
<div class="picture1">
    <img id="image_change" src="img/ooita/umitamago3.png" width="1860" height="900">
</div>
<script type="text/javascript">
    img = new Array("img/ooita/umitamago3.png","img/ooita/yamanami2.jpg","img/ooita/yuhuinn.jpg"); //*(1)
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
<h1 class="kannkouti2">大分県</h1>
<div class="kyusyuu-name">
<p id="kyusyuu-change" >うみたまご</p>
</div>
<p id="explanation" class="tired">
    （おおいたマリーンパレスすいぞくかん）は、大分県大分市の高崎山下海岸にある水族館である。通称は、うみたまご。
    1964年に大分生態水族館マリーンパレス（おおいたせいたいすいぞくかんマリーンパレス）として開館。2004年4月1日にリニューアル開業して、大分マリーンパレス水族館「うみたまご」となった
</p>
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
                <img src="img/saga/kyuunennann.png" class="kannkou" width="200" height="200" alt="佐賀県">
            </div>
        </a>
        <a href="nagasaki.php" class="kannkouti">
            <div class="spot-text">
                <h1 class="button">
                    長崎県
                </h1>
                <hr width="100%" color="black" size="0">
                <img src="img/nagasaki/iwadozinnja.jpeg" class="kannkou" width="200" height="200" alt="長崎県">
            </div>
        </a>
        <a href="kumamoto.php" class="kannkouti">
            <div class="spot-text">
                <h1 class="button">
                    熊本県
                </h1>
                <hr width="100%" color="black" size="0">
                <img src="img/kumamoto/amakusagobasi.jpg" class="kannkou" width="200" height="200" alt="熊本県">
            </div>
        </a>
        <a href="ooita.php" class="kannkouti">
            <div class="spot-text">
                <h1 class="button">
                    大分県
                </h1>
                <hr width="100%" color="black" size="0">
                <img src="img/ooita/yamanami2.jpg" class="kannkou" width="200" height="200" alt="大分県">
            </div>
        </a>
        <a href="miyazaki.php" class="kannkouti1">
            <div class="spot-text">
                <h1 class="button">
                    宮崎県
                </h1>
                <hr width="100%" color="black" size="0">
                <img src="img/miyazaki/aosimazinnja2.jpg" class="kannkou" width="200" height="200" alt="宮崎県">
            </div>
        </a>
        <a href="kagosima.php" class="kannkouti1">
            <div class="spot-text">
                <h1 class="button">
                    鹿児島県
                </h1>
                <hr width="100%" color="black" size="0">
                <img src="img/kagosima/amamioosima3.jpeg" class="kannkou" width="200" height="200" alt="鹿児島県">
            </div>
        </a>
        <a href="okinawa.php" class="kannkouti1">
            <div class="spot-text">
                <h1 class="button">
                    沖縄県
                </h1>
                <hr width="100%" color="black" size="0">
                <img src="img/okinawa/mannzamou2.jpg" class="kannkou" width="200" height="200" alt="沖縄県">
            </div>
        </a>
    </li>
</ul>
<h1>
    <a href="" class="omiyage">＞お土産</a>
</h1>
</body>
</html>

