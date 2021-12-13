<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Addresschoose</title>
    <link rel="icon"  type="image/x-icon" sizes="144*144" href="../card/favicon.ico">
    <link rel="stylesheet" href="css/Addstyle.css">
    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>

</head>
<body>
<a href="" class="original-button">←　戻る</a>
<div class="N1">
    <p><strong><big>お届け先を選択</big></strong></p>
</div>

<form action="Pay.php"
<div class="A1">
    <ul>
        <li class="info0_2"><a>名前：麻生太郎</a></li>
        <li class="info0_3"><a>郵便番号：0000000</a></li>
        <li class="info0_4"><a>住所：福岡県福岡市博多駅南1-1-1</a></li>
    </ul>
</div>
<div class="A2">
    <button class="butt">この住所を選択</button>
</div>
<div class="A3">
    <a href=""> <button class="butt1">支払方法を選択</button></a>
</div>
<hr>
<h1>住所を追加</h1>
<form action="" method="post">
    <div>
        <label for="i_name">お名前</label><br>
        <input id="i_name" type="text" name="name" value="">
        <br>
        <label for="i_yubinbango">郵便番号</label><br>
    <input type="text" name="zip21" size="4" maxlength="3"> － <input type="text" name="zip22" size="5" maxlength="4" onKeyUp="AjaxZip3.zip2addr('zip21','zip22','addr21','addr21');" >
    <br>
    <label for="i_todo">都道府県</label><br>
    <input type="text" name="addr21" size="30">
    <br>
    <label for="i_shison">市区町村</label><br>
    <input type="text" name="addr21" size="30">
    <br>
    <label for="i_banchi">番地</label><br>
    <input type="text" name="addr21" size="30">
    <br>
    <label for="i_tatemono">建物名</label><br>
    <input type="text" name="addr21" size="30">
    <br>
    </div>


</body>
</html>
