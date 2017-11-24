<?php 
/*
*Klasa
*/

class Zamowienie {
	// właściwości klasy

	private $_id;
	public $adresDostawy;
	public $odleglosc = 3;
	private $_pozycje = array();

	/*metody - funkcje, ktore maja dostep do wszystkich wlasciwosci klasy i moga je przetwrzac

	* oblicza koszt transportu
	* @return float
	*/

	/* publiczne metody dostepowe - get, set
	pozwalają odczytać właściwość lub odczytać jej wartość - w metodach tych do obiektu odwołuje się za pomocą $this->$param*/

	public function obliczTransport() {
		$cenaKm =2; //cena za km
		return $this->odleglosc * $cenaKm;
	}

	/***
	** Zwraca prywatną własciwość _id
	* retutn integer
	*/

	public function getId() {
		return $this->_id;
	}

	/*
	*Ustawia wcześniej zwrócona przez get prywatną właściwość _id
	* @param type id
	*/

	public function setId($id) {
		$this->_id = $id;

	}
	/*
	* zwraca prywatna wlasciwosc _property
	* @return Danie
	*/

	public function pobierzPozycja($index) {
		return $this->_pozycje[$index];
	}

	/*
	* Dodaje danie do zamowienia
	*/

	public function dodajPozycje(Danie $danie){ 
		$this->_pozycje[] = $danie;

	}
}
?>