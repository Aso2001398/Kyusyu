<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>NewUser</title>
    <link、k rel="icon"  type="image/x-icon" sizes="144*144" href="favicon.ico">
    <link rel="stylesheet" href="css/newuser_style.css">
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
<div class = "nav">
    <div>
        <div class = "bgDiv">
            <div class = "taikai">
                <div class ="mokujii">
                    <h1>新規会員登録</h1>
                </div>
                <div class ="aav">
                    <div>
                        <div class="bbDiv">
                            <div class="dd">
                                <form action="./newuser_result.php" method="post">
                                    Email:<br>
                                    <input type="email" name="mail" placeholder="メールアドレスを入力してください" value="a@a" required>
                                    <br>
                                    Username:<br>
                                    <input type="text" width="200px" name="user_name" placeholder="お名前を入力してください" value="ya" required>
                                    <br>
                                    Password:<br>
                                    <input type="text" name="password" placeholder="パスワードを入力してください" value="1" required>
                                    <br><br>
                                    <input type="submit" name="button" value="登録">
                                    <br>
                                    <a class="oldUserLink" href="kaiin-login.php" target="">すでに会員の方はこちらからログインしてください</a>
                                </form>

                            </div>
                            <?php if(isset($_SESSION['err'])){
                                echo '<p class="err">',$_SESSION['err'],'</p>';
                                $_SESSION['err']=null;
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>