<?php
try {
    $pdo = new PDO('mysql:host=mysql154.phy.lolipop.lan;
                    dbname=LAA1290554-kankou;charser=utf8',
        'LAA1290554','1341398com');
}
catch (PDOException $e) {
    exit ('データベースエラー');
}
$up = false;
$name = $pdo->prepare('select item_name
from item');
foreach ($name as $ame){
    if($ame == $_POST['item_name'] && ){
        $sql=$pdo->prepare('update item set');
    }
}

$sql=$pdo->prepare('INSERT INTO item(item_name,price,stock,image_url,item_data,area) 
                          VALUES(?,?,?,?,?,?);
');
$sql->bindValue(1,$_POST["item_name"], PDO::PARAM_STR);
$sql->bindValue(2,$_POST["price"], PDO::PARAM_STR);
$sql->bindValue(3,$_POST['stock'], PDO::PARAM_STR);
$sql->bindValue(4,$_POST['image_url'], PDO::PARAM_STR);
$sql->bindValue(5,$_POST['item_data'], PDO::PARAM_STR);
$sql->bindValue(6,$_POST['pref'], PDO::PARAM_STR);
$sql->execute();
if($sql->rowCount()==1){
    echo '追加に成功しました。<br>下のボタンを押してください。';
}else{
    echo '失敗しました';
}
?>
<form action="music-list.php" method="post">
    <button type="submit" name="action" value="send">リストを確認する</button>
</form>