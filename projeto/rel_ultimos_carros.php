<?php
	
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "bd_carros";
	$conn = mysqli_connect($servidor, $usuario, $senha, $banco);
	
	$resultados = mysqli_query($conn, "SELECT * FROM tb_carro WHERE cod = 1);
	while($consulta = mysqli_fetch_array($resultados)){
		
	
?>