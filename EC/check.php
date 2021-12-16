<?php
session_start();
//ローカルライブラリに接続
require_once '../method.php';

//DB接続
$pdo = DB_connect();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Check</title>
    <link rel="icon"  type="image/x-icon" sizes="144*144" href="../card/favicon.ico">
    <link rel="stylesheet" href="css/checkstyle.css">
    <link rel="stylesheet" href="../syop/css/backbutton.css">
</head>
<body>
<button type="button"  class="original" onclick=history.back()>←戻る</button>
<div class="N1">
<p><strong><big>注文内容を確認する</big></strong></p>
</div>
<form action="../EC/over.php" method="post">
<div class="info0 warp">
     <ul>
         <?php
         $mail=$pdo -> prepare('SELECT * FROM member where user_id = ?');
         $mail->bindValue(1,$_SESSION['user_id'],PDO::PARAM_STR);
         $mail->execute();
         $user=$mail->fetch();
         if($_POST['siharai']=='daibiki'){
             $siharai='代引き支払い';
         }else{
             $siharai='コンビニ支払い';
         }
         echo <<<EOM
            <p class="info0_1"><a><strong>お届け先</strong></a></p>
            <li class="info0_2"><a>名前：{$user['true_name']}</a></li>
            <li class="info0_3"><a>郵便番号：{$user['yubin']}</a></li>
            <li class="info0_4"><a>住所：{$user['address']}</a></li>
            <li class="info0-5"><a>支払方法：{$siharai}</a></li>
         EOM;
         ?>
     </ul>
</div>

<div class="info warp">
    <ul>
        <?php
        $delivery_charge=100;
        $count=1;
        $total=0;
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
                <li class="info_2"> <img src="../admin_kari/img/item/{$result2['image_name']}" {$size}> </li>
                <li class="info_3"><a>商品名：{$result2['item_name']}</a></li>
                <li class="info_4"><a>値段：{$result2['price']}</a> </li>
                <li class="info_6"><a>数量：{$count}</a></li>
            EOM;
            $total+=$result2['price']*$count;
        }
        $all_total=$total+$delivery_charge;
        echo <<<EOM
                
                </div>
                <div class="into">
                    <p class="W2">商品小計：{$total}円
                        <br>
                        配送料：{$delivery_charge}円
                        <br>
                        <br>合計:￥{$all_total}</p>
                        <input type="hidden" name="total" value="$total">
                    <button class="butt">注文を確定する</button>
                </div>
            EOM;
        ?>

</form>
</body>
</html>