<?php


if(isset($_GET['dia'])){
	$dia = (int)$_GET['dia'];
	$mes = (int)$_GET['mes'];
	$ano = (int)$_GET['ano'];
}


function somatoria($num){
	$total = 0;

	for ($i=$num; $i > 0; $i--) {
		$total += $i;
	}

	return $total;
}


function safadao($dia, $mes, $ano){

	$mes = somatoria($mes);

	$safadeza = $mes + ($ano / 100) * (50 - $dia);

	$anjo = 100 - $safadeza;

	return "$anjo % anjo e $safadeza % de vagabundo";
}






include 'Projeto4.php';

