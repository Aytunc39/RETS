
<!DOCTYPE html>
<html>
<head>
	<title>Bransci Sayfasi</title>
</head>
<body>
	<h1> Brans Ogretmeni Sayfasi </h1>
<table> 
		<tr>
			<td> Okul Numarası </td>
			<td> Adi </td>
			<td> Soyadi </td>
			<td> Sinifi </td>
			<td> Şube </td>
			<br>
		</tr>
		<tr>
		</tr>
	</td>
</tr>
</table>

	<?php

	include 'baglan.php';
	$sql="SELECT * FROM genelogrtbl";
	 $db=new PDO("mysql:host=localhost;dbname=giris;charset=utf8",'admin','furkanaytuncihat');

	$genelogrtbl =$db->query($sql)->fetchAll(PDO::FETCH_ASSOC);


	foreach ($genelogrtbl as $getir) 

	{
		?>
		
		

		<?php
		echo $getir['okul_no'].PHP_EOL;
		
		

		echo $getir['adi'].PHP_EOL;
		echo $getir['soyadi'].PHP_EOL;
		echo $getir['sinif'].PHP_EOL;
		echo $getir['sube'].PHP_EOL;
		?>
		<br>
		<?php
	}
	
	?>


	



	

</body>
</html>