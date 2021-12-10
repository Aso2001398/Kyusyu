<!DOCTYPE html>
<html lang="ja">
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <meta charset="UTF-8">
    <title>長崎県</title>
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
        var img_src = "img/nagasaki/iwadozinnja.jpeg"
        var img_name = "岩戸神社";
        var img_explanation ="老杉が静かなたたずまいを構える岩戸水源の森。流れ落ちる滝の音を聞きながら進むと、奥に見えるのが岩戸神社です。境内は樹齢300年を越える檜や杉など巨木に囲まれ、静寂とともに神秘的な雰囲気に包まれています。";
        document.getElementById("image_change").src = img_src;
        document.getElementById("kyusyuu-change").innerText = img_name;
        document.getElementById("explanation").innerText = img_explanation;
    }
    function setCG(n)
    {
        var img_src = "img/nagasaki/misozienn.jpeg"
        var img_name = "三十路苑";
        var img_explanation ="雲仙は紅葉する植物が120種類を越え、国の天然記念物に指定。10月下旬頃から色づき始め、自然が織り成す圧巻の色彩が雲仙を彩ります。三十路苑は六兵衛茶屋の経営者が、８，０００坪の自宅裏山にもみじを植えだしたことが始まり。３０年余りたった現在は、広大な敷地で鮮やかな紅葉を楽しめます。夜はライトアップされ、幻想的な世界が広がります。";
        document.getElementById("image_change").src = img_src;
        document.getElementById("kyusyuu-change").innerText = img_name;
        document.getElementById("explanation").innerText = img_explanation;
    }
    function setDG(n)
    {
        var img_src = "img/nagasaki/oiranndamura.jpeg"
        var img_name = "オランダ村";
        var img_explanation ="（ながさきオランダむら、英語表記:Nagasaki Holland Village）は、かつて長崎県西彼杵郡西彼町（現・西海市）にあったテーマパーク。佐世保市のテーマパークハウステンボスのルーツとなった施設である。1983年（昭和58年）開園、2001年（平成13年）10月21日に閉園。跡地は2003年（平成15年）に西海市が購入し、2005年（平成17年）に食のテーマパークキャスビレッジ（cas village）として再生したが、約半年で破綻した。" +
            "キャスビレッジ破綻後の跡地の一部には、2010年（平成22年）5月6日に西海市役所西彼総合支所と長崎県央振興局農林部西海事務所が移転した。" +
            "西海市は2015年（平成27年）春にも一部を再オープンさせる方針で管理運営事業者を公募した結果、同市にある動物園の長崎バイオパークの運営企業等が設立する新法人ホーランド・ヴィレッジ（仮称）が選定され、2016年（平成28年）3月開業を目指し施設を整備することになり、2016年4月16日にポートホールン長崎として再開した。そして、2017年11月27日には施設名と運営会社名を初代名称である長崎オランダ村に再改名。";
        document.getElementById("image_change").src = img_src;
        document.getElementById("kyusyuu-change").innerText = img_name;
        document.getElementById("explanation").innerText = img_explanation;
    }
</script>
<ul class="spot-list">
    <li>
        <div class="change1">
        </div>
        <img src="../../syop/img/nagasaki/iwadozinnja.jpeg" class="change" onclick="setBG()" width="150" height="217" alt="">
        <img src="../../syop/img/nagasaki/misozienn.jpeg" class="change2" onclick="setCG(2)" width="150" height="217" alt="">
        <img src="../../syop/img/nagasaki/oiranndamura.jpeg" class="change3" onclick="setDG(3)" width="150" height="217" alt="">
    </li>
</ul>
<div class="picture1">
    <img id="image_change" src="../../syop/img/nagasaki/iwadozinnja.jpeg" width="1860" height="900">
</div>
<script type="text/javascript">
    img = new Array("img/nagasaki/iwadozinnja.jpeg","img/nagasaki/misozienn.jpeg","img/nagasaki/oiranndamura.jpeg"); //*(1)
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
<h1 class="kannkouti2">長崎県</h1>
<div class="kyusyuu-name">
<p id="kyusyuu-change">岩戸神社</p>
</div>
<p id="explanation" class="tired">
    うっそうとした緑に包まれた岩戸神社は、古くから「岩戸さん」の愛称で地元の人々に親しまれている神社です。
</p>
<ul class="spot-list" >
    <li>
        <a href="hukuoka.php" class="kannkouti">
            <div class="spot-text">
                <h1 class="button">
                    福岡県
                </h1>
                <hr width="100%" color="black" size="0">
                <img src="../../syop/img/fukuoka/mozikouretoro.jpg" class="kannkou" width="200" height="200" alt="福岡県">
            </div>
        </a>
        <a href="saga.php" class="kannkouti">
            <div class="spot-text">
                <h1 class="button">
                    佐賀県
                </h1>
                <hr width="99%" color="black" size="0">
                <img src="../../syop/img/saga/kyuunennann.png" class="kannkou" width="200" height="200" alt="佐賀県">
            </div>
        </a>
        <a href="nagasaki.php" class="kannkouti">
            <div class="spot-text">
                <h1 class="button">
                    長崎県
                </h1>
                <hr width="100%" color="black" size="0">
                <img src="../../syop/img/nagasaki/iwadozinnja.jpeg" class="kannkou" width="200" height="200" alt="長崎県">
            </div>
        </a>
        <a href="kumamoto.php" class="kannkouti">
            <div class="spot-text">
                <h1 class="button">
                    熊本県
                </h1>
                <hr width="100%" color="black" size="0">
                <img src="../../syop/img/kumamoto/amakusagobasi.jpg" class="kannkou" width="200" height="200" alt="熊本県">
            </div>
        </a>
        <a href="ooita.php" class="kannkouti">
            <div class="spot-text">
                <h1 class="button">
                    大分県
                </h1>
                <hr width="100%" color="black" size="0">
                <img src="../../syop/img/ooita/yamanami2.jpg" class="kannkou" width="200" height="200" alt="大分県">
            </div>
        </a>
        <a href="miyazaki.php" class="kannkouti1">
            <div class="spot-text">
                <h1 class="button">
                    宮崎県
                </h1>
                <hr width="100%" color="black" size="0">
                <img src="../../syop/img/miyazaki/aosimazinnja2.jpg" class="kannkou" width="200" height="200" alt="宮崎県">
            </div>
        </a>
        <a href="kagosima.php" class="kannkouti1">
            <div class="spot-text">
                <h1 class="button">
                    鹿児島県
                </h1>
                <hr width="100%" color="black" size="0">
                <img src="../../syop/img/kagosima/amamioosima3.jpeg" class="kannkou" width="200" height="200" alt="鹿児島県">
            </div>
        </a>
        <a href="okinawa.php" class="kannkouti1">
            <div class="spot-text">
                <h1 class="button">
                    沖縄県
                </h1>
                <hr width="100%" color="black" size="0">
                <img src="../../syop/img/okinawa/mannzamou2.jpg" class="kannkou" width="200" height="200" alt="沖縄県">
            </div>
        </a>
    </li>
</ul>
<h1>
    <a href="" class="omiyage">＞お土産</a>
</h1>
</body>
</html>

