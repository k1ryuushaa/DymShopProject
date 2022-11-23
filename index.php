<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DymShop</title>
    <link href="styles.css" rel="stylesheet">
  </head>
<body>
  <?php include('connection.php');?>
  <div class="navbar">
    <b>Dymshop</b>
    <div class="navbar_panel">
    <button id="catalogButton">Каталог</button><button id="KorzinaButton">Корзина</button>
    <input type="text" class="searchBox"><button id="searchButton">Искать</button>
    <button id="AuthButton">Войти</button>
    </div>
    <div class="menu_button">
      <button id="menuBtn" onclick="dropMenu()">≡</button>
    </div>
    <div class="drop_menu" id="dropmenu">
      <input type="text" class="searchBox"><button id="searchButton">Искать</button>
      <button>Каталог</button>
      <button>Корзина</button>
      <button>Войти</button>
    </div>
  </div>
  <div class="content">
  <div class="modal" style="display:none;">
    <div class="notifi-modal">
        <button id="closeBtn">✕</button>
        <b style="text-align: center;margin: 20px 0 0 0;">Для доступа к сайту необходимо подтвердить возраст</b>
        <span>Информация на данном сайте не является рекламой, предназначена для ограниченного круга лиц, 
            а именно для совершеннолетних потребителей табачной продукции, для предоставления им достоверной 
            информации об основных потребительских свойствах и качественных характеристик табачной продукции 
            и аксессуарах для курения (ст.10 Закона «О защите прав Потребителя»). Лицам, не достигшим совершеннолетия, 
            пользование Сайтом запрещено (ст. 20 ФЗ №15 «Об охране здоровья граждан»).
                Нажимая «Мне есть 18 лет», вы даете согласие на обработку персональных данных и соглашаетесь 
                с политикой конфиденциальности</span>
        <table>
            <tr>
                <td><button id="mne18" style="width: 100%;">Мне есть 18</button></td>
                <td><button id="mnenet18" style="width: 100%;">Мне нет 18</button></td>
            </tr>
        </table>
    </div>
    <div class="overlay"></div>
  </div>
    <!-- <div id="notification">
        ✔Добавлено успешно
    </div> -->
    <div class="carouselContainer">
        <input type="radio" name="position" checked="true" />
        <input type="radio" name="position" />
        <input type="radio" name="position" />
        <input type="radio" name="position" />
        <input type="radio" name="position" />
        <main id="carousel">
          <div class="item"></div>
          <div class="item"></div>
          <div class="item"></div>
          <div class="item"></div>
          <div class="item"></div>
          <main>
    </div>
    <div class="categories" style="display: none;">
      <?php $query = mysqli_query($link,"Select CategoryName from categories");
        while($rows=mysqli_fetch_array($query)){?>
      <div class="category">
          <b><?php echo $rows['CategoryName'];?></b>
      </div>
      <?php };?>
    </div>
    <div class="products">
        <?php $query = mysqli_query($link,"Select Article,ProductPhoto,ProductCost,ProductName from products");
        while($rows=mysqli_fetch_array($query)){?>
        <div class="product">
        <button style="background:transparent;border:0px;width:100%;height:100%;" type="submit" name="product" value="<?php echo $rows['Article'];?>">
        <img src="PROJPIC/<?php echo $rows['ProductPhoto'];?>">
        <b class="productName" style="font-size: 20px;"><?php echo $rows['ProductName'];?></b>
        <span class="productCost" style="font-size: 20px;"><?php echo $rows['ProductCost'];?> руб.</span>
        </div>
        </button>
        <?php };?>
    </div>
  </div>
</body>
<script type="text/javascript" src="main.js"></script>
</html>