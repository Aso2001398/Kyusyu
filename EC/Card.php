<?php
session_start();
if(isset($_SESSION['cart_mes'])){
    echo <<<EOM
        <script type="text/javascript">
        window.onload = function (){
            alert("{$_SESSION['cart_mes']}");
        }
        </script>
    EOM;
    $_SESSION['cart_mes'] = null;
}
//ローカルライブラリに接続
require_once '../method.php';

//DB接続
$pdo = DB_connect();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cart</title>
    <script src="js/gg.js"></script>
    <link rel="stylesheet" href="css/Cardstyle.css">
</head>
<body>
<div class="header">
    <button type="button"  class="original" onclick=history.back()>←戻る</button>

    <div class="img">
        <img src="img/logo1.png" alt="" title="九州旅行記" width="120" height="60" >
    </div>
    <div class="search">
        <form action="" method="post">
            <input type="search" style="width:300px;height: 50px;" id="search_1" placeholder="キーワードを入力">
            <input type="submit" name="submit" id="search_2" value="検索">
        </form>
    </div>
    <div class="img2">
        <a href="../login/kaiin-login.php" ><img src="img/login.png" alt="" title="ログインアイコン" width="80" height="35" ></a>
    </div>
    <div class="img3">
        <a href="Card.php" ><img src="img/cart.png" alt="" title="カートアイコン" width="50" height="35" ></a>
    </div>
</div>
<div class="transition">
    <a href="../syop/top.php"><p class="top">トップページ</p></a>
    <a href="../kannkouti/hukuoka.php"><p class="spot">観光スポット</p></a>
    <a href="syohin.php"><p class="miyage">お土産一覧</p></a>
</div>
<table>
    <thead>
    <tr>
        <th class="tdone">写真</th>
        <th class="tdtwo">商品</th>
        <th class="tdthree">数量</th>
        <th class="tdfour">単価</th>
        <th class="tdfive">小計</th>
        <th class="tdsix">操作</th>
    </tr>
    </thead>
    <tbody>
    <form method="post">
        <?php
        $i=1;
        $size = 'height="100vh"';
        $items=$pdo -> prepare('SELECT * FROM cart where user_id = ? order by cart_id');
        $items->bindValue(1,$_SESSION['user_id'],PDO::PARAM_STR);
        $items->execute();
        foreach ($items as $item){
            $tems=$pdo -> prepare('SELECT * FROM item where item_id = ?');
            $tems->bindValue(1,$item['item_id'],PDO::PARAM_STR);
            $tems->execute();
            $result2=$tems->fetch(PDO::FETCH_ASSOC);
            if($result2['delete_check']){
                continue;
            }
            echo <<<EOM
            <tr class="trclass">
                
                <td class="tdone xuhao"><img src="../admin_kari/img/item/{$result2['image_name']}" {$size}></td>
                <td class="tdtwo ">{$result2['item_name']}</td>
                <td class="tdthree"><span class="jiajie"><input type="button" value="-"><span class="num">0</span><input type="button" value="+"></span></td>
                <td class="tdfour"><span>￥：</span><span class="unit">{$result2['price']}</span></td>
                <td class="tdfive"><span>小計：</span><span class="subtal">0</span></td>
                <td class="tdsix"><input type="submit" value="削除" formaction="cart_delete.php" formmethod="POST"/></td>
            </tr>
            
            EOM;//<input type="text" id="sum" name="syou$i" class="sum" value="0">
            $i++;
        }
        ?>

        <tr><td   colspan="6"; class="talast">商品は <span class="goods_num">0</span> 点; 合計金額：￥ <span class="pricetal">0</span><button class="butt" type="submit"formaction="Addresschoose.php" formmethod="POST"/>購入に進む</button></td></tr>
    </form>

    </tbody>
</table>
</body>
</html>