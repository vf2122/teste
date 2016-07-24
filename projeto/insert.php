<?php

	$marca = $_POST['marca'];
	$modelo = $_POST['modelo'];
	$ano = $_POST['ano'];
	$cor = $_POST['cor'];
	$km = $_POST['km'];
	$preco = $_POST['preco'];
	$descricao = $_POST['descricao'];
	
		

	if(isset($_FILES['img1'])){
		
		$extensao = strtolower(substr($_FILES['img1']['name'],-4));
		$novo_nome = $marca.$extensao;
		$diretorio = "img/";
		move_uploaded_file($_FILES['img1']['tmp_name'], $diretorio.$novo_nome);
		
	}

	
	$conn = mysqli_connect('localhost', 'root', '', 'bd_carros');
	
	$sql = "INSERT INTO tb_carro(tipo, marca, modelo, ano, cor, km, descricao, preco, vendedor, telefone, imagem1) 
	VALUES ('venda' , '$marca' , '$modelo' , '$ano' , '$cor' , '$km' , '$descricao' , '$preco', 'vinicius fernandes','43038511', '$novo_nome')";
	
	mysqli_query($conn, $sql);
	
	header("vender.php");
	
?>
	