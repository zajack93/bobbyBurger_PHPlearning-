<?php
require "funkcje.php";		//import pliku funkcje.php posiadajacy wywolywane funkcje

//zamowienia

$zamowienie = array(
 	1 => array(
 		"nazwa" => "burger Janush",
		"cena" => 5.9,
		"liczba" => 2,  	//liczba porcji
		"id" => 1 
		),
 	2 => array (
		"nazwa" => "burger Grażyna",
		"cena" => 12.9,
		"liczba" => 1,  	//liczba porcji
		"id" => 2 
		)
	);

// $danie1 = array (
// 	"nazwa" => "burger Janush",
// 	"cena" => 5.9,
// 	"liczba" => 2,  	//liczba porcji
// 	"id" => 1  
// 	);

// $danie2 = array();
// $danie2["nazwa"]= "burger Grażyna";
// $danie2["cena"]= 12.9;
// $danie2["liczba"] = 1;  	//liczba porcji
// $danie2["id"] = 2;


$zamowienieKod = '';

$liczbaRazem =0;
$koszt =0;

foreach ($zamowienie as $indeks => $danie) {
	$zamowienieKod .= stworzWiersz(
		$danie['nazwa'], 
		$danie['cena'], 
		$danie['liczba']
		); 
	$liczbaRazem +=$danie['liczba'];		//suma porcji do zamowien
	$koszt += $danie['liczba']*$danie['cena'];
}

//$liczbaRazem = $liczba1 + $liczba2;   //suma porcji do zamowien

//transport 

$odleglosc = 1.12;
$cenaKm = 2;

//jeśli zamowie danie z id1 i id2 to promocja transport gratis
if (array_key_exists(2, $zamowienie) && array_key_exists(1, $zamowienie)) {
	// transport gratis
	$cenaKm = 0;
}



/*oblicza rabat w zalezności od zamowionych porcji*/
switch ($liczbaRazem) {
	case 0:
	case 1: 
	case 2:
		$rabat = 0; 
		break;
	case 3:
		$rabat =0.1;
		break;
	default:
		$rabat = 0.2;
		break;
}

// odlicza rabat dla >=3 porcji
$koszt += ($odleglosc * $cenaKm); 
$kosztBrutto = $koszt;
$koszt *= 1- $rabat;

echo formatujKwote($koszt), " za zamowienie ";

	$kosztTransportu = $odleglosc * $cenaKm;

//wyświetlanie w panelu użytkownika informacji o promocji na transport, w zaleznosci od wybranych produktow
if ($cenaKm > 0 ){

	$infoPromocja = "Niestety nie skorzystałeś z promocji transport za darmo - sorry :( "; 
}
else {

	$infoPromocja = "Promocja transport za darmo :) "; 
}

//tworzę heredoc, aby móc dodawać łańcóch znaków, np html-a do skryptu php, EOC to nazwa identyfikatora i musi być w 
//osobnej linii na początko i końcu wiersza

// $kod = <<<EOC 

// EOC;
// echo $kod;

?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta http-equiv="content-type" content="text/html" charset="utf-8">
 	<title>Bar</title>
 	<link rel="stylesheet" type="text/css" href="css/style.css">
 </head>
 <body>
	<h1>Witamy w Bobby Burgerze!</h1>
	<table>
		<tr>
			<th> Nazwa </th>
			<th> Ilość </th>
			<th> Cena za sztuke</th>
		</tr>

				
		
		<!-- wywołanie funckji w php, ktora tworzy wiersze w tabeli html i wyswietla sie  w interfejsie uzytkownika -->
		<!-- wywolywana jest z pliku funkcje.php za pomoca require "funckje.php" na poczatku skryptu -->
		<?php 
			echo $zamowienieKod;
			echo stworzWiersz("cheatMonday - BBurger", 27, 1);

			echo stworzWiersz("transport", $kosztTransportu, "-");
			echo stworzWiersz("rabat", (-1 * $kosztBrutto * $rabat), "-");
			echo stworzWiersz("Do zapłaty: ", $koszt, "-");

		 ?>
		
	</table> 
	<h2> Dziekujemy! </h2>

	<?php echo $infoPromocja; ?>


 
 </body>
 </html>

