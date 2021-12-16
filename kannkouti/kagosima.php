<!DOCTYPE html>
<html lang="ja">
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <meta charset="UTF-8">
    <title>鹿児島県 </title>
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
        var img_src = "img/kagosima/amamioosima3.jpeg"
        var img_name = "奄美大島";
        var img_explanation ="（あまみおおしま）は、九州南方海上、鹿児島市と沖縄本島のほぼ中間に位置する、鹿児島県奄美群島の主要な島で、他の島と混同されない場合には単に大島（おおしま、奄美方言でうしま）ともいう。また、奄美群島内の他の島々との対比で大島本島と表現される場合もある。ウミガメが産卵に訪れる砂浜、'アマミブルーとも称される透明度の高い青い海や、太古の森のようなイメージの原生林が広がっており、大島海峡沿岸、ホノホシ海岸などの周辺海域や湯湾岳などの山地は奄美群島国立公園の一部となっている。" +
            "特に南部の自然は豊かで、希少な生物も多種見られる他、養殖クロマグロの出荷日本一の瀬戸内町では、本マグロや、リュウキュウイノシシの料理なども賞味できる。" +
            "2021年7月26日に動植物の多様性が認められ徳之島、沖縄島北部及び西表島と共に国内5件目の世界自然遺産として登録が決定された。 気候については島の中央部の名瀬に測候所がある奄美市を参照。";
        document.getElementById("image_change").src = img_src;
        document.getElementById("kyusyuu-change").innerText = img_name;
        document.getElementById("explanation").innerText = img_explanation;
    }
    function setCG(n)
    {
        var img_src = "img/kagosima/kirisimazinngu.jpeg"
        var img_name = "霧島神宮";
        var img_explanation ="（きりしまじんぐう）は鹿児島県霧島市霧島田口にある神社。延喜式内社の論社であり、旧社格は官幣大社。欽明天皇の御代（6世紀）、慶胤（けいいん）上人という僧侶が高千穂峰と火常峰（御鉢）の間の「瀬多尾（せたお）（背門丘・瀬戸尾）」に社殿を造られたのが始まりとされ、一説に欽明天皇元年（540年）の創建ともいわれている。" +
            "高千穂峰が日本神話の天孫降臨の伝承地とされる事から、現在は日向三代にまつわる神々が祀られているが、元々は高千穂峰そのものを信仰の対象とする山岳信仰から始まった神社であると考えられる。" +
            "元の社地の瀬多尾は、火口に近い場所であったため社殿は噴火でたびたび炎上し、延暦7年（788年）7月の火常峰（御鉢）の噴火で焼失した。" +
            "その後天慶3年（940年）、あるいは村上天皇の御代の天暦4年（950年）に性空上人により瀬多尾越（現在の高千穂河原・古宮址）に再興されるが、ここもたびたび噴火の巻き添えで炎上し、文暦元年（1234年）の火常峰（御鉢）の大噴火により社殿、僧坊等がことごとく焼失したため、霧島市田口の待世（霧島中学校の隣、霧島町グランドとの境）に「仮宮」を建てて、約250年間祭っていた。" +
            "文明16年（1484年）、島津忠昌の命により兼慶（けんけい）上人が再興したのが、現在の霧島神宮である。ただし、社殿はその後も幾度も炎上し、現在の社殿は正徳５年（1715年）、島津吉貴の奉納により再建した物である。" +
            "また一説には、文暦元年（1234年）の噴火で社殿を焼失した後、社殿を霧島山の東の長尾山（現在の東霧島神社の地）に移しその後、文明16年（1484年）、島津忠昌がこれを「東社」（霧島東御在所権現、現在の霧島東神社）と「西社」（西御在所霧島権現、現在の霧島神宮）の2社に分けたともいわれている。";
        document.getElementById("image_change").src = img_src;
        document.getElementById("kyusyuu-change").innerText = img_name;
        document.getElementById("explanation").innerText = img_explanation;
    }
    function setDG(n)
    {
        var img_src = "img/kagosima/yosinokouenn.jpeg"
        var img_name = "吉野公園";
        var img_explanation ="（かごしまけんりつよしのこうえん）は、鹿児島県鹿児島市吉野町にある都市公園（総合公園）である。樹木は約140種、7万本が植栽されている。噴水周辺約4万本のツツジが群植 - 4月初旬には鮮やかな色模様が楽しめる。";
        document.getElementById("image_change").src = img_src;
        document.getElementById("kyusyuu-change").innerText = img_name;
        document.getElementById("explanation").innerText = img_explanation;
    }
</script>
<ul class="spot-list">
    <li>
        <div class="change1">
        </div>
        <img src="../syop/img/kagosima/amamioosima3.jpeg" class="change" onclick="setBG()" width="150" height="217" alt="">
        <img src="../syop/img/kagosima/kirisimazinngu.jpeg" class="change2" onclick="setCG(2)" width="150" height="217" alt="">
        <img src="../syop/img/kagosima/yosinokouenn.jpeg" class="change3" onclick="setDG(3)" width="150" height="217" alt="">
    </li>
</ul>
<div class="picture1">
    <img id="image_change" src="../syop/img/kagosima/amamioosima3.jpeg" width="1500" height="1200">
</div>
<script type="text/javascript">
    img = new Array("../syop/img/kagosima/amamioosima3.jpeg","../syop/img/kagosima/kirisimazinngu.jpeg","../syop/img/kagosima/yosinokouenn.jpeg"); //*(1)
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
<h1 class="kannkouti2">鹿児島県</h1>
<div class="kyusyuu-name">
<p id="kyusyuu-change">奄美大島</p>
</div>
<p id="explanation" class="tired">
    （あまみおおしま）は、九州南方海上、鹿児島市と沖縄本島のほぼ中間に位置する、鹿児島県奄美群島の主要な島で、他の島と混同されない場合には単に大島（おおしま、奄美方言でうしま）ともいう。また、奄美群島内の他の島々との対比で大島本島と表現される場合もある。ウミガメが産卵に訪れる砂浜、'アマミブルーとも称される透明度の高い青い海や、太古の森のようなイメージの原生林が広がっており、大島海峡沿岸、ホノホシ海岸などの周辺海域や湯湾岳などの山地は奄美群島国立公園の一部となっている。特に南部の自然は豊かで、希少な生物も多種見られる他、養殖クロマグロの出荷日本一の瀬戸内町では、本マグロや、リュウキュウイノシシの料理なども賞味できる。2021年7月26日に動植物の多様性が認められ徳之島、沖縄島北部及び西表島と共に国内5件目の世界自然遺産として登録が決定された。 気候については島の中央部の名瀬に測候所がある奄美市を参照。
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
    <a href="syouhinn_kagosima.php" class="omiyage">＞お土産</a>
</h1>
</body>
</html>

