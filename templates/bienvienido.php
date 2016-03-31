<html>
<head>
	<title></title>
</head>
<body>
<h1>Seja bem-vindo</h1>

	<?php
		foreach($usuarios as $index => $value) { 
	?>
		<tr>
			<td><?php print_r($value['cod_usuario']);?></td>
			<td><?php print_r($value['login']);?></td>
			<td><?php print_r($value['senha']);?></td>
		</tr>
	<?php
		}
	?>
	
	<a href="crud_usuario.php">Crud Usuario</a>
	
</body>
</html>