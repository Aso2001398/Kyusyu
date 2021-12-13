<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>User-Login</title>
    <link rel="icon"  type="image/x-icon" sizes="144*144" href="img/favicon.ico">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../syop/css/backbutton.css">
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
<button type="button"  class="original" onclick=history.back()>←戻る</button>
    <div class="logo">
    <img src="img/logo1.png" title="九州旅行記" width="400" height="200" >
    </div>
    <div class = "nav">
    <div>
    <div class = "bgDiv">
        <div class = "login">
            <div class ="mokujii">
                <h1>Lgoin</h1>
            </div>
            <div class = "username">
                <input class = "userInp" type="text" placeholder="Email Address">
            </div>
            <div class = "pwd">
                <input class = "pwdInp" type="text" placeholder="Password">
            </div>
            <div class="newUser">
                <a class="newUserLink" href="#" target="">新規登録はこちら</a>
            </div>
            <button class="btn">ログイン</button>
            <p>
            <div class="g-signin2" data-onsuccess="onSignIn">
                <script>
                    function onSignIn(googleUser) {
                        var id_token = googleUser.getAuthResponse().id_token;
                        var xhr = new XMLHttpRequest();
                        xhr.open('POST', 'login-out.php');
                        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                        xhr.onload = function () {
                            console.log('Signed in as: ' + xhr.responseText);
                        };
                        xhr.send('idtoken=' + id_token);
                        window.location.href = 'index.php';
                    }
                    </div>
                </script>
                </p>
            </div>


    </div>

</div>
</body>
</html>
