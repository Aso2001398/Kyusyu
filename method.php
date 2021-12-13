<?php
/*
 * //ローカルライブラリに接続
require_once '../method.php';

//DB接続
$pdo = DB_connect();
*/

function Hello(){
    echo 'Hello World!';
}

/**
 * @return PDO
 * データベースに接続する
 * 受け取る変数は$pdoにするとややこしくならないかもしれない
 */
function DB_Connect(): PDO{
    return new PDO('mysql:host=mysql154.phy.lolipop.lan;
                dbname=LAA1290554-kyusyu;charser=utf8',
        'LAA1290554', '1234');
}

/**
 * @param $pdo
 * 削除されていない商品の全表示
 */
function Display_All($pdo){
    $size = 'height="100vh"';
    foreach ($pdo->query('select * from item') as $row) {
        if(!$row['delete_check']){
            echo '<p>';
            echo $row['item_id'], ' : ';
            echo $row['item_name'], ' : ';
            echo $row['price'], ' : ';
            echo $row['stock'], ' : <br>';
            echo $row['image_name'], ' : <br>';
            echo "<img src='img/item/{$row['image_name']}' {$size}><br>";
            echo $row['item_data'], ' : <br>';
            echo $row['area'];
            echo'</p>';
        }
    }
}

/**
 * @param $post
 * resultで使用するログインメソッド。
 * セッションにid,名前、メール、住所を入力する
 */
function Login($post){
    $pdo = DB_connect();
    $mail=$pdo -> prepare('SELECT * FROM member');
    $mail -> execute();
//重複しているメールアドレスを検索する
    foreach ($mail as $ail){
        if($ail['mail'] == $post['mail']){
            session_regenerate_id(TRUE); //セッションidを再発行
            $_SESSION["user_id"] = $ail['user_id'];
            $_SESSION["login_account"] = $ail['mail']; //セッションにログイン情報を登録
            $_SESSION["name"] = $ail['user_name'];
            $_SESSION["address"] = $ail['address'];
            $_SESSION['login'] = true;
            $_SESSION['message'] = "ようこそ、{$ail['user_name']}さん";
        }
    }
}