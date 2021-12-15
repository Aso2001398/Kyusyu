<?php
session_start();
//ローカルライブラリに接続
require_once '../method.php';

//DB接続
$pdo = DB_connect();
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8"/>
  <title>ECサイト</title>
  <link rel="stylesheet" href="css/ecSite.css">
  <link rel="stylesheet" href="css/shohin.css">
    <link rel="stylesheet" href="../syop/css/backbutton.css">
</head>

<body>
<div class="header">

    <button type="button"  class="original" onclick=history.back()>←戻る</button>
  <!--<a href="" class="btn btn-border">戻る</a>-->

  <div class="img">
    <img src="img/logo1.png" alt="" title="九州旅行記" width="150" height="50" >
  </div>
  <div class="search">
    <form action="../syop/search.php" method="post">
      <input type="search" style="width:300px;height: 50px;" id="search_1" placeholder="キーワードを入力">
      <input type="submit" name="submit" id="search_2" value="検索">
    </form>
  </div>
  <div class="img2">
    <a href="../login/kaiin-login.php" ><img src="img/login.png" alt="" title="ログインアイコン" width="80" height="35" ></a>
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
<main>
  <div class="localNavigation">
    <p>商品カテゴリ↓</p>
    <div class="kategori">
      <ul>
        <!--<li><a class="active" href="#home">Home</a></li>-->
          <li><a href="../kannkouti/syouhinn.php">福岡県</a></li>
          <li><a href="../kannkouti/syouhinn2.php">佐賀県</a></li>
          <li><a href="../kannkouti/syouhinn3.php">長崎県</a></li>
          <li><a href="../kannkouti/syouhinn4.php">熊本県</a></li>
          <li><a href="../kannkouti/syouhinn5.php">大分県</a></li>
          <li><a href="../kannkouti/syouhinn6.php">宮崎県</a></li>
          <li><a href="../kannkouti/syouhinn7.php">鹿児島県</a></li>
          <li><a href="../kannkouti/syouhinn8.php">沖縄県</a></li>

      </ul>
      <p>観光地↓</p>
      <ul>
        <!--<li><a class="active" href="#home">Home</a></li>-->
          <li><a href="../kannkouti/hukuoka.php">福岡県</a></li>
          <li><a href="../kannkouti/saga.php">佐賀県</a></li>
          <li><a href="../kannkouti/nagasaki.php">長崎県</a></li>
          <li><a href="../kannkouti/kumamoto.php">熊本県</a></li>
          <li><a href="../kannkouti/ooita.php">大分県</a></li>
          <li><a href="../kannkouti/miyazaki.php">宮崎県</a></li>
          <li><a href="../kannkouti/kagosima.php">鹿児島県</a></li>
          <li><a href="../kannkouti/okinawa.php">沖縄県</a></li>

      </ul>
    </div>
  </div>
  <div class="goods_box">
      <?php
      $i=0;
      $size = 'height="100vh"';
      $items=$pdo -> query('SELECT * FROM item order by item_id desc');
      foreach ($items as $item){
          $data=$item['item_data'];
          if($item['delete_check']){
              continue;
          }
          if($i==0){
              echo <<<EOM
                    <div class="new_goods">
                            
                            <p class="sinchaku">新着商品</p>　
                            <form action="../syop/syohinsyousai.php" class="form2" method="post">
                                <a href="javascript:form1[{$i}].submit()">
                                <img src="../admin_kari/img/item/{$item['image_name']}"class="NewGoods_img" width="400" height="150" >
                                <div class="NewGoodsDate"><p>
                                    <p class="name">商品名：{$item['item_name']}</p>
                                    <p class="item_date" >{$data}</p>
                                    <p class="price">価格：&yen;{$item['price']}</p>
                                    </p>
                                </div>
                                <input type="hidden" name="item_name" value="{$item['item_name']}">  
                            </form>
                            <a href="" >
                            <img src="item_img/Fukuoka_Tsurunoko.img" alt="" title="福岡鶴乃子" class="NewGoods_img" width="400" height="150" >
                            <div class="NewGoodsDate"><p>
                                <p class="name">商品名：</p><a href=""></a>
                                <p>  <!--商品説明--></p>
                                <p class="price">価格：</p>
                                </p>
                            </div>
                    </div>
               EOM;
          }else if($i==3){
              echo '<li></li>';
          }
          echo <<<EOM
                        <li> <!-- [▼] アイテム -->
                            <form action="../syop/syohinsyousai.php" name="form1" method="post">   
                                <a href="javascript:form1[{$i}].submit()">
                                    <img src="../admin_kari/img/item/{$item['image_name']}" {$size} class="image">
                                    <p class="name">{$item['item_name']}</p>
                                    <p class="item_date" >{$data}</p>
                                    <p class="price">&yen;{$item['price']}</p>
                                    
                                </a>  
                                <input type="hidden" name="item_name" value="{$item['item_name']}">
                            </form>
                         </li> <!-- [▲] アイテム -->
                    EOM;
          $i++;
      }
      ?>
    <div class="new_goods">

        <p class="sinchaku">新着商品</p>　
        <a href="" ><img src="item_img/Fukuoka_Tsurunoko.img" alt="" title="福岡鶴乃子" class="NewGoods_img" width="400" height="150" ></a>
            <div class="NewGoodsDate"><p>
                  <p class="name">商品名：</p><a href=""></a>
                  <p>  <!--商品説明--></p>
                  <p class="price">価格：</p>
                  </p>
            </div>
    </div>

    <div class="item">
        <div class="float_box">
          <ul>
            <li> <!-- [▼] アイテム -->
              <a href="../syop/syohinsyousai.php">
                <img src="item_img/Fukuoka_Tsurunoko.img" class="image">
                <p class="name">TURUNOKO</p>
                <p class="item_date" >おいしいおいしいおいしい</p>
                <p class="price">&yen;1,980</p>
              </a>
            </li> <!-- [▲] アイテム -->
            <li> <!-- [▼] アイテム -->
              <a href="../syop/syohinsyousai.php">
                <img src="item_img/Fukuoka_Tsurunoko.img" class="image">
                <p class="name">TURUNOKO</p>
                <p class="item_date" >おいしいおいしいおいしい</p>
                <p class="price">&yen;1,980</p>
              </a>
            </li> <!-- [▲] アイテム -->
            <li> <!-- [▼] アイテム -->
              <a href="../syop/syohinsyousai.php">
                <img src="item_img/Fukuoka_Tsurunoko.img" class="image">
                <p class="name">TURUNOKO</p>
                <p class="item_date" >おいしいおいしいおいしい</p>
                <p class="price">&yen;1,980</p>
              </a>
            </li> <!-- [▲] アイテム -->
            <li> <!-- [▼] アイテム -->
              <!--<a href="#">
                <img src="item_img/Fukuoka_Tsurunoko.img" class="image">
                <p class="name">TURUNOKO</p>
                <p class="item_date" >おいしいおいしいおいしい</p>
                <p class="price">&yen;1,980</p>
              </a>-->
            </li> <!-- [▲] アイテム -->
            <li> <!-- [▼] アイテム -->
              <a href="../syop/syohinsyousai.php">
                <img src="item_img/Fukuoka_Tsurunoko.img" class="image">
                <p class="name">TURUNOKO</p>
                <p class="item_date" >おいしいおいしいおいしい</p>
                <p class="price">&yen;1,980</p>
              </a>
            </li> <!-- [▲] アイテム -->
            <li> <!-- [▼] アイテム -->
              <a href="../syop/syohinsyousai.php">
                <img src="item_img/Fukuoka_Tsurunoko.img" class="image">
                <p class="name">TURUNOKO</p>
                <p class="item_date" >おいしいおいしいおいしい</p>
                <p class="price">&yen;1,980</p>
              </a>
            </li> <!-- [▲] アイテム -->
            <li> <!-- [▼] アイテム -->
              <a href="../syop/syohinsyousai.php">
                <img src="item_img/Fukuoka_Tsurunoko.img" class="image">
                <p class="name">TURUNOKO</p>
                <p class="item_date" >おいしいおいしいおいしい</p>
                <p class="price">&yen;1,980</p>
              </a>
            </li> <!-- [▲] アイテム -->
          </ul>


        </div>
    </div>
  </div>
</body>
</html>