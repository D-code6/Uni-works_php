<?php
$sayı1=20;
$sayı2=5;
// işlemler>>> toplama-çıkarma-çarpma-bölme
$işlem="çarpma";//çarpma işlemini seçtik
switch ($işlem)
{
case "toplama"; // işlem toplama olursa
$sonuç= $sayı1+$sayı2; // iki sayıyı topla
echo "tomlam=".$sonuç; // sonucu yaz
break;

case "çıkarma"; // işlem çıkartma olursa
$sonuç= $sayı-$sayı2; // iki sayıyı çıkart
echo "fark=".$sonuç; // sonucu yaz
break;

case "çarpma";
$sonuç= $sayı1*$sayı2;
echo "çarpım=".$sonuç;
break;

case "bölme";
$sonuç= $sayı1/$sayı2;
echo "bölüm=".$sonuç;
break;

default: // işlem 4 işlem dışında ise
echo "yazdığınız işlem geçersiz";
}
//diğer örnek for döngüsü
for($i=1;$i<=8;$i++) //1 den başlayarak 8 e kadar birer birer artırır.
{
echo $i."."."merhaba php";
echo "<br>";
}

//diğer örnek

for($i=1;$i<=10;$i++)
{
    echo "<hr color=red width=900";
    echo "<br>";
}

//diğer örnek tablo oluşturma
$satırsayısı=4;
$sütünsayısı=3;
echo "<table border=1 bordercolor=blue>"; // tablo oluşturduk
for ($i=1;$i<=$satırsayısı;$i++) // satır için döngü
{
    echo "<tr>"; // satır ekleniyor

    for ($k=1;$k<=$sütünsayısı;$k++) // sütün için döngü
    {
        echo "<td><img src=logo.jpg.jpg></td>"; // sütünlar ve resim ekleniyor
    } 

    echo "</tr>"; // açılan satır kapatılıyor 
}

echo "</table>" // tabloyu kapat 

?>
