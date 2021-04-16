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

	$fechaactual = date("Y-m-d");
	$fecha = new DateTime($fechaactual );
	$jugador = $entityManager->createQuery("
	SELECT  u 
	FROM Jugador u  WHERE u.nickname  = ?1  
	"    
	)
	->setParameter(1,$stdJugador["nickname"]);

	$jugadorfound= $jugador->getSingleResult();

	$partida = new Partida;
	$partida->setJugador($jugadorfound);
	$partida->setFechaPartida($fecha);
	$partida->setColorSeleccionado($stdJugador["colorsel"]);
	$partida->setColorSistema($stdJugador["colorsistema"]);
	$partida->setDineroApostado($stdJugador["dineroapostado"]);
	$partida->setDineroGanado($stdJugador["dineroresultante"]);
	$partida->setDineroPerdido($stdJugador["dineroperdido"]);	
	$partida->setPorcentaje($stdJugador["porcentajeapostado"]);	
	$entityManager->persist($partida);
	$entityManager->flush();



