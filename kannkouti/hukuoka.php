<!DOCTYPE html>
<html lang="ja">
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <meta charset="UTF-8">
    <title>福岡県 </title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!--<a href="" class="original">←　戻る</a>--><button type="button" class="original" onclick=history.back()>←戻る</button>
<div class="picture">
    <a href="../syop/top.php"> <img src="img/rogo.png" width="150" height="50"></a>
</div>
<br><br><br>
<script language="JavaScript">
function setBG(n)
{
    var img_src = "../syop/img/fukuoka/mozikouretoro.jpg"
    var img_name = "門司港レトロ";
    var img_explanation = "（もじこうレトロ）は、福岡県北九州市門司区にある観光スポット。JR門司港駅周辺地域に残る外国貿易で栄えた時代の建造物を中心に、ホテル・商業施設などを大正レトロ調に整備した観光スポットであり、国土交通省の都市景観100選、土木学会デザイン賞2001最優秀賞を受賞している。対岸に位置する山口県下関市の唐戸・巌流島などとの周遊ルートとして多くの観光客で賑わう。";
    document.getElementById("image_change").src = img_src;
    document.getElementById("kyusyuu-change").innerText = img_name;
    document.getElementById("explanation").innerText = img_explanation;
}
function setCG(n)
{
    var img_src = "../syop/img/fukuoka/shiraitonotaki.jpg"
    var img_name = "白糸の滝";
    var img_explanation = "白糸の滝は糸島半島の川付川（かつきがわ）の源流近くにあります。白糸の滝は年間を通して訪れることができますが、辺りが涼を取る場所になる暑い夏の時期に特に人気があります。";
    document.getElementById("image_change").src = img_src;
    document.getElementById("kyusyuu-change").innerText = img_name;
    document.getElementById("explanation").innerText = img_explanation;
}
function setDG(n)
{
    var img_src = "../syop/img/fukuoka/syounyuudou2%20(1).jpg"
    var img_name = "千仏鍾乳洞";
    var img_explanation = "平尾台の東端に開口し、昭和１０年１２月天然記念物（国指定）に指定された由緒ある鍾乳洞です。洞内は四季を通じて気温１６度、水温１４度で夏は極めて涼しく、冬は暖かであり、老人子供も容易に探勝することが出来ます。" +
        "鍾乳石・石筍、石柱の発達著しく、長さは数千米に達するといわれていますが、照明設備は９００ｍまでです。入口より４８０ｍまでは靴ばきのまま入洞できます。それより奥は、奥の細道と命名されており、一枚石灰岩の上を滔々として流れる清水に足を洗いつつ進む、この神秘さは本洞を訪れる探勝者たちの心を奪うことでしょう。";
    document.getElementById("image_change").src = img_src;
    document.getElementById("kyusyuu-change").innerText = img_name;
    document.getElementById("explanation").innerText = img_explanation;
}
</script>
<ul class="spot-list">
    <li>
        <div class="change1">
        </div>
        <img src="../syop/img/fukuoka/mozikouretoro.jpg" name="gazou" class="change" onclick="setBG()" width="150" height="217" alt="">
        <img src="../syop/img/fukuoka/shiraitonotaki.jpg" name="gazou" class="change2" onclick="setCG(2)" width="150" height="217" alt="">
        <img src="../syop/img/fukuoka/syounyuudou2%20(1).jpg" name="gazou" class="change3" onclick="setDG(3)" width="150" height="217" alt="">
    </li>
</ul>
<div class="picture1">
    <img id="image_change" src="../syop/img/fukuoka/mozikouretoro.jpg"  width="1500" height="1200">
</div>
<script type="text/javascript">
    img = new Array("../syop/img/fukuoka/mozikouretoro.jpg","../syop/img/fukuoka/shiraitonotaki.jpg","../syop/img/fukuoka/syounyuudou2%20(1).jpg"); //*(1)
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
<div class="kyusyuu-name">
<p id="kyusyuu-change">門司港レトロ</p>
</div>
<p id="explanation" class="tired">（もじこうレトロ）は、福岡県北九州市門司区にある観光スポット。JR門司港駅周辺地域に残る外国貿易で栄えた時代の建造物を中心に、ホテル・商業施設などを大正レトロ調に整備した観光スポットであり、国土交通省の都市景観100選、
    土木学会デザイン賞2001最優秀賞を受賞している。対岸に位置する山口県下関市の唐戸・巌流島などとの周遊ルートとして多くの観光客で賑わう。</p>
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
    <a href="syouhinn_fukuoka.php" class="omiyage">＞お土産</a>
</h1>

</body>
</html>

