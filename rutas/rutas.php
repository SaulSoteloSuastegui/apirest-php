<?php 

$arrayRutas = explode("/", $_SERVER['REQUEST_URI']);
//echo '<pre>'; print_r(array_filter($arrayRutas)); echo'</pre>';
if(count(array_filter($arrayRutas))== 1){	
	$json = array(
		"detalla"=>"no encontrado"
	);
	echo json_encode($json, true);
	return;
}else{
	if(array_filter($arrayRutas)[2]=="registros"){
		//echo '<pre>'; print_r($_SERVER["REQUEST_METHOD"]); echo'</pre>';
		//PETICIONES DE TIPO POST
		  if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST"){

			$registro = new ClientesCtr();
			$registro->create();
		  }
		
	}

	if(array_filter($arrayRutas)[2]=="cursos"){
		//PETICIONES DE TIPO GET
		if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "GET"){

		$cursos = new CursosCtr ();
		$cursos->index();
		  }
	
	}
	if(array_filter($arrayRutas)[2]=="cursos"){
		//PETICIONES DE TIPO GET
		if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST"){

		$cursos = new CursosCtr ();
		$cursos->create();
		  }
	
	}
	if(array_filter($arrayRutas)[2]=="curso" && is_numeric(array_filter($arrayRutas)[3])){

		if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "GET"){
			//echo '<pre>'; print_r(array_filter($arrayRutas)); echo'</pre>';
			$curso = new CursosCtr();
		    $curso->show(array_filter($arrayRutas)[3]);
		}

		//echo '<pre>'; print_r($_SERVER["REQUEST_METHOD"]); echo'</pre>';
		if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "PUT"){
			//echo '<pre>'; print_r(array_filter($arrayRutas)); echo'</pre>';
			$editarCursos = new CursosCtr();
		    $editarCursos->update(array_filter($arrayRutas)[3]);
		}

		if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "DELETE"){
			//echo '<pre>'; print_r(array_filter($arrayRutas)); echo'</pre>';
			$eliminarCurso = new CursosCtr();
		    $eliminarCurso->delete(array_filter($arrayRutas)[3]);
		}
	}



}