<?php

/* Função para data banco->string */

function data($data_banco) {
	$retorno = '';
	if ($data_banco != '0000-00-00' && $data_banco != '')
		$retorno = date("d/m/Y", strtotime($data_banco));

	return $retorno;
}

/* Função para data e hora banco->string   */
function data_hora($data_hora_banco) {
	$retorno = date("d/m/Y H:i:s", strtotime($data_hora_banco));
	return $retorno;
}

/* Função para data e hora banco->string   */
function data_hora_sub($data_hora_banco) {
	$retorno = date("d/m/y H:i", strtotime($data_hora_banco));
	return $retorno;
}


/* Função para data string->banco   */

function data_banco($data_formatada) {
	list($dia, $mes, $ano) = explode("/", $data_formatada);
	$dataFinal = $ano . "-" . $mes . "-" . $dia;
	return $dataFinal;
}
