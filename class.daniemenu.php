<?php 

/**
* Klasa danie w menu
*/
class DanieMenu extends Danie
{
	/* wlasciwosci klasy*/ 
	private $_skladniki;

/*konstruktor klasy */

	function __construct($nazwa, $cena, $id)
	{
		parent::__construct($nazwa, $cena, $id);
	}

	public function generujKod(){
		//
	}
}
 ?>