<?php
//diziler
$günler=array ("pazartesi","salı","çarşamba","perşembe","cuma","cumartesi","pazar");
echo $günler[2]; // index numarası 2 olanı yazdır
echo "<hr color= red>";
echo "<br>";

// for, while,do-while
for ($i=0;$i<count($günler);$i++)
{
echo $günler[$i];
echo "<br>";
}
echo "<hr color= red>";
echo "<br>";
$sayaç=0;
while ($sayaç<count($günler))
{
echo $günler[$sayaç];
$sayaç++;
echo"<br>";
}
echo "<hr color= red>";
echo "<br>";
$adım=0;
do
{ echo $günler[$adım];
    echo "<br>";
    $adım++;
}
while ($adım<count($günler))

?> 

