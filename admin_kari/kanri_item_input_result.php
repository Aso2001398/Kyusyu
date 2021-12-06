<?php
try {
    $pdo = new PDO('mysql:host=mysql154.phy.lolipop.lan;
                    dbname=LAA1290554-kyusyu;charser=utf8',
        'LAA1290554','1234');
}
catch (PDOException $e) {
    exit ('データベースエラー');
}
$name = $pdo->prepare('select item_name,stock from item');

$up = false;
foreach ($pdo->prepare('select item_name,stock from item') as $ame){
    if($ame['item_name'] == $_POST['item_name']){
        $sql=$pdo->prepare('update item set price=?, stock=?, image_url=?, item_data=?, area=?');
        $sql->bindValue(1,$_POST['price'], PDO::PARAM_STR);
        $sql->bindValue(2,$ame['stock'] + $_POST['stock'], PDO::PARAM_STR);
        $sql->bindValue(3,$_POST['image_url'], PDO::PARAM_STR);
        $sql->bindValue(4,$_POST['item_data'], PDO::PARAM_STR);
        $sql->bindValue(5,$_POST['pref'], PDO::PARAM_STR);
        if($sql->rowCount()==1){
            echo '更新に成功しました。<br>下のボタンを押してください。';
        }else{
            echo '更新に失敗しました';
        }
        $up = true;
        break;
    }
}
if(!$up){
    $sql=$pdo->prepare('INSERT INTO item(item_name,price,stock,image_url,item_data,area) 
                          VALUES(?,?,?,?,?,?)');
    $sql->bindValue(1,$_POST['item_name'], PDO::PARAM_STR);
    $sql->bindValue(2,$_POST['price'], PDO::PARAM_STR);
    $sql->bindValue(3,$_POST['stock'], PDO::PARAM_STR);
    $sql->bindValue(4,$_POST['image_url'], PDO::PARAM_STR);
    $sql->bindValue(5,$_POST['item_data'], PDO::PARAM_STR);
    $sql->bindValue(6,$_POST['pref'], PDO::PARAM_STR);
    $sql->execute();
    if($sql->rowCount()==1){
        echo '追加に成功しました。<br>下のボタンを押してください。';
    }else{
        echo '追加に失敗しました';
    }
}
?>

<input type="button" onclick="location.href='kanri_top.php'" value="遷移">