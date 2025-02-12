<?php 

$arrayRutas = explode("/", $_SERVER['REQUEST_URI']);
echo '<pre>'; print_r(array_filter($arrayRutas)); echo'</pre>';
if(count(array_filter($arrayRutas))== 1){	
	$json = array(
		"detalla"=>"no encontrado"
	);
	echo json_encode($json, true);
	return;
}else{
	if(array_filter($arrayRutas)[2]=="registro"){
		$json = array(
			"detalle" =>"estoy en registro"
		);
		echo json_encode($json, true);
		return;
	}

	if(array_filter($arrayRutas)[2]=="cursos"){
		$json = array(
			"detalle" =>"estoy en cursos"
		);
		echo json_encode($json, true);
		return;
	}
	if(array_filter($arrayRutas)[2]=="curso" && is_numeric(array_filter($arrayRutas)[3])){
		$json = array(
			"detalle" =>"un curso"
		);
		echo json_encode($json, true);
		return;
	}



}