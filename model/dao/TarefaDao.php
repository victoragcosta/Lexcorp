<?php

require("../model/classes/Tarefa.php");
require("../model/ConnectionUtil.php");

class TarefaDao{

	public static function parse($record){

		if($record == null) return null;

		$tarefa = new Tarefa();
		$tarefa->setId($record["ID"]);
		$tarefa->setDescricao($record["DESCRICAO"]);
		$tarefa->setDataInicio($record["DATAINICIO"]);
		$tarefa->setPrazo($record["PRAZO"]);
		$tarefa->setDataFim($record["DATAFIM"]);
		$tarefa->setMotivo($record["MOTIVO"]);
		$tarefa->setEstado($record["ESTADO"]);

		return $tarefa;
	}

	public static function parseList($records){

		if ($records == null)
			return null;
		
		for ($i = 0; $i < sizeof($records); $i++){
			$array[$i] = TarefaDao::parse($records[$i]);
		}
		
		return $array;
	}

	public static function getTarefas(){

		$sql = "SELECT tarefas.id AS ID,
				tarefas.descricao AS DESCRICAO,
				tarefas.data_inicio AS DATAINICIO,
				tarefas.prazo AS PRAZO,
				tarefas.data_fim AS DATAFIM,
				tarefas.motivo AS MOTIVO,
				tarefas.estado_id AS ESTADOID,
				estado.estado AS ESTADO
				FROM tarefas, estado
				WHERE tarefas.estado_id = estado.id";

		$result = ConnectionUtil::executarSelect($sql);

		return TarefaDao::parseList($result);

	}

	public static function getTarefasAndamento(){

		$sql = "SELECT tarefas.id AS ID,
				tarefas.descricao AS DESCRICAO,
				tarefas.data_inicio AS DATAINICIO,
				tarefas.prazo AS PRAZO,
				tarefas.estado_id AS ESTADOID,
				estado.estado AS ESTADO
				FROM tarefas, estado
				WHERE tarefas.estado_id = estado.id AND estado.estado = 'Andamento'";

		$result = ConnectionUtil::executarSelect($sql);

		return TarefaDao::parseList($result);
	}

	public static function getTarefasFalhou(){

		$sql = "SELECT tarefas.id AS ID,
				tarefas.descricao AS DESCRICAO,
				tarefas.data_inicio AS DATAINICIO,
				tarefas.data_fim AS DATAFIM,
				tarefas.motivo AS MOTIVO,
				tarefas.estado_id AS ESTADOID,
				estado.estado AS ESTADO
				FROM tarefas, estado
				WHERE tarefas.estado_id = estado.id AND estado.estado = 'Falhou'";
		
		$result = ConnectionUtil::executarSelect($sql);

		return TarefaDao::parseList($result);
	}

	public static function getTarefasSucesso(){

		$sql = "SELECT tarefas.id AS ID,
				tarefas.descricao AS DESCRICAO,
				tarefas.data_inicio AS DATAINICIO,
				tarefas.data_fim AS DATAFIM,
				tarefas.estado_id AS ESTADOID,
				estado.estado AS ESTADO
				FROM tarefas, estado
				WHERE tarefas.estado_id = estado.id AND estado.estado = 'Sucesso'";
		
		$result = ConnectionUtil::executarSelect($sql);

		return TarefaDao::parseList($result);
	}

	public static function inserir($descricao,$dataInicio,$prazo,$dataFim,$motivo,$estadoId){

		$sql = "INSERT INTO tarefas (descricao,data_inicio,prazo,data_fim,motivo,estado_id)
				VALUES ('".$descricao."','".$dataInicio."','".$prazo."','".$dataFim."','".$motivo."','".$estadoId."')";

		ConnectionUtil::executar($sql);

	}

	public static function deletar($id){

		$sql = "DELETE FROM tarefas WHERE id = " . $id;
		ConnectionUtil::executar($sql);

	}

	public static function alterar($id,$descricao,$dataInicio,$prazo,$dataFim,$motivo,$estadoId){

		$sql = "UPDATE tarefas
				SET descricao = '".$descricao."', data_inicio = '".$dataInicio."', prazo = '".$prazo."', 
					data_fim = '".$dataFim."', motivo = '".$motivo."', estado_id = '".$estadoId."'
				WHERE id = ".$id;

		ConnectionUtil::executar($sql);

	}

	public static function getById($id){

		$sql = "SELECT * FROM tarefas WHERE id = " . $id;
		$result = ConnectionUtil::executarSelect($sql);
		return TarefaDao::parse($result[0]);

	}

	public static function getByDescricao($descricao){

		$sql = "SELECT * FROM tarefas WHERE descricao = '" . $descricao . "'";
		$result = ConnectionUtil::executarSelect($sql);
		return TarefaDao::parse($result[0]);

	}

}

?>