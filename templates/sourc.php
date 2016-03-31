<?php
session_start();

include('../config/db.php');

if (isset($_POST['btn_send'])) {
	
	$objDB = new PDO(	'mysql:host='.HOST_DB.';dbname='.NOME_DB,USUARIO_DB,SENHA_DB);
	
	$objStmt = $objDB->prepare(		'SELECT 
											cod_usuario
										FROM
											pi_user
										WHERE
											login = ?
										AND
											senha = ?');
	$objStmt->bindParam(1,$_POST['name']);
	$objStmt->bindParam(2,$_POST['password']);
	$objStmt->execute();
	
	if($objStmt->rowCount() > 0) {
		
		$_SESSION['name'] = $_POST['name']; 
		
		$objStmt = $objDB->prepare(' SELECT
										*
										FROM
											pi_user');
		$objStmt->execute();
		
		while ($reg = $objStmt->fetch(PDO::FETCH_ASSOC)) {
			$usuarios[$reg['cod_usuario']] = $reg;
		}
		include('bienvienido.php');
} else {
	$msg = 'Usúario ou senha inválido';
	include('index.php');
}
}
else {
	include('index.php');
}
?>