<?php 
/*
* Klasa pozycji zamowienia
*/

//require 'funkcje.php';

class PozycjaZamowienia extends Danie
{
	/* własciwosci klasy */
	private $_liczba;

	/* konstruktor klasy */

	function __construct($nazwa, $cena, $liczba, $id)
	{
		parent::__construct($nazwa, $cena, $id);
		$this->_liczba = $liczba;
	}

	/*
	* generuje kod HTML
	*
	*/

	public function generujKod() {
		$kod = Narzedzia::stworzWiersz(
			$this->getNazwa(), 
			$this->getCenaJedn(),
			$this->getLiczba(),

			);
		return $kod;
	}




	/* 
	* oblicza cenę
	*/

	public function getCenaJedn() {
		return $this->_cena * $this->_liczba;

		//return $this->_cena * $this->_liczba; dla protected _cena w klasie Danie 
	}
}

 ?>