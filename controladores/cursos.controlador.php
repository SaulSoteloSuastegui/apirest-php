<?php 

class CursosCtr{

	/*=============================================
	Mostrar todos los registros
	=============================================*/

	public function index(){
		$json = array(
			"detalle" =>"mostrando todos los cursos"

		);
		echo json_encode($json, true);
		return;

	}
	public function create(){
		$json = array(
			"detalle" =>"Crear curso"

		);
		echo json_encode($json, true);
		return;

	}
	public function show($id){
		$json = array(
			"detalle" =>"Mostrando curso con ".$id
		);
		echo json_encode($json, true);
		return;

	}
	public function update($id){
		$json = array(
			"detalle" =>"un curso".$id
		);
		echo json_encode($json, true);
		return;
	}
	public function delete($id){
		$json = array(
			"detalle" =>"eliminar curso ".$id
		);
		echo json_encode($json, true);
		return;

	}

}