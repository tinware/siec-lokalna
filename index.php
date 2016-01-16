<?php include("scan.php"); ?>

<title>Sieć lokalna</title>

<!-- Automatyczne odświeżanie -->
<meta http-equiv="refresh" content="5" >

<!-- Ustawiamy kodowanie znaków jako UTF-8 -->
<meta charset="UTF-8">

<!-- Informujemy urządzenie, że strona została zoptymalizowana pod kątem urządzeń mobilnych -->
<!-- <meta name="handheldFriendly" content="true" /> -->

<!-- Informuje urządzenie jaka jest optymalna rozdzielczość ekranu do wyświetlenia strony -->
<!-- <meta name="MobileOptimized" content="640"> -->

<!-- Powie ona mobilnemu urządzeniu jakich rozmiarów jest nasza strona (szerokość strony). Powie także jaki jest limit powiększania jej na urządzeniu mobilnym -->
<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"> -->

<style>
	body {
		padding: 20px; 
		background: #000;
		color: #DDD;
	}
	
	a {
		color: #DDD;
		text-decoration: none;
	}
	
	a:hover {
		text-decoration: underline;
	}
	
	td{
		padding: 5px;
	}
</style>



<?php If($error == null) { ?>
<center>

<table BORDER=1 cellspacing=0 cellpadding=10>
	<tr>
	<td align=center bgcolor=#222222>NR</td>
	<td align=center bgcolor=#222222>WŁAŚCICIEL</td>
	<td align=center bgcolor=#222222>TYP URZĄDZENIA</td>
	<td align=center bgcolor=#222222>MODEL</td>
	<td align=center bgcolor=#222222>POŁĄCZENIE</td>
	<td align=center bgcolor=#222222>IP</td>
	<td align=center bgcolor=#222222>ADRES MAC</td>
	
	</tr>

	<?php for ($i = 1; $i <= $scan[$i]["nr"]; $i++) { ?>
	<tr>
	<td><?php echo $scan[$i]["nr"]; ?></td>
	<td><?php echo $scan[$i]["owner"]; ?></td>
	<td><?php echo $scan[$i]["device_type"]; ?></td>
	<td>
		<?php If($scan[$i]["model"] != '<font color=red>nierozpoznany</font>') { echo '<a href="https://www.google.pl/#q='.$scan[$i]["model"].'" target="'.$scan[$i]["model"].'">'; } ?>
		<?php echo $scan[$i]["model"]; ?>
		<?php If($scan[$i]["model"] != '<font color=red>nierozpoznany</font>') { echo '</a>'; } ?>
	</td>
	<td><?php echo $scan[$i]["connect"]; ?></td>
	<td><a href="http://<?php echo $scan[$i]["ip"]; ?>" target="<?php echo $scan[$i]["ip"]; ?>"><?php echo $scan[$i]["ip"]; ?></a></td>
	<td><?php echo $scan[$i]["mac"]; ?></td>
	
	
	</tr>
	<?php } ?>

</table><br>
<?php echo "IP wewnętrzne tego komputera to: [".$ip."], a adres MAC to: [".$mac_address."]"; ?>

</center>
<?php } ?>

<?php echo $error; ?>