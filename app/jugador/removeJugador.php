	<?php
header('Access-Control-Allow-Origin: *'); 
header("Access-Control-Allow-Methods: PUT");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

date_default_timezone_set("America/Bogota");

error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once "../../bootstrap.php";


$postdata = file_get_contents("php://input");

	$jugadorFound = $entityManager->createQuery('SELECT u FROM Jugador u WHERE u.nickname = ?1')
	->setParameter(1, $postdata)
	->getSingleResult();
	$entityManager->remove($jugadorFound);
	$entityManager->flush();

	$mensajeOk = array();

	array_push($mensajeOk, "OK");

	echo json_encode($mensajeOk);