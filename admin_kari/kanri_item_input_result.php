<?php
if(!isset($_POST{'item_name'})){
header("Location:kanri_top.php");
exit();
}
try {
    $pdo = new PDO('mysql:host=mysql154.phy.lolipop.lan;
                    dbname=LAA1290554-kyusyu;charser=utf8',
        'LAA1290554','1234');
}
catch (PDOException $e) {
    exit ('データベースエラー');
}
//アップデートが必要かどうか。すべてのアイテム名を検索し一致するものがあればアップデートを実行する
$up = false;
//検索が必要
$item_check = true;

$ame=$pdo -> prepare('SELECT * FROM item');
$ame -> execute();
if($ame['delete_check']){
    $dlt=$pdo->prepare('delete from item where item_name');
    $dlt->bindValue(1,'item_name');
    $dlt->execute();
    $item_check = false;
}
if($item_check){
    foreach ($ame as $ae){
        if($ae['item_name'] == $_POST['item_name']){
            $up=true;
            break;
        }
    }
}

if($up){
    $name=$pdo->prepare('SELECT * FROM item where item_name=?');
    $name->bindValue(1,$_POST['item_name'], PDO::PARAM_STR);
    $name->execute();
    $result = $name->fetch(PDO::FETCH_ASSOC);
    print_r($result);
    $sql=$pdo->prepare('update item set price=?, stock=?, image_url=?, item_data=?, area=? where item_name=?');
    $sql->bindValue(1,$_POST['price'], PDO::PARAM_STR);
    $sql->bindValue(2,$_POST['stock'], PDO::PARAM_STR);
    $sql->bindValue(3,$_POST['image_name'], PDO::PARAM_STR);
    $sql->bindValue(4,$_POST['item_data'], PDO::PARAM_STR);
    $sql->bindValue(5,$_POST['pref'], PDO::PARAM_STR);
    $sql->bindValue(6,$_POST['item_name'], PDO::PARAM_STR);
    $sql -> execute();
    if($sql->rowCount()==1){
        echo '更新に成功しました。<br>下のボタンを押してください。';
    }else {
        echo '更新に失敗しました';
    }
}else{
    $sql=$pdo->prepare('INSERT INTO item(item_name,price,stock,image_url,item_data,area) 
                          VALUES(?,?,?,?,?,?)');
    $sql->bindValue(1,$_POST['item_name'], PDO::PARAM_STR);
    $sql->bindValue(2,$_POST['price'], PDO::PARAM_STR);
    $sql->bindValue(3,$_POST['stock'], PDO::PARAM_STR);
    $sql->bindValue(4,$_POST['image_name'], PDO::PARAM_STR);
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