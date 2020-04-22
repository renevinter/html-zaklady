<?php

//
//  Úkol č.2
//

// bod 3. - Proměnné

$reneVinter1 = 1;
$reneVinter2 = 1;

// bod 4. Jednoduchá podmínka
if (true) {
    echo "René Vinter";
    echo "<br><br>";
}

// bod 5. Podmínka s else
$jmeno = "René";
$prijmeni = "Vinter";

if ($reneVinter1 > $reneVinter2) {
    echo $jmeno;
} else {
    echo $prijmeni;
}
echo "<br><br>";

//bod 7. - Switch a case
print "Magický switch odpověděl: ";
switch ($reneVinter1) {
    case 0:
        echo "tohle nebude platit";
        break;
    case 1:
        echo "obama moment";
        break;
    case 2:
        echo "tohle taky nebude platit";
        break;
    case 3:
        echo "taky nic";
        break;
    case 4:
        echo "nope";
        break;
    case 5:
        echo "taky ne";
        break;
    default:
        echo "když žádný case nebude platit, tak se vybere default";
        break;
}
echo "<br><br>";

//bod 8. - Jednorozměrné pole
print "Značky PC:";
$znacky = array(1 => "lenovo",
                  2 => "dell",
                  3 => "apple",
                  4 => "samsung",
                  5 => "acer",
                  6 => "asus",
                  7 => "hp",
                  8 => "toshiba",
                  9 => "msi",
                  10 => "sony");
var_dump($znacky);

//bod 9. - Vnořené pole
print "Notebooky:";
$notebooky = array(
    "1" => array(
        "2" => array(
            "3" => array('značka' => 'Lenovo',
                         'procesor' => 'i5',
                         'paměť' => '8GB RAM',
                         'úložiště' => '500GB',
                         'cena' => 9990),
                   array('značka' => 'Dell',
                    	 'procesor' => 'i3',
                    	 'paměť' => '4GB RAM',
                    	 'úložiště' => '240GB',
                    	 'cena' => 4990),
                   array('značka' => 'Apple',
                    	 'procesor' => 'i5',
                    	 'paměť' => '8GB RAM',
                    	 'úložiště' => '500GB',
                    	 'cena' => 27990),
                   array('značka' => 'Samsung',
			 'procesor' => 'i5',
			 'paměť' => '4GB RAM',
			 'úložiště' => '500GB',
			 'cena' => 8490),
                   array('značka' => 'Acer',
			 'procesor' => 'M',
			 'paměť' => 'bruh',
			 'úložiště' => 'asus',
			 'cena' => 7890),
                   array('značka' => 'HP',
			 'procesor' => 'Ryzen 5',
			 'paměť' => '8GB RAM',
			 'úložiště' => '1TB',
			 'cena' => 10999),
                   array('značka' => 'Toshiba',
			 'procesor' => 'i5',
			 'paměť' => '8GB RAM',
			 'úložiště' => '240GB',
			 'cena' => 7990),
                   array('značka' => 'MSI',
			 'procesor' => 'i9',
			 'paměť' => '32GB RAM',
			 'úložiště' => '2TB',
			 'cena' => 48990),
                   array('značka' => 'Sony',
			 'procesor' => 'Ryzen 5',
			 'paměť' => '16GB RAM',
			 'úložiště' => '1TB',
			 'cena' => 14990),
        )
    )
);

var_dump($notebooky[1]);

//
//  Úkol č.1
//

echo "<br><img src=\"walter.jpg\" title='walter pes' alt='walter'/><br>"; //Escape sekvence pro img tag
echo '\\';
echo "<br>";

$a = 4;
$b = 5;

print "První číslo = <b>$a</b> <br>";
print "Druhé číslo = <b>$b</b> <br>";

//Aritmetické operátory

print "<br>Sčítání = ";
echo $a+$b;
var_dump($a+$b);

print "<br>Odčítání = ";
echo $a-$b;
var_dump($a-$b);

print "<br>Násobení = ";
echo $a*$b;
var_dump($a*$b);

print "<br>Dělení = ";
echo $a/$b;
var_dump($a/$b);

//Přirovnávací operátory

print "<br> ";
echo $a++;
var_dump($a++);

print "<br> ";
echo $a--;
var_dump($a--);

print "<br> ";
echo $a += $b;
var_dump($a+=$b);

print "<br>";
echo $a -= $b;
var_dump($a-=$b);

print "<br>";
echo $a *= $b;
var_dump($a*=$b);

print "<br>";
echo $a /= $b;
var_dump($a/=$b);

print "<br> Rovnají se čísla?";
echo $a==$b;
var_dump($a==$b);

print "<br>Má $a jinou hodnotu než $b?<br>";
var_dump($a!=$b);

print "<br>Je $a větší než $b?<br>";
var_dump($a>$b);

print "<br>Je $b větší než $a?<br>";
var_dump($a<$b);

//Spojování řetězců

echo "blb"."ost";          //vypíše "blbost"
echo "<br>";
echo "hov" . "adina";      //vypíše slovo "hovadina"
echo "<br>";
echo 1 . 2;                //vypíše číslo "12"
echo "<br>";
echo 1.2;                  //vypíše číslo s decimální čárkou 1.2

?>
