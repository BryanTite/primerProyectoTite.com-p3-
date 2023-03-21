

<?php
include_once "../config/dataBase.php";

session_start();

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
$method = $_SERVER['REQUEST_METHOD'];
if($method == "OPTIONS") {
    die();
}

	
	if($method == "GET"){
		
		$con = DateBase::connect();
		$stmt = $con->prepare("SELECT * FROM resena");
		//Bind variables to the prepared statement as parameters
		//Execute statement
		$stmt->execute();
		$valoracion = array();
		$result = $stmt->get_result();

		while($row = $result->fetch_assoc()){
			$valoracion[] = $row;
		}
		echo json_encode($valoracion);
		$con->close();
		
	}


	
	if($method == "POST"){
		$datosJSON = file_get_contents('php://input');
		$datos = json_decode($datosJSON);

		$cod_pedido = $datos->cod_pedido;
		$email = $_SESSION['login'];
		$valoracion = $datos->valo;
		$comentario = $datos->comen;


		$con = DateBase::connect();
		$stmt = $con->prepare("INSERT INTO resena (cod_pedido,email,valoracion,comentario) VALUES (?,?,?,?)");
		//Bind variables to the prepared statement as parameters
		$stmt->bind_param("isis",$cod_pedido,$email,$valoracion,$comentario);
		//Execute statement
		$stmt->execute();
		$con->close();
	}
	
	
    


?>