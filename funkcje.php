 <?php


/**
* Klasa zawiera funkcje, ktore  ulatwiaja 
* wyswietlanie wiersza rachunku klientowi
*/
class Narzedzia {
	
/*formatuję liczbę na kwote wyrażoną w złotówkach*/
	function formatujKwote($kwota, $symbol = " zł") {
		return number_format($kwota, 2, ",", " ").$symbol;

	}

	/*tworzy nowy wiersz wyświetlany w panelu klienta, przyjmuje 3 parametry (bo w wierszach 3 kolumny)
	 1 -nazwa [potrawy], 2- cena [formatowana w funkcji formatujKwote na zlotowki], 3- liczba, czyli ilość zamowionych porcji, a nie sztuk*/

	function stworzWiersz ($nazwa, $cena, $liczba) {
		$cena = self::formatujKwote($cena);

		$wiersz = "<tr>";
		$wiersz .="<td> ".$nazwa." </td>";
		$wiersz .="<td class=il> ".$liczba." </td>";
		$wiersz .="<td class=il> ".$cena." </td>";
		$wiersz .=" </tr>";

		return $wiersz;

	}
}

?>