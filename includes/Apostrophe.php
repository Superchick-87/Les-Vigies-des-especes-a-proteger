<?php
	function apostropheencode($tring){
		$tring = str_replace("'","\'",$tring);
		return $tring;
	}
	function apostrophedecode($tring){
		$tring = str_replace("\'","'",$tring);
		return $tring;
	}
	function justifListe($tring){
		$tring = str_replace(" et ","<br>et ",$tring);
		$tring = str_replace("(","<br>(",$tring);
		return $tring;
	}
	function justifListeBis($tring){
		$tring = str_replace(" et ","<br>et ",$tring);
		return $tring;
	}
	function dep($tring){
		$tring = str_replace("(","",$tring);
		$tring = str_replace(")","",$tring);
		return $tring;
	}
