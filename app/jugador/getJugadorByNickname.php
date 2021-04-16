<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET"); 
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

date_default_timezone_set("America/Bogota");

error_reporting(E_ALL);
ini_set("display_errors", 1);
require_once "../../bootstrap.php";

$nicknameget = $_GET["nickname"];

try {
	$jugador = $entityManager->createQuery("
	SELECT  u 
	FROM Jugador u  WHERE u.nickname  = ?1  
	"    
	)
	->setParameter(1,$nicknameget);
	$jugadorfound= $jugador->getSingleResult();

		$jugadorArray= array(
			'nickname' => $jugadorfound->getNickname(),
			'pass' =>$jugadorfound->getPassword(),
			'saldo' => $jugadorfound->getSaldo(),
			'rutaimagen' => $jugadorfound->getRutaImagen(),
		);
		

	echo json_encode($jugadorArray);
} catch (Doctrine\ORM\NoResultException $ex) {
	echo "No se encontro ningun jugador con ese nickname";
}
