<?php

	# ROZPOZNANIE URZĄDZENIA
	If($scan[$i]["mac"] == $mac_address){
		$scan[$i]["owner"] = "Kamil";
		$scan[$i]["device_type"] = "Serwer";
		$scan[$i]["model"] = "Raspberry Pi 2";
		$scan[$i]["connect"] = "LAN";
		
		
	}elseIf($scan[$i]["mac"] == "8C:04:FF:A4:D3:31"){
		$scan[$i]["owner"] = "Dom";
		$scan[$i]["device_type"] = "Router";
		$scan[$i]["model"] = "Technicolor 7200u";
		$scan[$i]["connect"] = "UPC Polska";
		
	}elseIf($scan[$i]["mac"] == "00:26:22:43:EB:54"){
		$scan[$i]["owner"] = "Kamil";
		$scan[$i]["device_type"] = "Laptop";
		$scan[$i]["model"] = "Toshiba Satellite L500-1EK";
		$scan[$i]["connect"] = "LAN";


	}elseIf($scan[$i]["mac"] == "70:1A:04:48:FF:DD"){
		$scan[$i]["owner"] = "Kamil";
		$scan[$i]["device_type"] = "Laptop";
		$scan[$i]["model"] = "Toshiba Satellite L500-1EK";
		$scan[$i]["connect"] = "WiFi";
		
		
	}elseIf($scan[$i]["mac"] == "C4:73:1E:A9:74:49"){
		$scan[$i]["owner"] = "Kamil";
		$scan[$i]["device_type"] = "Telewizor";
		$scan[$i]["model"] = "Samsung UE37ES5500";
		$scan[$i]["connect"] = "LAN";
		
		
	}elseIf($scan[$i]["mac"] == "00:08:22:46:9E:12"){
		$scan[$i]["owner"] = "Kamil";
		$scan[$i]["device_type"] = "Telefon";
		$scan[$i]["model"] = "GoClever Quantum 550+";
		$scan[$i]["connect"] = "WiFi";
		
		
	}elseIf($scan[$i]["mac"] == "90:09:17:CE:65:1B"){
		$scan[$i]["owner"] = "Kamil";
		$scan[$i]["device_type"] = "Tablet";
		$scan[$i]["model"] = "Omna N7 3G";
		$scan[$i]["connect"] = "WiFi";
		
		
	}elseIf($scan[$i]["mac"] == "00:19:99:74:7D:17"){
		$scan[$i]["owner"] = "House Rotation";
		$scan[$i]["device_type"] = "Komputer stacjonarny";
		$scan[$i]["model"] = "Fujitsu Siemens";
		$scan[$i]["connect"] = "LAN";
		
		
	}elseIf($scan[$i]["mac"] == "C0:1A:DA:AD:04:BB"){
		$scan[$i]["owner"] = "Katarzyna";
		$scan[$i]["device_type"] = "Telefon";
		$scan[$i]["model"] = "Apple iPhone 5S";
		$scan[$i]["connect"] = "WiFi";
		
		
	}elseIf($scan[$i]["mac"] == "00:1B:38:AF:FE:59"){
		$scan[$i]["owner"] = "Andrzej";
		$scan[$i]["device_type"] = "Laptop";
		$scan[$i]["model"] = "Toshiba Satellite P205D-S8804";
		$scan[$i]["connect"] = "LAN";
		
		
	}elseIf($scan[$i]["mac"] == "00:1B:9E:7F:24:A9"){
		$scan[$i]["owner"] = "Andrzej";
		$scan[$i]["device_type"] = "Laptop";
		$scan[$i]["model"] = "Toshiba Satellite P205D-S8804";
		$scan[$i]["connect"] = "WiFi";
		
		
	}else{
		$scan[$i]["owner"] = "<font color=red>nierozpoznany</font>";
		$scan[$i]["device_type"] = "<font color=red>nierozpoznany</font>";
		$scan[$i]["model"] = "<font color=red>nierozpoznany</font>";
		$scan[$i]["connect"] = "<font color=red>nierozpoznany</font>";
		
	}

?>
