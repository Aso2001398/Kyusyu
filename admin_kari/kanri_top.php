<?php
//セッションを使うことを宣言
session_start();

//ログインされていない場合は強制的にログインページにリダイレクト
/*if (!isset($_SESSION["login"])) {
    header("Location: kanri_login.php");
    exit();
}*/

//ローカルライブラリに接続
require_once '../method.php';
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>top</title>
    <link rel="stylesheet" href="./css/kanri.css">
<body>
<button type="button" onclick=history.back()>←戻る</button>
<div class="parent">
    <span class="title_1">  <h1>商品追加</h1> </span>
</div>
<form action="kanri_item_delete.php" method="post">
<div class="btn">
<input type="submit" value="商品消去はこちら→" class="button" >
</div>
</form>
<p class="box"> </p>
<div class="wrapper">
    <div class="box1">
<div class="item">

    <form action="kanri_item_input_result.php" enctype="multipart/form-data" method="post">
    <p>都道府県　ID</p>
    <p>
        <select name="pref" required>
            <option value="">選択してください</option>
            <option value="福岡県">福岡県 1</option>
            <option value="佐賀県">佐賀県 2</option>
            <option value="長崎県">長崎県 3</option>
            <option value="熊本県">熊本県 4</option>
            <option value="大分県">大分県 5</option>
            <option value="宮崎県">宮崎県 6</option>
            <option value="鹿児島県">鹿児島県 7</option>
            <option value="沖縄県">沖縄県 8</option>
        </select>
    </p>
    <p>商品名</p>
    <p>
        <input type="text" name="item_name" value="1" required>
    </p>
    <p>値段</p>
    <p>
        <input type="tel" name="price" value="1" required>
    </p>
    <p>個数</p>
    <p>
        <input type="number" name="stock" min="0" value="1" required>
    </p>
    <div class="ItemData">
    <p>商品説明</p>
    <p>
        <textarea name="item_data" required></textarea>
    </p>
    </div>
</div>
    </div>
    <div class="divider"></div>
    <div class="box2">
        <div class="img">
        <p>商品写真</p>
        <p>
            <input type="file" name="image_name" required>
        </p>
        </div>

    </div>
    <div class="add_button">
        <br>
    <p>
        <input type="submit" name="button" value="商品を追加する">
    </p>
    </div>
    </form>
</div>
<br><br>
<p class="box"> </p>
ID : 名前 : 値段 : 在庫 : 画像 : 説明 : 県名
<?php
try {
    $pdo = new PDO('mysql:host=mysql154.phy.lolipop.lan;
                    dbname=LAA1290554-kyusyu;charser=utf8',
        'LAA1290554','1234');
}
catch (PDOException $e) {
    exit ('データベースエラー');
}

//商品テーブルを全て表示
Display_All($pdo);
?>
</body>
</head>
</html>

