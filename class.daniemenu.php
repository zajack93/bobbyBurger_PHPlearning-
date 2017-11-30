<?php 

/**
* Klasa danie w menu
* 
* implementuje interfejs MozeWyswietac
* wiec jej pelna definicja musi sie znaleźć w klasie DanieMenu
*/
class DanieMenu extends Danie implements MozeWyswietlac
{
	/* wlasciwosci klasy*/ 
	private $_skladniki;

/*konstruktor klasy */

	function __construct($nazwa, $cena, $id)
	{
		parent::__construct($nazwa, $cena, $id);
	}
	/*
	* generuj kod HTML
	*/

	public function generujKod($symbol){
		//
	}
}
 ?>