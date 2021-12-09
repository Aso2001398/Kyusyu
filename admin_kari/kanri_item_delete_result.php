<?php
//直接アクセスした場合削除画面に遷移する
if(!isset($_POST{'item_id'})){
    header("Location:kanri_item_delete.php");
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

$delete = false;
$ame=$pdo -> prepare('SELECT * FROM item');
$ame -> execute();
foreach ($ame as $ae){
    if($ae['item_id'] == $_POST['item_id']){
        $delete=true;
        break;
    }
}

if($delete){
    $sql=$pdo->prepare('update item set delete_check=? where item_id=?');
    $sql->bindValue(1,true, PDO::PARAM_STR);
    $sql->bindValue(2,$_POST['item_id'], PDO::PARAM_STR);
    $sql->execute();
    if($sql->rowCount()==1){
        echo '更新に成功しました。<br>ボタンを押してください。';
    }else {
        echo '致命的なエラー';
    }
}else{
    echo "おそらくそのIDの商品が存在しません";
}
?>
<input type="button" onclick="location.href='kanri_item_delete.php'" value="遷移">