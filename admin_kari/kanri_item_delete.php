<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>管理者商品消去</title>
    <link rel="stylesheet" href="./css/item_delete.css">
<body>
<button type="button" onclick=history.back()>←戻る</button>
<div class="parent">
    <span class="title_1">  <h1>商品消去</h1> </span>
</div>
<div class="a1">
<p>商品ID</p>
</div>
<div class="item_delete">
    <form action="item_delete.php" method="post">
    <input type="number" name="item_id" min="0">

    <button type="button" name="delete">消去</button>
    </form>
</div>
    <p class="box"> </p>
<div class="a2">
    <?php
    try {
        $pdo = new PDO('mysql:host=mysql154.phy.lolipop.lan;
                    dbname=LAA1290554-kankou;charser=utf8',
            'LAA1290554','1341398com');
    }
    catch (PDOException $e) {
        exit ('データベースエラー');
    }

    foreach ($pdo->query('select * from item') as $row) {
        echo '<p>';
        echo $row['song_id'], ' :  ';
        echo $row['song_name'], ' : ';
        echo $row['singer'];
        echo'</p>';
    }

    $pdo = null;
    ?>
<p>
<input type="button" value="更新" onclick="koshin()">
</p>
</div>
</body>
</html>

