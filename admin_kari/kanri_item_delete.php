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
    <form action="kanri_item_delete_result.php" method="post">
    <input type="number" name="item_id" min="0">

    <button type="button" name="delete">消去</button>
    </form>
</div>
    <p class="box"> </p>
<div class="a2">
    <?php
    try {
        $pdo = new PDO('mysql:host=mysql154.phy.lolipop.lan;
                    dbname=LAA1290554-kyusyu;charser=utf8',
            'LAA1290554','1234');
    }
    catch (PDOException $e) {
        exit ('データベースエラー');
    }

    foreach ($pdo->query('select * from item') as $row) {
        if(!$row['delete_check']){
            echo '<p>';
            echo $row['item_id'], ' : ';
            echo $row['item_name'], ' : ';
            echo $row['price'], ' : ';
            echo $row['stock'], ' : ';
            echo $row['image_name'], ' : <br>';
            echo $row['item_data'], ' : <br>';
            echo $row['area'];
            echo'</p>';
        }

    }
    $pdo = null;
    ?>
<p>
<input type="button" value="更新" onclick="koshin()">
</p>
</div>
</body>
</html>

