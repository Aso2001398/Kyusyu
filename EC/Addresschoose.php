<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Addresschoose</title>
    <link rel="icon"  type="image/x-icon" sizes="144*144" href="../card/favicon.ico">
    <link rel="stylesheet" href="css/Addstyle.css">
    <link rel="stylesheet" href="../syop/css/backbutton.css">
    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>

</head>
<body>
<button type="button"  class="original" onclick=history.back()>←戻る</button>
<div class="N1">
    <p><strong><big>お届け先を選択</big></strong></p>
</div>

<form action="Pay.php" method="post">
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
    <input type="text" name="zip22" size="9" maxlength="8" onKeyUp="AjaxZip3.zip2addr('zip21','zip22','addr21','addr21');" >
    <br>
    <label for="i_todo">住所</label><br>
    <input type="text" name="addr21" size="100">

        <button name="newAddress">住所を追加</button>
    </div>



</body>
</html>
