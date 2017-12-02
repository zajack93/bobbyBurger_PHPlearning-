<?php  
//magiczne stałe - informuje interpreter PHP o ścieżce, gdzie ma szukać dołączanych plików
set_include_path(get_include_path().PATH_SEPARATOR.__DIR__.DIRECTORY_SEPARATOR."narzedzia");
//echo get_include_path()."<br>";

require_once 'autoladowanie.php';

// require_once 'class.zamowienie.php';
// require_once 'class.danie.php';
// require_once 'class.pozycjazamowienia.php';
// require_once 'funkcje.php';
// require_once 'class.daniemenu.php';

/*echo "Twoja wersja PHP to ".PHP_VERSION."<br>";
echo "Pracujesz w systemie ".PHP_OS."<br>";

$pozycja = new PozycjaZamowienia("cieciorex", 15.20, 8, 90);
echo "{$pozycja->getNazwa()} ... <br>";
echo "cena: {$pozycja->getCena()} ... <br>";


$biezaceZamowienie = new Zamowienie();

$noweZamowienie = new Zamowienie();

echo "Odleglosc wynosi $biezaceZamowienie->odleglosc km <br>";

$biezaceZamowienie->odleglosc =27;
echo "Odleglosc wynosi $biezaceZamowienie->odleglosc km lalalala <br>";

echo "Koszt transportu wynosi {$biezaceZamowienie->obliczTransport()} zł <br>";
*/
// $biezaceZamowienie->dodajPozycje("burger");

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html" charset="UTF-8">
	<title>BBurger</title>
	<link rel="stylesheet" type="text/css" href="css/stylowanie.css"> 
</head>
<body>
	<h1> Złóż zamówienie </h1>
	<form method="post" action="index.php">
		<table>
			<tr>
				<th>Danie </th>
				<th>Cena zł</th>
				<th>Liczba </th>
			</tr>
			<tr>
				<td><label> Burger Janush </label></td>
				<td> 15.20 </td>
				<td> <input type="text" name="pozycja[10]" value=""></td>
			</tr>
			<tr>
				<td><label> Burger Grażyna</label></td>
				<td> 17.20 </td>
				<td> <input type="text" name="pozycja[11]" value=""></td>
			</tr>
			<tr>
				<td><label> Burger Chicken </label></td>
				<td> 29.90 </td>
				<td> <input type="text" name="pozycja[12]" value=""></td>
			</tr>
			<tr>
				<td><label> Burger Cheesee </label></td>
				<td> 11.50 </td>
				<td> <input type="text" name="pozycja[13]" value=""></td>
			</tr>
			<tr>
				<td><label> Burger Veggie </label></td>
				<td> 15.50 </td>
				<td> <input type="text" name="pozycja[14]" value=""></td>
			</tr>
		</table> <br>
		<div>
			<label for="name"> Adres dostawy: </label> <br />
			<input type="text" name="adress" class="adress" value="" placeholder="adres"> <br>
			<input type="submit" value="Submit">
		</div>
	</form>

	
</body>


</html>



