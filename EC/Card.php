<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cart</title>
    <script src="js/gg.js"></script>
    <link rel="stylesheet" href="css/Cardstyle.css">
</head>
<body>
<div class="header">
    <button type="button"  class="original" onclick=history.back()>←戻る</button>

    <div class="img">
        <img src="img/logo1.png" alt="" title="九州旅行記" width="120" height="60" >
    </div>
    <div class="search">
        <form action="" method="post">
            <input type="search" style="width:300px;height: 50px;" id="search_1" placeholder="キーワードを入力">
            <input type="submit" name="submit" id="search_2" value="検索">
        </form>
    </div>
    <div class="img2">
        <a href="" ><img src="img/login.png" alt="" title="ログインアイコン" width="80" height="35" ></a>
    </div>
    <div class="img3">
        <a href="" ><img src="img/cart.png" alt="" title="カートアイコン" width="50" height="35" ></a>
    </div>
</div>
<div class="transition">
    <a href="../syop/top.php"><p class="top">トップページ</p></a>
    <a href="../kannkouti/hukuoka.php"><p class="spot">観光スポット</p></a>
    <a href="syohin.php"><p class="miyage">お土産一覧</p></a>
</div>
<table>
    <thead>
    <tr>
        <th class="tdone">写真</th>
        <th class="tdtwo">商品</th>
        <th class="tdthree">数量</th>
        <th class="tdfour">単価</th>
        <th class="tdfive">小計</th>
        <th class="tdsix">操作</th>
    </tr>
    </thead>
    <tbody>
    <tr class="trclass">
        <td class="tdone xuhao"><img src="img/img1.jpg" width="80px"/></td>
        <td class="tdtwo ">ゴマサバ</td>
        <td class="tdthree"><span class="jiajie"><input type="button" value="-"><span class="num">0</span><input type="button" value="+"></span></td>
        <td class="tdfour"><span>￥：</span><span class="unit">599</span></td>
        <td class="tdfive"><span>小計：</span><span class="subtal">0</span></td>
        <td class="tdsix"><button class="del">削除</button></td>
    </tr>
    <tr class="trclass">
        <td class="tdone xuhao"><img src="img/img2.jpg" width="80px"/></td>
        <td class="tdtwo">KUMAMOTOマカロンズ</td>
        <td class="tdthree"><span class="jiajie"><input type="button" value="-"><span class="num">0</span><input type="button" value="+"></span></td>
        <td class="tdfour"><span>￥：</span><span class="unit">700</span></td>
        <td class="tdfive"><span>小計：</span><span class="subtal">0</span></td>
        <td class="tdsix"><button class="del">削除</button></td>
    </tr>
    <tr class="trclass">
        <td class="tdone xuhao"><img src="img/img3.jpg" width="80px"/></td>
        <td class="tdtwo">のむヨーグルト</td>
        <td class="tdthree"><span class="jiajie"><input type="button" value="-"><span class="num">0</span><input type="button" value="+"></span></td>
        <td class="tdfour"><span>￥：</span><span class="unit">500</span></td>
        <td class="tdfive"><span>小計：</span><span class="subtal">0</span></td>
        <td class="tdsix"><button class="del">削除</button></td>
    </tr>
    <tr>
        <td class="tdone xuhao"><img src="img/img4.jpg" width="80px"/></td>
        <td class="tdtwo">阿蘇ミルクチーズプリン</td>
        <td class="tdthree"><span class="jiajie"><input type="button" value="-"><span class="num">0</span><input type="button" value="+"></span></td>
        <td class="tdfour"><span>￥：</span><span class="unit">400</span></td>
        <td class="tdfive"><span>小計：</span><span class="subtal">0</span></td>
        <td class="tdsix"><button class="del">削除</button></td>
    </tr>
    <tr class="trclass">
        <td class="tdone xuhao"><img src="img/img5.jpg" width="80px"/></td>
        <td class="tdtwo">果物や野菜のもっちー大福</td>
        <td class="tdthree"><span class="jiajie"><input type="button" value="-"><span class="num">0</span><input type="button" value="+"></span></td>
        <td class="tdfour"><span>￥：</span><span class="unit">399</span></td>
        <td class="tdfive"><span>小計：</span><span class="subtal">0</span></td>
        <td class="tdsix"><button class="del">削除</button></td>
    </tr>
    <tr class="trclass">
        <td class="tdone xuhao"><img src="img/img6.jpg" width="80px"/></td>
        <td class="tdtwo">馬刺しソフト燻製</td>
        <td class="tdthree"><span class="jiajie"><input type="button" value="-"><span class="num">0</span><input type="button" value="+"></span></td>
        <td class="tdfour"><span>￥：</span><span class="unit">1200</span></td>
        <td class="tdfive"><span>小計：</span><span class="subtal">0</span></td>
        <td class="tdsix"><button class="del">削除</button></td>
    </tr>
    <tr class="trclass">
        <td class="tdone xuhao"><img src="img/img7.jpg" width="80px"/></td>
        <td class="tdtwo">天空のしずく</td>
        <td class="tdthree"><span class="jiajie"><input type="button" value="-"><span class="num">0</span><input type="button" value="+"></span></td>
        <td class="tdfour"><span>￥：</span><span class="unit">899</span></td>
        <td class="tdfive"><span>小計：</span><span class="subtal">0</span></td>
        <td class="tdsix"><button class="del">削除</button></td>
    </tr>
    <tr><td   colspan="6"; class="talast"><span>商品は <span class="goods_num">0</span> 点; 合計金額：￥ <span class="pricetal">0</span></td></tr>
    </tbody>
</table>
</body>
</html>