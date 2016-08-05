<?php

require("../model/classes/Estado.php");
require("../model/ConnectionUtil.php");

class EstadoDao{

	public static function parse($record){

		if($record == null) return null;

		$estado = new Estado();
		$estado->setId($record["ID"]);
		$estado->setEstado($record["ESTADO"]);

		return $estado;
	}

	public static function parseList($records){

		if($records == null)
			return null;

		for ($i = 0; $i < sizeof($records); $i++){
			$array[$i] = EstadoDao::parse($records[$i]);
		}

		return $array;
	}

	

}

?>