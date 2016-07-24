<!DOCTYPE html>


<?php 
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "bd_carros";
	$conn = mysqli_connect($servidor, $usuario, $senha, $banco);
	
	$resultados = mysqli_query($conn, "SELECT * FROM tb_carro ORDER BY cod DESC LIMIT 4");
	while($consulta = mysqli_fetch_array($resultados)){
		$array_id[] = $consulta['cod'];
		$array_modelo[] = $consulta['modelo'];
		$array_ano[] = $consulta['ano'];
		$array_img[] = $consulta['imagem1'];
		$array_preco[] = $consulta['preco'];
		$array_km[] = $consulta['km'];
	}
		
?>


<html>
<head>
	<title>Titulo</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<meta charset="UTF-8">
</head>

<body>
<div>
	<div class="container-fluid">
	
<!-- HEADER -->
	
	
		<header class="row">
			<div class="col-md-12">
				<a href="index.php">	
					<img src="img/ferrari-logo.png" style="width: 60px; height: 50px;">
				</a>				
			</div>
		</header>

		
<!-- ASIDE -->
	
	
		<nav id="principal" class="row">
		
			<aside class="col-md-12">
				<table id="tabela-compra">
		
		<!-- LINHA 1 -->			
					<tr>
						<td>
							<legend><?php echo $array_modelo[0] ." - ". $array_ano[0];  ?></legend>
							<p>cod:<p/>
							<a href="pag_anuncio.php?id=<?php echo $array_id[0]?>">
								<img src="img/<?php echo $array_img[0]; ?>" class="imagem-comprar"> </img>
							</a>
							<p>R$ <?php echo $array_preco[0] ?>,00</p><p><?php echo $array_km[0]; ?> km</p>
						</td>
						
						<td>
							<legend><?php echo $array_modelo[1] ." - ". $array_ano[1];  ?></legend>
							<a href="pag_anuncio.php?id=<?php echo $array_id[1]?>">	
								<img src="img/<?php echo $array_img[1]; ?>" class="imagem-comprar"> </img>
							</a>
							<p>R$ <?php echo $array_preco[1] ?>,00</p><p><?php echo $array_km[1]; ?> km</p>
						</td>
						
						<td>
							<legend><?php echo $array_modelo[2] ." - ". $array_ano[2];  ?></legend>
							<a href="pag_anuncio.php?id=<?php echo $array_id[2]?>">	
								<img src="img/<?php echo $array_img[2]; ?>" class="imagem-comprar"> </img>
							</a>
							<p>R$ <?php echo $array_preco[2] ?>,00</p><p><?php echo $array_km[2]; ?> km</p>
						</td>
						
						<td>
							<legend></legend>
							<img src=""> </img>
							<p></p>
						</td>
						
						
		<!-- LINHA 2 -->			
					
					<tr>
						<td>
							<legend>legenda</legend>
							<img src="" class="imagem-comprar"> </img>
							<p> preço </p><p> km </p>
						</td>
						
						
						
						<td>
							<legend>legenda</legend>
							<img src="" class="imagem-comprar"> </img>
							<p> preço </p><p> km </p>
						</td>
						
						
						
						<td>
							<legend>legenda</legend>
							<img src="" class="imagem-comprar"> </img>
							<p> preço </p><p> km </p>
						</td>
						
						
						<td>
							<legend>legenda</legend>
							<img src="" class="imagem-comprar"> </img>
							<p> preço </p><p> km </p>
						</td>
					</tr>
					
		<!-- LINHA 3 -->				
					
					<tr>
						<td>
							<legend>legenda</legend>
							<img src="" class="imagem-comprar"> </img>
							<p> preço </p><p> km </p>
						</td>
						
						
						
						<td>
							<legend>legenda</legend>
							<img src="" class="imagem-comprar"> </img>
							<p> preço </p><p> km </p>
						</td>
						
						
						
						<td>
							<legend>legenda</legend>
							<img src="" class="imagem-comprar"> </img>
							<p> preço </p><p> km </p>
						</td>
						
						
						<td>
							<legend>legenda</legend>
							<img src="" class="imagem-comprar"> </img>
							<p> preço </p><p> km </p>
						</td>
					</tr>
				</table>
			</aside>
		</nav>		

			
	<!-- FOOTER -->

		
		<footer class="row">
			<div class="col-md-12">
				footer
			</div>	
		</footer>
	
		
	</div>
</div>
</body>

</html>