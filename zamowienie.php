<?php  
require_once 'class.zamowienie.php';
require_once 'class.danie.php';
require_once 'class.pozycjazamowienia.php';

$danie = new Danie("burger", 12.5);
echo "{$danie->getNazwa()} ...<br>";

$pozycja = new PozycjaZamowienia("cieciorex", 15.20, 3);
echo "{$pozycja->getNazwa()} ... <br>";


$biezaceZamowienie = new Zamowienie();

$noweZamowienie = new Zamowienie();

echo "Odleglosc wynosi $biezaceZamowienie->odleglosc km <br>";

$biezaceZamowienie->odleglosc =27;
echo "Odleglosc wynosi $biezaceZamowienie->odleglosc km lalalala <br>";

echo "Koszt transportu wynosi {$biezaceZamowienie->obliczTransport()} zł <br>";

// $biezaceZamowienie->dodajPozycje("burger");

$kod = <<<'EOC'


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<ul>
	<li><a href="">Item1</a></li>
	<li><a href="">Item2</a></li>
	<li><a href="">Item3</a></li>
	<li><a href="">Item4</a></li>
</ul>
	
</body>
</html>

EOC;

echo $kod;
?>