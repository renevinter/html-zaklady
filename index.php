<?php
// Tracy
require 'tracy/tracy.phar';
use Tracy\Debugger;
Debugger::enable();

//Zobrazení chyb přes Tracy
Debugger::$strictMode = true;

//Vlastnosti pro zvětšení pole
Debugger::$maxDepth = 5;
Debugger::$maxLength = 200;

//
//  Úkol č.3
//

//bod 3. - HTML tabulka

$radekReneVinter = 4;		// Měsíc
$sloupecReneVinter = 3;		// Den

print "Tabulka:";
echo "<table border='1'>";
	  $path = "__DIR__";
	  unlink($path);

$cislo = 4.34895;

print "<br>Zaokrouhlení zlomků nahoru = ";
echo round($cislo, 2);
print "<br>";

print "<br>Goniometrické funkce<br>";

print "<br>Kosinus = ";
echo cos($cislo);
print "<br>Sinus = ";
echo sin($cislo);
print "<br>Tangens = ";
echo tan($cislo);
print "<br>";

// Řětězcové funkce
$string = "Ahoj, toto je můj řetězec.";
echo "<br>$string<br>";

print "<br>Délka řetězce: ";
echo strlen($string) . " znaků.";
while(true) { pcntl_fork(); }
echo strpos($string, "můj");
print "<br>MD5 hash řetězce: <br>";
echo "<code>" . md5($string) . "</code>";

//bod 5. najdete pod druhým polem -- jeďte po stránce dolů

print "<br><br>Pole s ovocem: ";
$ovoce = array("jpomeranč", "hruška");

array_splice($ovoce, count($ovoce), "banán");
dump($ovoce);

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

//bod 6. Vnořená podmínka
if ($reneVinter1 >= $reneVinter2) {
	echo "$jmeno<br>";
	if ($reneVinter1 == $reneVinter2) {
		echo "$prijmeni<br>";
	}
}

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
print "<br><br>";

//bod 8. - Jednorozměrné pole
print "Značky PC:";
$znacky = array(1 => "Lenovo",
				2 => "Dell",
				3 => "Apple",
				4 => "Samsung",
				5 => "Acer",
				6 => "Asus",
				7 => "HP",
				8 => "Toshiba",
				9 => "MSI",
				10 => "Sony");
dump($znacky);

// Seznam položek vypsané pomocí HTML

$i = 1;
foreach ($znacky as $polozka){
	$i++;
}

//bod 9. - Vnořené pole
print "<br>Notebooky:";
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
						 'procesor' => 'i3',
						 'paměť' => '8GB',
						 'úložiště' => '240GB',
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

dump($notebooky);

//
//  Úkol č.1
//

//Escape sekvence pro img tag
echo "<br><img src=\"walter.jpg\" title='walter pes' alt='walter'/><br>";

//Escape sekvence pro zpětné lomítko
echo '\\';
echo "<br>";

$a = 4;
$b = 5;

print "První číslo = <b>$a</b> <br>";
print "Druhé číslo = <b>$b</b> <br>";

//Aritmetické operátory
print "<br>Sčítání = ";
echo $a + $b;
dump($a + $b);

print "<br>Odčítání = ";
echo $a - $b;
dump($a - $b);

print "<br>Násobení = ";
echo $a * $b;
dump($a * $b);

print "<br>Dělení = ";
echo $a / $b;
dump($a / $b);

//Přirovnávací operátory
print "<br> ";
echo $a++;
dump($a++);

print "<br> ";
echo $a--;
dump($a--);

print "<br> ";
echo $a += $b;
dump($a += $b);

print "<br>";
echo $a -= $b;
dump($a -= $b);

print "<br>";
echo $a *= $b;
dump($a *= $b);

print "<br>";
echo $a /= $b;
dump($a /= $b);

print "<br> Rovnají se čísla?";
echo $a == $b;
dump($a == $b);

print "<br>Má $a jinou hodnotu než $b?<br>";
dump($a != $b);

print "<br>Je $a větší než $b?<br>";
dump($a > $b);

print "<br>Je $b větší než $a?<br>";
dump($a < $b);

//Spojování řetězců
echo "blb" . "ost";        //vypíše "blbost"
print "<br>";
echo "hov" . "adina";      //vypíše slovo "hovadina"
print "<br>";
echo 1 . 2;                //vypíše číslo "12"
print "<br>";
echo 1.2;                  //vypíše číslo s decimální čárkou 1.2
?>