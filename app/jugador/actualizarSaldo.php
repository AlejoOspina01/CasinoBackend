<?php
header('Access-Control-Allow-Origin: *'); 
header("Access-Control-Allow-Methods: PUT");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

error_reporting(E_ALL);
ini_set("display_errors", 1);


require_once "../../bootstrap.php";
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);

$stdSaldoUpdate = get_object_vars($request);

$jugadorUpdate = $entityManager->createQueryBuilder();

$query = $jugadorUpdate->update('Jugador', 'u') 
->set('u.saldo', '?1')
->where('u.nickname = ?2')
->setParameter(1, $stdSaldoUpdate['saldo'] )
->setParameter(2, $stdSaldoUpdate['nickname'])
->getQuery();        
$execute = $query->execute();