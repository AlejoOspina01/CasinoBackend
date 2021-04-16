<?php
header('Access-Control-Allow-Origin: *'); 
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

date_default_timezone_set("America/Bogota");

error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once "../../bootstrap.php";


$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$stdJugador = get_object_vars($request);


try {
	$jugadorfound = $entityManager->createQuery('SELECT u FROM Jugador u WHERE u.nickname = ?1')
	->setParameter(1, $stdJugador["nickname"])
	->getSingleResult();
	echo "Ya se encuentra registrado un jugador con ese nickname";
} catch (Doctrine\ORM\NoResultException $ex) {

	$jugador = new Jugador;
	$jugador->setNickname($stdJugador["nickname"]);
	$jugador->setPassword($stdJugador["password"]);
	$jugador->setRutaImagen("assets/img/profile.png");
	$jugador->setSaldo(15000);
	$entityManager->persist($jugador);
	$entityManager->flush();

}

