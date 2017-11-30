<?php 
//argumentem funkcji spl_autoload jest anonimowa funkcją - czli funckja bez nazwy, która można zapisać w zmiennej
//zostanie wykonana za kazdym razem, gdy interpreter napotka nieznana nazwe klasy lub interfejsu i bedzie przechowywana przez zmienna klasa

spl_autoload_register(
	function($klasa) {
		//echo "Import $klasa <br>";

		$klasaPlik = 'class.'.strtolower($klasa).'.php';
		$interfejsPlik = 'interface.'.strtolower($klasa).'.php';
		$funkcjePlik = 'funkcje.php';

		// require_once $klasaPlik;
		// require_once $interfejsPlik;

		//warunek sprawdzajacy, czy klasa lub interfejs istnieje, w przeciwnym razie stworzy 2 pliki [klasy i interfejsu] o nazwie napotkanej klasy i wywali błąd bo nie wczyta sie klasy/interfejsu, ktory nie istnieje

		if (file_exists($klasaPlik)) {
			require_once $klasaPlik;
		} elseif (file_exists($interfejsPlik)) {
			require_once $interfejsPlik;
		} elseif (file_exists($funkcjePlik)) {
			require_once $funkcjePlik;
		}

	}

	);

 ?>