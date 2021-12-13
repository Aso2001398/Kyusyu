<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>管理者商品消去</title>
    <link rel="stylesheet" href="./css/item_delete.css">
<body>
<button type="button" onclick="location.href='kanri_top.php'">←戻る</button>
<div class="parent">
    <span class="title_1">  <h1>商品消去</h1> </span>
</div>
<div class="a1">
<p>商品ID</p>
</div>
<div class="item_delete">
    <form action="kanri_item_delete_result.php" method="post">
    <input type="number" name="item_id" min="0">

    <button type="submit" name="button">消去</button>
    </form>
</div>
    <p class="box"> </p>
<div class="a2">
    <?php
    //ローカルライブラリに接続
    require_once '../method.php';

    $pdo = DB_Connect();
    Display_All($pdo);

    $pdo = null;
    ?>
<p>
<input type="button" value="更新" onclick="koshin()">
</p>
</div>
</body>
</html>

