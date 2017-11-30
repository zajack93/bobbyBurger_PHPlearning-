<?php 
/*
* Klasa bazy danych
*/

class Baza {
	/* właściwosci klasy*/

	/*metody klasy - zwraca obiket PozycjaZamowienia na podstawie id i liczby
	* return PozycjaZamowienia
	*/

	public static function pozycjaZamowienia {
		switch ($id) {
			case 10:
				$nazwa = 'cieciorex';
				$cena = '15.9';
				break;
			case 11:
				$nazwa = 'buraczex';
				$cena = '21.9';
				break;
			case 15:
				$nazwa = 'tofex';
				$cena = '12.9';
				break;
			case 16:
				$nazwa = 'vegab';
				$cena = '19.9';
				break;
			case 17:
				$nazwa = 'jaglanex';
				$cena = '15.9';
				break;
		}

		return new PozycjaZamowienia($nazwa, $cena, $liczba, $id);
	}




}

 ?>