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
//ファイルの名前を決定する
$filename = date("dis")."_".$_FILES['image_name']['name'];
$upload = 'img/item/'.$fil
ename;

//アップデートが必要かどうか。すべてのアイテム名を検索し一致するものがあればアップデートを実行する
$up = false;

$ame=$pdo -> prepare('SELECT * FROM item');
$ame -> execute();
//重複している名前を検索し、アップデート変数を変更する
foreach ($ame as $ae){
    if($ae['item_name'] == $_POST['item_name']){
        //指定した商品が削除されていた場合、新しいidで登録させる
        if($ae['delete_check']){
            break;
        }
        $up=true;
        break;
    }
}

if($up){
    //DB内の同じ名前のアイテムを取得する
    $name=$pdo->prepare('SELECT * FROM item where item_name=?');
    $name->bindValue(1,$_POST['item_name'], PDO::PARAM_STR);
    $name->execute();
    $result = $name->fetch(PDO::FETCH_ASSOC);
    $sql=$pdo->prepare('update item set price=?, stock=?, image_url=?, item_data=?, area=? where item_name=?');
    $sql->bindValue(1,$_POST['price'], PDO::PARAM_STR);
    $sql->bindValue(2,$_POST['stock'], PDO::PARAM_STR);
    $sql->bindValue(3,$filename, PDO::PARAM_STR);
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
    echo $_FILES['image_name']['name'];
    $sql=$pdo->prepare('INSERT INTO item(item_name,price,stock,image_name,item_data,area) 
                          VALUES(?,?,?,?,?,?)');
    $sql->bindValue(1,$_POST['item_name'], PDO::PARAM_STR);
    $sql->bindValue(2,$_POST['price'], PDO::PARAM_STR);
    $sql->bindValue(3,$_POST['stock'], PDO::PARAM_STR);
    $sql->bindValue(4,$filename, PDO::PARAM_STR);
    $sql->bindValue(5,$_POST['item_data'], PDO::PARAM_STR);
    $sql->bindValue(6,$_POST['pref'], PDO::PARAM_STR);
    $sql->execute();

    //画像をサーバーにアップロードする
    move_uploaded_file($_FILES['image_name']['tmp_name'], $upload);

    if($sql->rowCount()==1){
        echo '追加に成功しました。<br>下のボタンを押してください。';
    }else{
        echo '追加に失敗しました';
    }
}
?>

<input type="button" onclick="location.href='kanri_top.php'" value="遷移">