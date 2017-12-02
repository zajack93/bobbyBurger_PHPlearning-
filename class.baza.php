<?php 
/*
* Klasa bazy danych
*/

class Baza {
	/* właściwosci klasy*/

	const DB_HOST = 'localhost';
	const DB_UZYTKOWNIK = 'root';
	const DB_HASLO = '';
	const DB_NAZWA = 'bar';

	public $klient;


	/*metody klasy - zwraca obiket PozycjaZamowienia na podstawie id i liczby
	* return PozycjaZamowienia
	*/

	// KONSTRUKTOR klasy

	function __construct() {
		$this->polacz();
	}

	/* Nawiązuje połączenie  z bazą danych */

	public function polacz() {
		if (!$this->klient) //sprawdzam, czy obiekt istnieje, unikam przez to wielokrotnego łączenia z baza
		{
			@$this->klient = new mysqli (	//tworzę baze dla obiektu klient
				self::DB_HOST,
				self::DB_UZYTKOWNIK,
				self::DB_HASLO,
				self::DB_NAZWA

				);

			if ($this->klient->connect_error) {
				throw new WyjatekBazy("Brak połączenia z bazą danych!");
				
			}

			$this->klient->set_charset('utf8');
		}

		return true;
	}

	/*metody klasy - zwraca obiket PozycjaZamowienia na podstawie id i liczby
	* return PozycjaZamowienia
	*/

	public function pozycjaZamowienia() {
		//łącze z bazą do pobrania danych
		//stosuje metode prepare, umozliwającą zastosowanie jezyka SQL do połączenia z baza

		$this->polacz();
		$zapytanie = $this->klient->prepare('SELECT nazwa, cena FROM tDania WHERE id = ?');
		//metoda prepare zwraca specjalny obiekt typu mysqli, na którym moge wywolac inne metody

		$zapytanie->bind_param('i', $id);  //metoda bind_param pozwala wstawic wartosc w miejsce  "?"

		$zapytanie->execute();
		$zapytanie->bind_result($nazwa, $cena);
		$zapytanie->fetch();

		//wynik zapisze się w zmiennych nazwa i cena, 
		// stanie sie to tylko poprzez wywołanie metody fetch 

		return new PozycjaZamowienia($nazwa, $cena, $liczba, $id); 
		 /*tworzy obiekt POzycjaZamowienia na podstawie id dania i liczby porcji*/
	}

	/*
	* zapisuje zamowienie w bazie
	*/

	public function zarejestrujZamowienie (Zamowienie $zamowienie) {
		$this->polacz();
		$sql = 'INSERT INTO tZamowienia (adres, odleglosc, rabat) VALUES (?, ?, ?)';
		$zapytanie = $this->klient->prepare($sql); //przygotowuje zapytanie


		$adres = $zamowienie->getAdresDostawy();
		$odleglosc = $zamowienie->getOdleglosc();
		$rabat = $zamowienie->getRabat();


		$zapytanie->bind_param('sdd', $adres, $odleglosc, $rabat); //dowiazuje paramedtry - pierwszy argument - 
		//warotsc lancuchowa, ktora ma tyle parametrow ile znakow pierwszy parametr sdd - string, double, double
		$zapytanie->execute(); //wykonanie


		//zapisanie w tabeli tZamowieniaDania inofmarcje o tym : co zamoiono i w jakich ilosciach

		if ($zapytanie->affected_rows ==1) { //zawiera info - ile rekordow zostalo edytowane
			$idZamowienia = $zapytanie->insert_id; //zawieta id ostatnio wstawionego rekordu w bazie

			$sql = 'INSERT INTO tZamowieniaDania (id_zamowienia, id_dania, liczba) VALUES (?, ?, ?)';
			$zapytanie = $this->klient->prepare($sql); //przygotowuje zapytanie

			$pozycje = $zamowienie->getPozycje();


			foreach ($pozycje as $pozycja){

				$idDania = $pozycja->getId();
				$liczba = $pozycja->getLiczba();  //z pozycjazamowienia klasy

				$zapytanie->bind_param('iii', $idZamowienia, $idDania, $liczba);
				$zapytanie->execute();
			}
		}
	}


}


?>