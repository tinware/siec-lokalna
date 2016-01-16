<?php

	# ROZPOZNANIE URZĄDZENIA
	If($scan[$i]["mac"] == $mac_address){
		$scan[$i]["owner"] = "Kamil";
		$scan[$i]["device_type"] = "Serwer";
		$scan[$i]["model"] = "Komputer stacjonarny";
		$scan[$i]["connect"] = "LAN";
		
		
	}elseIf($scan[$i]["mac"] == "C4:73:1E:A9:74:49"){
		$scan[$i]["owner"] = "Kamil";
		$scan[$i]["device_type"] = "Telewizor";
		$scan[$i]["model"] = "Samsung UE37ES5500";
		$scan[$i]["connect"] = "LAN";
		

	}elseIf($scan[$i]["mac"] == "90:09:17:CE:65:1B"){
		$scan[$i]["owner"] = "Kamil";
		$scan[$i]["device_type"] = "Tablet";
		$scan[$i]["model"] = "Omna N7 3G";
		$scan[$i]["connect"] = "WiFi";
		
	
	}else{
		$scan[$i]["owner"] = "<font color=red>nierozpoznany</font>";
		$scan[$i]["device_type"] = "<font color=red>nierozpoznany</font>";
		$scan[$i]["model"] = "<font color=red>nierozpoznany</font>";
		$scan[$i]["connect"] = "<font color=red>nierozpoznany</font>";
		
	}

?>
