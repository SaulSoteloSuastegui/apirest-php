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


}