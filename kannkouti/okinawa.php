<!DOCTYPE html>
<html lang="ja">
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <meta charset="UTF-8">
    <title>沖縄県 </title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!--<a href="" class="original">←　戻る</a>--><button type="button" class="original" onclick=history.back()>←戻る</button>
<div class="picture">
    <img src="img/rogo.png" width="150" height="50">
</div>
<br><br><br>
<script language="JavaScript">
    function setBG(n)
    {
        var img_src = "../syop/img/okinawa/mannzamou2.jpg"
        var img_name = "万座毛";
        var img_explanation ="（まんざもう）は、沖縄県国頭郡恩納村にある名勝地。恩納村のほぼ中央、東シナ海に面した標高約20メートルの琉球石灰岩からなる絶壁で、象の鼻に似た奇岩がある。崖上は芝生台地となっている。沖縄海岸国定公園である";
        document.getElementById("image_change").src = img_src;
        document.getElementById("kyusyuu-change").innerText = img_name;
        document.getElementById("explanation").innerText = img_explanation;
    }
    function setCG(n)
    {
        var img_src = "../syop/img/okinawa/sikinaenn.jpeg"
        var img_name = "識名園";
        var img_explanation ="（しきなえん）は沖縄県那覇市真地にある琉球庭園の一つ。" +
            "識名の御殿（しちなぬうどぅん）とも、また首里城の南にあることから南苑（なんえん）とも呼ばれた。造園は琉球の第二尚氏王朝、尚穆（在位・1752年 - 1795年）の時代に始まったと言われるが定かではない。完成は尚温の時代の1799年。" +
            "中国の様式と沖縄独自の様式の折衷様式で建築されている。完成当時は中国皇帝からの使者（冊封使）をもてなす、現在でいう迎賓館として使われた。「勧耕台」と称する展望台があるが、海を望むことはできない。これは琉球をより大きな国に見せるためともいわれている。" +
            "第二次世界大戦で園内のほとんどの建造物が破壊されたため、現在見られるものは復元（工期：1975～1995年）である。" +
            "1941年、国の名勝に指定され、戦禍で壊滅後、1976年に再指定。2000年には国の特別名勝に指定され、同年12月にユネスコの世界遺産に登録。" +
            "1999年以来、毎年11月3日（文化の日）には園内で識名園歌会（花ゆうな短歌会主催・那覇市教育委員会共催）が開かれ、短歌を楽しむ人達でにぎわう。また11月第4日曜日には、識名園友遊会（識名園友遊会実行委員会主催：真和志自治会長連絡協議会、那覇市教育委員会共催）が開催され、地域の伝統芸能発表が行なわれている。" +
            "なお、敷地内に「育徳泉（いくとくせん）」という泉が湧く。そこに生える淡水産の紅藻類「シマチスジノリ」は国の天然記念物である";
        document.getElementById("image_change").src = img_src;
        document.getElementById("kyusyuu-change").innerText = img_name;
        document.getElementById("explanation").innerText = img_explanation;
    }
    function setDG(n)
    {
        var img_src = "../syop/img/okinawa/ueguu.jpg"
        var img_name = "波上宮";
        var img_explanation ="（なみのうえぐう）は、沖縄県那覇市にある神社。近代社格制度では官幣小社に列格され、現在では神社本庁の別表神社に指定されている。" +
            "那覇港を望む高台の上に位置し、「なんみんさん」「ナンミン」として親しまれてきた。琉球八社の一つで、全国一の宮会より琉球国新一の宮に認定されている。";
        document.getElementById("image_change").src = img_src;
        document.getElementById("kyusyuu-change").innerText = img_name;
        document.getElementById("explanation").innerText = img_explanation;
    }
