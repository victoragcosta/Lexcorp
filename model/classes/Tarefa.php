<?php

class Tarefa{

	private $id;
	private $descricao;
	private $dataInicio;
	private $prazo;
	private $dataFim;
	private $motivo;
	private $estado

	public function getId() {
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getDescricao() {
		return $this->descricao;
	}

	public function setDescricao($descricao){
		$this->descricao = $descricao;
	}

	public function getDataInicio() {
		return $this->dataInicio;
	}

	public function setDataInicio($dataInicio){
		$this->dataInicio = $dataInicio;
	}

	public function getPrazo() {
		return $this->prazo;
	}

	public function setPrazo($prazo){
		$this->prazo = $prazo;
	}

	public function getDataFim() {
		return $this->dataFim;
	}

	public function setDataFim($dataFim){
		$this->dataFim = $dataFim;
	}

	public function getMotivo() {
		return $this->motivo;
	}

	public function setMotivo($motivo){
		$this->motivo = $motivo;
	}

	public function getEstado() {
		return $this->estado;
	}

	public function setEstado($estado){
		$this->estado = $estado;
	}
	
}

?>