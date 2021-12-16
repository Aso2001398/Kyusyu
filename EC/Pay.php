<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Payment</title>
    <link、k rel="icon"  type="image/x-icon" sizes="144*144" href="../payment/favicon.ico">

    <link rel="stylesheet" href="css/Paystyle.css">
    <link rel="stylesheet" href="../syop/css/backbutton.css">


</head>
<body>

<button type="button" class="original" onclick=history.back()>←戻る</button>
<br><br><br>
<form action="check.php" method="post">
<table class="PG" cellspacing="1" bgcolor="#333333"  width="800" cellpadding="50">
    <tr>
        <td bgcolor="#fff" align="left">
            <div>
                <input type="radio" name="siharai" value="daibiki" required>
                <label for="daihiki">代引き支払い</label>
                <br>
                <small>　・代引き手数料がかかります</small>
            </div>
            <br>
            <BR>
            <div>
                <input type="radio" name="siharai" value="konbini" required>
                <label for="konbini">コンビニ支払い</label>
                <br>
                <small>　 ・代金のお支払い後に商品が発送されます。お支払いに必要な番号はメールでお知らせします</small>
            </div>
        </td>
    </tr>
</table>
<div class="but">
<button type="submit" name="" value="">確認画面へ</button>
</div>
</form>
</body>
</html>