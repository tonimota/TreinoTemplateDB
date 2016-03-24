<?php

include('../config/db.php');

if (isset($_POST['btn_send'])) {
	$db_conn = mysqli_connect (	HOST_DB,
								USUARIO_DB,
								SENHA_DB,
								NOME_DB);
								
	$stmt = mysqli_prepare($db_conn,' 	SELECT 
											cod_usuario
										FROM
											pi_user
										WHERE
											login = ?
										AND
											senha = ?');
	mysqli_stmt_bind_param($stmt,'ss',	$_POST['name']),
										$_POST['password']);
	mysqli_stmt_execute($stmt);
	
	mysqli_
	
if (isset($_POST['btn_send'])) {
	if (isset($logins[$_POST['name']])) {
		if ($logins[$_POST['name']] == $_POST['password']) {
			include('bienvienido.php');			
		} else {
			$msg = 'Usúario ou senha inválido';
			include('index.php');
		}
	} else {
		$msg = 'Usúario ou senha inválido';
		include('index.php');
	}
}
else {
	include('index.php');
}
}
?>