<!DOCTYPE html>
<html lang="ja">
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <meta charset="UTF-8">
    <title>熊本県</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!--<a href="" class="original">←　戻る</a>--><button type="button" class="original" onclick=history.back()>←戻る</button>
<div class="picture">
    <a href="../syop/top.php"><img src="img/rogo.png" width="150" height="50"></a>
</div>
<br><br><br>
<script language="JavaScript">
    function setBG(n)
    {
        var img_src = "../syop/img/kumamoto/amakusagobasi.jpg"
        var img_name = "天草五橋";
        var img_explanation ="（あまくさごきょう）は、熊本県宇土半島先端の三角（みすみ）から、天草諸島の大矢野島、永浦島、池島、前島を経て天草上島までを5つの橋で結ぶ宇城市から上天草市にかけての連絡道路である。1966年（昭和41年）9月24日に開通した";
        document.getElementById("image_change").src = img_src;
        document.getElementById("kyusyuu-change").innerText = img_name;
        document.getElementById("explanation").innerText = img_explanation;
    }
    function setCG(n)
    {
        var img_src = "../syop/img/kumamoto/daikann.jpg"
        var img_name = "大観峰";
        var img_explanation ="（だいかんぼう）は、熊本県阿蘇市にある山である。標高は935.9m。" +
            "阿蘇北外輪山の最高峰であり、阿蘇カルデラやそのカルデラ壁、そして中央火口丘である阿蘇五岳をはじめ、九重連山も一望することができる。至近には国道212号がカルデラ内外を繋いでおり、「ミルクロード」（熊本県道45号）沿いの当山へのアクセスは容易で、駐車場も整備されている。阿蘇エリアで一、二を争う人気の展望スポットとして知られており、多くの観光客を集める。" +
            "「大観峰」の名は、1922年(大正11年)5月に、熊本県出身の明治の文豪・ジャーナリスト、徳富蘇峰によって命名されたもの、古くは「遠見ヶ鼻」と呼称されていた。" +
            "地形的利点から熊本県内のテレビ放送局が阿蘇北中継局を設置しているほか、警察庁の無線中継所も設置されている。";
        document.getElementById("image_change").src = img_src;
        document.getElementById("kyusyuu-change").innerText = img_name;
        document.getElementById("explanation").innerText = img_explanation;
    }
    function setDG(n)
    {
        var img_src = "../syop/img/kumamoto/simodaonnsenn.jpg"
        var img_name = "下田温泉";
        var img_explanation ="（しもだおんせん）は、熊本県天草市（旧国肥後国）にある温泉。開湯は740年前とされる。開湯伝説によれば、白鷺が傷を癒しているところを発見したとされる。白鷺に因む開湯伝説を持つ温泉地は、他にも下呂温泉、湯田川温泉、湯来温泉などがある。" +
            "昭和38年4月23日 - 厚生省告示第203号により天草下田温泉として国民保養温泉地に登録。";
        document.getElementById("image_change").src = img_src;
        document.getElementById("kyusyuu-change").innerText = img_name;
        document.getElementById("explanation").innerText = img_explanation;
    }
</script>
<ul class="spot-list">
    <li>
        <div class="change1">
        </div>
        <img src="../syop/img/kumamoto/amakusagobasi.jpg" class="change" onclick="setBG()" width="150" height="217" alt="">
        <img src="../syop/img/kumamoto/daikann.jpg" class="change2" onclick="setCG(2)" width="150" height="217" alt="">
        <img src="../syop/img/kumamoto/simodaonnsenn.jpg" class="change3" onclick="setDG(3)" width="150" height="217" alt="">
    </li>
</ul>
<div class="picture1">
    <img id="image_change" src="../syop/img/kumamoto/amakusagobasi.jpg" width="1500" height="1200">
</div>
<script type="text/javascript">
    img = new Array("../syop/img/kumamoto/amakusagobasi.jpg","../syop/img/kumamoto/daikann.jpg","../syop/img/kumamoto/simodaonnsenn.jpg"); //*(1)
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
<h1 class="kannkouti2">熊本県</h1>
<div class="kyusyuu-name">
<p id="kyusyuu-change">天草五橋</p>
</div>
<p id="explanation" class="tired">
    （あまくさごきょう）は、熊本県宇土半島先端の三角（みすみ）から、天草諸島の大矢野島、永浦島、池島、前島を経て天草上島までを5つの橋で結ぶ宇城市から上天草市にかけての連絡道路である。1966年（昭和41年）9月24日に開通した。
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
    <a href="" class="omiyage">＞お土産</a>
</h1>
</body>
</html>

