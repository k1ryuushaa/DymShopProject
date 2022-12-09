<?php
$article=$_POST['product'];
$productquery=mysqli_query($link,"Select ProductDescription,ProductPhoto,ProductCost,ProductName from products where Article='$article'");
$product=mysqli_fetch_row($productquery);

echo '<div class=\'modal\'>';
echo ' <div class=\'item-info\'>';
echo    '<div class=\'box1\'>';
echo        '<div id=\'closeBtnItemInfo\' onclick=\'closeModal();\'>✕</div>';
echo        '<h1 id=\'infoPrdName\'>'.$product[3].'</h1>';
echo    '</div>';
echo    '<div class=\'box2\'>';
echo        '<img id=\'infoPrdPhoto\' src=\'PROJPIC/'.$product[1].'\'>';
echo   ' </div>';
echo    '<div class=\'box3\'>';
echo        '<b id=\'infoPrdCost\'>'.$product[2].'руб.</b>';
echo        '<input type=\'text\' name=\'count\' id=\'Count\' placeholder=';
echo        '\'Количество\'>';
echo        '<button>Добавить в корзину</button>';
echo    '</div>';
echo    '<div class=\'box4\' id=\'infoPrdDesc\'>'.$product[0].'';
echo    '</div>';
echo'</div>';
echo    '<div class=\'overlay\'></div>';
echo '</div>';
?>