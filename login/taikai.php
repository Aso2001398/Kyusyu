<?php session_start()?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>User-Out</title>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id"
          content="165332448198-6hl3alti9ihbgihoit1nqu4f6bmvphtg.apps.googleusercontent.com">
    <link rel="icon"  type="image/x-icon" sizes="144*144" href="taikai/favicon.ico">
    <link rel="stylesheet" href="css/taikai_style.css"><!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title>User-Out</title>
        <link rel="icon"  type="image/x-icon" sizes="144*144" href="taikai/favicon.ico">
        <link rel="stylesheet" href="css/taikai_style.css">
        <style>
            body{background-color:gray;}
            button{
                width: 80px;
                height:40px;
            }
        </style>
    </head>
    <body>
    <button  class="button" onclick=history.back()>戻る</button>
    <div class="logo">
        <img src="../syop/img/logo1.png" title="九州旅行記" width="400" height="200" >
    </div>
    <div class = "nav">
        <div>
            <div class = "bgDiv">
                <div class = "taikai">
                    <div class ="mokujii">
                        <h1>退会しますか？</h1>
                    </div>
                    <button class = "btn1" onclick="cancel();">取消</button>
                    <button class = "btn2" onclick="signOut();">確認</button>
                    <script>
                        function cancel(){
                            window.location.href = '../syop/top.php';
                        }

                        function signOut() {
                            <?php $_SESSION = array(); $_SESSION['message'] = 'ログアウトしました'?>
                            var auth2 = gapi.auth2.getAuthInstance();
                            auth2.signOut().then(function () {
                                console.log('User signed out.');
                            });
                            window.location.href = '../syop/top.php';
                        }

                        function onLoad() {
                            gapi.load('auth2', function() {
                                gapi.auth2.init();
                            });
                        }

                    </script>

                </div>
        </div>
    </div>
    </div>
    <script src="https://apis.google.com/js/platform.js?onload=onLoad" async defer></script>
    </body>
</html>