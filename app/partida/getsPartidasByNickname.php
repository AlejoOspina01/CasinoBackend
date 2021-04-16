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
	$partidas = $entityManager->createQuery("
	SELECT  u 
	FROM Partida u, Jugador j  WHERE u.jugador = j.idjugador AND j.nickname  = ?1  
	"    
	)
	->setParameter(1,$nicknameget);
	$partidasfound= $partidas->getArrayResult();
		

	echo json_encode($partidasfound);
} catch (Doctrine\ORM\NoResultException $ex) {
	echo "No se encontro ningun jugador con ese nickname";
}
