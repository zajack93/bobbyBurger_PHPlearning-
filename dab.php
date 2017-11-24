<?php 
$nazwisko = "zajac";
$adres = "Dulowa, ul Fredry 11";
$imie2 = "Łukasz";
$nazwisko2 = "Świr";
$adres2 = "prestiżowy";
$adres22 = 4235.134 * 32452;

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" charset="utf-8">
	<title> Dab przybyszow </title>
	<link rel="stylesheet" type="text/css" href="css/stylowanie.css">

</head>
<body>

	<table>
		<tr>
			<th> Imie </th>
			<th> Nazwisko </th>
			<th> Adres </th>
		</tr>
		<tr>
			<td> Kasia </td>
			<td> <?php echo $nazwisko; ?></td>
			<td> <?php echo $adres; ?></td>
		</tr>
		<tr>
			<?php 
			echo "<td> $imie2 </td>";
			echo "<td> $nazwisko2 </td>";
			echo "<td> $adres2 </td>";
			?>
		</tr>
		<tr>
			<td><?php echo number_format($adres22, "2", ",", ","); ?> </td>
		</tr>
	</table>
<div>
	<?php 

	$rok=2017;

	echo "Aby ten durny zespol awansowal do ktorejs ligi musi minac ", ++$rok, " i tyle wtedy znajdzie się w lepszej lidze w roku $rok <br>" ;
	echo "Aby ten durny zespol awansowal do ktorejs ligi musi minac ", ++$rok, " i tyle wtedy znajdzie się w lepszej lidze w roku $rok <br>" ;
	echo "Aby ten durny zespol awansowal do ktorejs ligi musi minac ", $rok++, " i tyle wtedy znajdzie się w lepszej lidze w roku $rok <br> " ;
	echo "Aby ten durny zespol awansowal do ktorejs ligi musi minac ", $rok++, " i tyle wtedy znajdzie się w lepszej lidze w roku $rok <br> " ;


	 ?>
</div>
</body>
</html>