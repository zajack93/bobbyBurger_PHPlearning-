<?php 

$a =7.5;
$b= 7;
$c =7.00;

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" charset="utf-8">
	<title> Kasia uczy sie od nowa</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<?php 
	echo "a = $a,  <br> b = $b  <br> c =  ", number_format($c, 2), "<br> <br>";
		echo "a==b : ", var_export($a == $b), "  prawda czy nie prawda <br>";
		echo "a===b : ", var_export($a === $b), "  prawda czy nie prawda <br>";
		echo "c==b : ", var_export($c == $b), "  prawda czy nie prawda <br>";
		echo "c===b : ", var_export($c === $b), "  prawda czy nie prawda <br> <br> <br>";

		echo "a!=b : ", var_export($a != $b), "  prawda czy nie prawda <br>";
		echo "a!==b : ", var_export($a !== $b), "  prawda czy nie prawda <br>";
		echo "c!=b : ", var_export($c != $b), "  prawda czy nie prawda <br>";
		echo "c!==b : ", var_export($c !== $b), "  prawda czy nie prawda <br>";

		echo "<br> <br> OPERATOR KONKATENACJI"." Jest Operatorem"."łączącym ciąg znaków";
		$name = "Kasia";
		$name1 = $name;
		$name .=" Asia Kinga";
		echo "Połączenie $name1 z $name za pomocą kropki name1.name jest rowne: ".$name1.$name ;
	?>

</body>
</html>