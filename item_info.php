<div class="item-info" style="display:none">
        <div class="box1">
            <div id="closeBtnItemInfo">✕</div>
            <h1><?php echo $prod['ProductName'];?></h1>
        </div>
        <div class="box2">
            <img src="PROJPIC/<?php echo $prod['ProductPhoto'];?>">
        </div>
        <div class="box3">
            <b><?php echo $prod['ProductCost'];?> р.</b>
            <input type="text" name="count" id="Count" placeholder=
            "Количество">
            <button>Добавить в корзину</button>
        </div>
        <div class="box4"><?php echo $prod['ProductDescription'];?>
        </div>
    </div>