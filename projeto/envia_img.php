<?php
	
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "bd_carros";
	$conn = mysqli_connect($servidor, $usuario, $senha, $banco);
	
	
	if(isset($_FILES['arquivo'])){
		
		$extensao = strtolower(subtr($_FILES['img1']['name'],-4));
		$novo_nome = $marca.$extensao;
		
		$diretorio = "img/";
		move_uploaded_file($_FILES['img1']['tmp_name'], $diretorio.$novo_nome);
		
	}
	
	

?>

<form action="envia_img" method="post" enctype="multipart/form-data">
	<input type="file" name="arquivo">
	<input type="text" name="texto">
	<input type="submit" value="salvar">
</form>