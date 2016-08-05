<?php

class Estado{
	
	private $id;
	private $estado;

	public function getId() {
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getEstado() {
		return $this->estado;
	}

	public function setEstado($estado){
		$this->estado = $estado;
	}

}

?>