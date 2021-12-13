<?php
session_start();
if (isset($_SESSION["login_account"])) {
    header("Location: ../syop/mypage.php");
    exit();
}
if(isset($_SESSION['message'])){
    echo <<<EOM
        <script type="text/javascript">
        window.onload = function (){
            alert("{$_SESSION['message']}");
        }
        </script>
    EOM;
    $_SESSION['message'] = null;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>User-Login</title>
    <link rel="icon"  type="image/x-icon" sizes="144*144" href="favicon.ico">
    <link rel="stylesheet" href="css/login_style.css">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id"
          content="165332448198-6hl3alti9ihbgihoit1nqu4f6bmvphtg.apps.googleusercontent.com">
    <style>
    body{background-color: gray;}
    button{
        width: 80px;
        height:40px;
    }
    h1{text-align:center
     }
    </style>
</head>
<body>
    <button  class="button" onclick=history.back()>戻る</button>
    <div class="logo">
    <img src="logo1.png" title="九州旅行記" width="400" height="200" >
    </div>
    <div class = "nav">
    <div>
    <div class = "bgDiv">
        <div class = "login">
            <form action="kaiin-login_result.php" method="post">
                <div class ="mokujii">
                    <h1>Login</h1>
                </div>
                <div class = "username">
                    <input class = "userInp" name="mail" type="email" placeholder="Email Address" value="a@a" required>
                </div>
                <div class = "pwd">
                    <input class = "pwdInp" name="password" type="text" placeholder="Password" value="1" required>
                </div>
                <div class="newUser">
                    <a class="newUserLink" href="newuser.php" target="">新規登録はこちら</a>
                </div>
                <button class="btn">ログイン</button>
            </form>
            <p>
            <div class="g-signin2" data-onsuccess="onSignIn">
                <script>
                    function onSignIn(googleUser) {
                        profile = googleUser.getBasicProfile();
                        console.log('ID: ' + profile.getId());
                        var xhr = new XMLHttpRequest();
                        xhr.open('POST', 'http://aso2001398.mods.jp/php2/Kyusyu/login/google_login.php');
                        xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded;charset=UTF-8');
                        xhr.send('name=' + profile.getName() + '&mail=' + profile.getEmail());
                        sessionStorage.setItem('re', 'true')
                        window.location.href = 'google_login.php';
                    }

                </script>

            </div>

        </div>
    </div>
    </div>
</body>
</html>
