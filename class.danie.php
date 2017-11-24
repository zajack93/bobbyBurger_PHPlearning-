<?php 


/**
* 
*/
class Danie {

	private $_nazwa;
	private $_cena;

	/*
	* konstruktor klasy
	*/

	public function __construct($nazwa, $cena)
	{
		$this->_nazwa = $nazwa;
		$this->_cena = $cena;

		echo "Tworzę instancję obiektu... <br>";
	}
	/*
	* Destruktor - nie przyjmuje parametrów, do zniszczenia obiektu, bardzo sporadycznie używany bo wywołanie konstruktora kończy się wraz z działaniem skryptu
	*/

	public function __destruct()
	{

		echo "Niszczę instancję obiektu stworzoną w konstruktorze... <br>";
	}

	/*
	* pobiera i Zwraca prywatna wlasciwosc _nazwa
	*/
	public function getNazwa() {
		return $this->_nazwa;
	}
	/*zapisuje i dodaje[ustawia] nazwe do prywatnej wlasciwosci */

	public function setNazwa($nazwa){
		$this->_nazwa = $nazwa;
	}

	/*zwraca prywatna wartosc cena*/

	public function getCena() {
		return $this->_cena;
	} 

	/*ustawia prywatna wartosc cena*/
	
	public function setCena($cena) {
		$this->_cena = $cena;
	}
	
}

?>