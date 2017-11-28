<?php 


/**
* 
*/
abstract class Danie {

	private $_nazwa;
	protected $_cena;
	protected $_id;

	/*
	* konstruktor klasy
	*/

	public function __construct($nazwa, $cena, $id)
	{
		$this->_nazwa = $nazwa;
		$this->_cena = $cena;
		$this->_id = $id;

		echo "Tworzę instancję obiektu... <br>";
	}
	/*
	* Destruktor - nie przyjmuje parametrów, do zniszczenia obiektu, bardzo sporadycznie używany bo wywołanie konstruktora kończy się wraz z działaniem skryptu
	*/

	public function __destruct()
	{

		echo "Niszczę instancję obiektu stworzoną w konstruktorze... <br>";
	}

	abstract function generujKod(); 
	/*
	* wymusza deifinicjee funkcje generujKod w każdej nieabstrakcyjnej klasie pochodnej klasy Danie
	**/ 

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

	/*zwraca prywatna wartosc id*/
	public function getId () {
		return $this->_id;
	}

	/*ustawia prywatna wartosc id*/
	public function setId($id) {
		$this->_id = $id;

	}
	
}

?>