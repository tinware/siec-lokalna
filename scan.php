<?php
	
	# KONFIGURACJA
	include("config.php");
	
	# IP TEGO KOMPUTERA
	$ip = shell_exec('sudo hostname -I');
	$ip = str_replace(" \n", "", $ip);
	
	# ADRES MAC TEGO KOMPUTERA
	$mac_address = shell_exec('sudo ifconfig');
	$mac_address = nl2br($mac_address);
	$mac_address = strstr($mac_address, "HWaddr ");
	$mac_address = substr($mac_address, 7);
	$mac_address = substr($mac_address, 0, strpos($mac_address, " "));
	$mac_address = strtoupper($mac_address);
	
	# SKANOWANIE
	$skanowanie = shell_exec('sudo nmap -sP '.$ip_scan);
	
	# WYKRYCIE NIESPEŁNIONYCH WYMOGÓW TEGO SKRYPTU
	If($ip == null && $mac_address == null){
		$error .= "<font color='red'>Brak dostępu do wykonania tego skryptu!!! </font><br><br>";
		$error .= "Edytuj: ";
		$error .= "<u>nano /etc/sudoers</u> <br>";
		$error .= "i dodaj linijkę: <br>";
		$error .= "<u>www-data ALL=(ALL) NOPASSWD: ALL </u><br><br>";
		$error .= "Następnie restartuj: <br>";
		$error .= "<u>service apache2 restart</u>";
		
	}elseIf($skanowanie == null){
		$error .= "<font color='red'>Brak zainstalowanego oprogramowania NMAP!!! </font><br><br>";
		$error .= "Zainstaluj oprogramowanie: <br>";
		$error .= "<u>apt-get install nmap</u><br>";
		
	}elseIf(!file_exists("config.php")){
		$error .= "<font color='red'>Brak pliku konfiguracyjnego!!! </font><br><br>";
		$error .= "Skrypt nie może zlokalizować pliku config.php. Oprogramowanie niekompletne...";
		
	}else{
		# USUWAM HTML ZE ZMIENNEJ
		$skanowanie = strip_tags($skanowanie);

		for ($i = 1; $i <= 10; $i++) {
			
			# WYCINANIE IP
			$skanowanie = strstr($skanowanie, "Nmap scan report for ");
			$skanowanie = substr($skanowanie, 21);
			$scan[$i]["ip"] = substr($skanowanie, 0, strpos($skanowanie, "\n"));
			
			# STOP
			If($scan[$i]["ip"] == null){
				break;
			}
			
			# NADANIE NUMERU
			$scan[$i]["nr"] = $i;
			
			# WYCINANIE MAC ADDRESS
			$scan[$i]["mac"] = substr($skanowanie, 0, strpos($skanowanie, "Nmap "));
			$scan[$i]["mac"] = strstr($scan[$i]["mac"], "MAC Address: ");
			$scan[$i]["mac"] = substr($scan[$i]["mac"], 13);
			$scan[$i]["mac"] = substr($scan[$i]["mac"], 0, strpos($scan[$i]["mac"], " ("));
			
			# ROZPOZNANIE TEGO KOMPUTERA
			If($ip == $scan[$i]["ip"]){
				$scan[$i]["mac"] = $mac_address;
			}
			
			# ROZPOZNANIE URZĄDZENIA
			include("devices.php");
			
		}
	}

?>