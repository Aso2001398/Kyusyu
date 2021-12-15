<?php
session_start();
//ローカルライブラリに接続
require_once '../method.php';
//DB接続
$pdo = DB_connect();


if($_SESSION['log']=='tai'){
$dlt=$pdo->prepare('delete from member where user_id=?');
$dlt->bindValue(1,$_SESSION['user_id']);
$dlt->execute();
$_SESSION['message'] = 'ログアウトしました';
}
$_SESSION = array();
$_SESSION['message'] = 'ログアウトしました';
header("Location:../syop/top.php");
exit();
?>

<script>
    window.onLoad(){

        var auth2 = gapi.auth2.getAuthInstance();
        auth2.signOut().then(function () {
            console.log('User signed ou]t.');
        });
    }

    function onLoad() {
        gapi.load('auth2', function() {
            gapi.auth2.init();
        });
    }
</script>

<?php
