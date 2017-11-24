<?php 
/*
* Klasa pozycji zamowienia
*/


class PozycjaZamowienia extends Danie
{
	/* własciwosci klasy */
	private $_liczba;

	/* konstruktor klasy */

	function __construct($nazwa, $cena, $liczba)
	{
		parent::__construct($nazwa, $cena);
		$this->_liczba = $liczba;
	}

	public function getCena() {
		return $this->getCena() * $this->_liczba;

		//return $this->_cena * $this->_liczba; dla protected _cena w klasie Danie 
	}
}

 ?>