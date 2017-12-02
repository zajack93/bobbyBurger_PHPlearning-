<?php 

/*
* Klasa wyjątku bazy
*/

/**
* 
*/
class WyjatekBazy extends Exception
{
	/* właściwości klasy*/

	/*konstruktor klasy*/
	
	function __construct($komunikat) 
	{
		parent::__construct($komunikat);
	}

	/*
	* Zwraca komunikat 
	*/

	public function getKomunikat(){
		$komunikat = "Baza danych:  ";
		$komunikat .= $this->getMessage().'<br>';
		$komunikat .= "wiersz: <em>{$this->getFile()}</em><br>";
		$komunikat .= "plik: <em>{$this->getFile()}</em><br>";

		return $komunikat;
	}
}

 ?>