</script>
<ul class="spot-list">
    <li>
        <div class="change1">
        </div>
        <img src="../syop/img/okinawa/mannzamou2.jpg" class="change" onclick="setBG()" width="150" height="217" alt="">
        <img src="../syop/img/okinawa/sikinaenn.jpeg" class="change2" onclick="setCG(2)" width="150" height="217" alt="">
        <img src="../syop/img/okinawa/ueguu.jpg" class="change3" onclick="setDG(3)" width="150" height="217" alt="">
    </li>
</ul>
<div class="picture1">
    <img id="image_change" src="../syop/img/okinawa/mannzamou2.jpg" width="1500" height="1200">
</div>
<script type="text/javascript">
    img = new Array("../syop/img/okinawa/mannzamou2.jpg","../syop/img/okinawa/sikinaenn.jpeg","../syop/img/okinawa/ueguu.jpg"); //*(1)
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
<h1 class="kannkouti2">沖縄県</h1>
<div class="kyusyuu-name">
<p id="kyusyuu-change" >万座毛</p>
</div>
<p id="explanation" class="tired">
    （まんざもう）は、沖縄県国頭郡恩納村にある名勝地。恩納村のほぼ中央、東シナ海に面した標高約20メートルの琉球石灰岩からなる絶壁で、象の鼻に似た奇岩がある。崖上は芝生台地となっている。沖縄海岸国定公園である
</p>
<ul class="spot-list" >
    <li>
        <a href="../kannkouti/hukuoka.php" class="kannkouti">
            <div class="spot-text">
                <h1 class="button">
                    福岡県
                </h1>

                <img src="../syop/img/fukuoka/mozikouretoro.jpg" class="kannkou" width="200" height="200" alt="福岡県">
            </div>
        </a>
        <a href="../kannkouti/saga.php" class="kannkouti">
            <div class="spot-text">
                <h1 class="button">
                    佐賀県
                </h1>

                <img src="../syop/img/saga/kyuunennann.png" class="kannkou" width="200" height="200" alt="佐賀県">
            </div>
        </a>
        <a href="../kannkouti/nagasaki.php" class="kannkouti">
            <div class="spot-text">
                <h1 class="button">
                    長崎県
                </h1>

                <img src="../syop/img/nagasaki/iwadozinnja.jpeg" class="kannkou" width="200" height="200" alt="長崎県">
            </div>
        </a>
        <a href="../kannkouti/kumamoto.php" class="kannkouti">
            <div class="spot-text">
                <h1 class="button">
                    熊本県
                </h1>

                <img src="../syop/img/kumamoto/amakusagobasi.jpg" class="kannkou" width="200" height="200" alt="熊本県">
            </div>
        </a>
        <br>
        <a href="../kannkouti/ooita.php" class="kannkouti">
            <div class="spot-text">
                <h1 class="button">
                    大分県
                </h1>

                <img src="../syop/img/ooita/yamanami2.jpg" class="kannkou" width="200" height="200" alt="大分県">
            </div>
        </a>
        <a href="../kannkouti/miyazaki.php" class="kannkouti">
            <div class="spot-text">
                <h1 class="button">
                    宮崎県
                </h1>
                <img src="../syop/img/miyazaki/aosimazinnja2.jpg" class="kannkou" width="200" height="200" alt="宮崎県">
            </div>
        </a>
        <a href="../kannkouti/kagosima.php" class="kannkouti">
            <div class="spot-text">
                <h1 class="button">
                    鹿児島県
                </h1>

                <img src="../syop/img/kagosima/amamioosima3.jpeg" class="kannkou" width="200" height="200" alt="鹿児島県">
            </div>
        </a>
        <a href="../kannkouti/okinawa.php" class="kannkouti">
            <div class="spot-text">
                <h1 class="button">
                    沖縄県
                </h1>
                <img src="../syop/img/okinawa/mannzamou2.jpg" class="kannkou" width="200" height="200" alt="沖縄県">
            </div>
        </a>
    </li>
</ul>
<h1>
    <a href="syouhinn_okinawa.php" class="omiyage">＞お土産</a>
</h1>
</body>
</html>

