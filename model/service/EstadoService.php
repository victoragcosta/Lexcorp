<?php

require("../model/dao/EstadoDao.php");

class EstadoService{

	public static function getEstados(){

		return EstadoDao::getEstados();
	}

	public static function getById($id){

		return EstadoDao::getById($id);
	}

	public static function existeId($id){

		$est = EstadoDao::getById($id);

		if($est != null){
			return true;
		}else{
			return false;
		}
	}

}

?>