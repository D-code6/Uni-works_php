<?php
$simdi=getdate(); //dönen bir dizidir
print_r($simdi); //dizideki bütün değerleri yaz
echo "<hr>";
echo "saniye :" ,$simdi ["seconds"] , "<br>";
echo "dakika :" ,$simdi ["minutes"] , "<br>";
echo "saat :" ,$simdi ["hours"] , "<br>";
echo "gün :" ,$simdi ["mday"] , "<br>";
echo "haftanın kaçıncı günü :" ,$simdi ["wday"] , "<br>";
echo "ay :" ,$simdi ["mon"] , "<br>";
echo "yıl :" ,$simdi ["year"] , "<br>";
echo "yılın kaçıncı günü :" ,$simdi ["yday"] , "<br>";
echo "haftanın hangi günü :" ,$simdi ["weekday"] , "<br>";
echo "yılın hangi ayı :" ,$simdi ["month"] , "<br>";


?>