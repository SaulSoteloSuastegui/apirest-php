<?php 

class ClientesCtr{

	/*=============================================
	Crear un registro
	=============================================*/

	public function create(){

		$json = array(
			"detalle"=>"estoy en registrosss"
		);
		echo json_encode($json, true);
		return;
	}

}