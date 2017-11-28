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
	private $_rabat =0;
	// const CENA_KM =2; //cena za km
	public static $cenaKm = 2; 
	//tworzę zmienną statyczną, aby w przypadku tworzenia promocji automatycznie zmienial sie ksyrpt na czas trwania promocji - nie mozliwe dla CONST

	/*metody - funkcje, ktore maja dostep do wszystkich wlasciwosci klasy i moga je przetwrzac

	* oblicza koszt transportu
	* @return float
	*/

	/* publiczne metody dostepowe - get, set
	pozwalają odczytać właściwość lub odczytać jej wartość - w metodach tych do obiektu odwołuje się za pomocą $this->$param*/

	public function obliczTransport() {
	//	$cenaKm =2; //cena za km
		return $this->odleglosc * self::CENA_KM;
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
	* Ustawia prywatna wlasciwosc _rabat
	*/
	public function setRabat($rabat){
		$this->_rabat = $rabat;
	}

	/*
	* Ustawia prywatna wlasciwosc _rabat
	*/
	public function setCenaKm($cenaKm){
		$this->_cenaKm  = $cenaKm;
	}


	/*
	* zwraca prywatna wlasciwosc _property
	* @return Danie
	*/

	public function pobierzPozycja($index) {
		return $this->_pozycje[$index];
	}
	/*
	* @return int
	* Zwraca łączną liczbę zamówionych porcji
	*/

	public function getLiczbaRazem() {
		$suma =0;
		foreach ($this->_pozycje as $pozycja) {
			$suma += $pozycja->getLiczba();
		}
		return $suma;
	}

	/*
	* Zwraca kwote do zaplaty
	*/

	public function doZaplaty($brutto = false) {
		$suma =0;
		foreach ($this->_pozycje as $pozycja) {
			$suma += $pozycja->getCena();
		}

		//dodaj transport

		$suma += $this->obliczTransport();

		//uwzglednij rabat 

		if (!$brutto) {
			$suma *=  (1 - $this->_rabat);
		}
		return suma;
	}

	/*
	* Dodaje danie do zamowienia
	*/

	public function dodajPozycje(Danie $danie){ 
		$this->_pozycje[] = $danie;

	}

	/*
	* Sprawdza czy w zamowieniu jest potrawa o podanym id 
	*/

	public function maPozycje($id) {
		foreach ($this->_pozycje as $pozycja) {
			if ($pozycja->getId() == $id) {
				return true;
			}
		}
		return false;
	}

	//**********
	// generuje kod html zamowienia
	// *********

	public function generujKod() {
		
		$zamowienieKod = '';


		foreach ($this->_pozycje as $pozycja) {
			$zamowienieKod .= $pozycja->generujKod('pln');
				
			}
			//transport
			$zamowienieKod .= Narzedzia::stworzWiersz("dostawa", $this->obliczTransport());

			//rabat
			if ($this->_rabat>0) {
				$zamowienieKod .= Narzedzia::stworzWiersz("rabat", $this->doZaplaty(true) * $this->_rabat * (-1));
			}

			//suma
			$zamowienieKod .= Narzedzia::stworzWiersz("Do zaplaty", $this->doZaplaty());

			return zamowienieKod;
	}



	
}

?>


