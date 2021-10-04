<?php 
	
	require_once("Conexion.php");

	if (isset($_POST['consultar_info']) && $_POST['consultar_info']=="este_es_el_valor") {
		$instancia = new Conexion();
		$conectar = $instancia->obtene_conexion();
		$sql = "SELECT *FROM tb_clientes";
		$statement = $conectar->prepare($sql);
		$statement->execute();
		$datos = $statement->fetchAll();
		$afectados = $statement->rowCount();
		print json_encode(
			array("exito",$_POST,date("Y-m-d G:i:s"),$datos,$afectados)
		);

	}else{
		print json_encode(array("error",$_POST,date("Y-m-d G:i:s")));
	}
	


?>