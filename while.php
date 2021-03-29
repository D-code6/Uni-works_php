<?php

// while ile örnek

$c = 1;
while ($c<=10)
{
    echo $c."."."merhaba php";
    echo "<br>";
    $c++;
}
// while ile alfabe

$alfabe="A"; // alfabe sayacımız
$sayaç= 1 ; // sayma sayacımız
while ($sayaç<=26) // sayma sayacı 26 oluncaya kadar
{ // işleme başla
    echo $alfabe."-"; //ilk alfabeyi yaz "-" işareti koy
    $sayaç++; // sayacı bir artır
    $alfabe++; // alfabenin sonraki harfine geç

}

?>