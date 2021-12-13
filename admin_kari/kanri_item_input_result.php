<?php
//postされていない場合自動的に入力画面へと飛ばす
if(!isset($_POST['item_name'])){
    header("Location:kanri_top.php");
    exit();
}

//ローカルライブラリに接続
require_once '../method.php';

//DB接続
$pdo = DB_connect();

//ファイルの名前を決定する
$filename = date("dis")."_".$_FILES['image_name']['name'];
$upload = 'img/item/'.$filename;
$up_name="";

//アップデートが必要かどうか。すべてのアイテム名を検索し一致するものがあればアップデートを実行する
$up = false;

$ame=$pdo -> prepare('SELECT * FROM item');
$ame -> execute();
//重複している名前を検索し、アップデート変数を変更する
foreach ($ame as $ae){
    if($ae['item_name'] == $_POST['item_name']){
        //指定した商品が削除されていた場合、新しいidで登録させる
        if(!$ae['delete_check']){
            $up=true;
            //更新の際、複数の同名商品が存在する場合があるため、nameではなくidを取得する
            $up_id = $ae['item_id'];
            break;
        }
    }
}

if($up){
    //DB内の同じ名前のアイテムを取得する。指定する際はidを送る
    $sql=$pdo->prepare('update item set price=?, stock=?, image_name=?, item_data=?, area=? where item_id=?');
    $sql->bindValue(1,$_POST['price'], PDO::PARAM_STR);
    $sql->bindValue(2,$_POST['stock'], PDO::PARAM_STR);
    $sql->bindValue(3,$filename, PDO::PARAM_STR);
    $sql->bindValue(4,$_POST['item_data'], PDO::PARAM_STR);
    $sql->bindValue(5,$_POST['pref'], PDO::PARAM_STR);
    $sql->bindValue(6,$up_id, PDO::PARAM_STR);
    $sql -> execute();

    //画像をサーバーにアップロードする
    move_uploaded_file($_FILES['image_name']['tmp_name'], $upload);

    if($sql->rowCount()==1){
        echo '更新に成功しました。<br>下のボタンを押してください。';
    }else {
        echo '更新に失敗しました';
    }
}else{
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
        echo '追加に成功しました。<br>ボタンを押してください。';
    }else{
        echo '追加に失敗しました';
    }
}
$pdo = null;
?>

<input type="button" onclick="location.href='kanri_top.php'" value="追加ページに戻る">