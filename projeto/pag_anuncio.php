<!DOCTYPE html>
<html>
<head>
	<title>Titulo</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<meta charset="UTF-8">
</head>


<?php
	
	$cod = $_GET['id'];
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "bd_carros";
	$conn = mysqli_connect($servidor, $usuario, $senha, $banco);
	
	$query = "SELECT * FROM tb_carro WHERE cod = ";
	$query2 = $query . $cod;
	
	$resultados = mysqli_query($conn, $query2);
	while($consulta = mysqli_fetch_array($resultados)){
		$array_cod[] = $consulta['cod'];
		$array_modelo[] = $consulta['modelo'];
		$array_ano[] = $consulta['ano'];
		$array_imagem1[] = $consulta['imagem1'];
		$array_preco[] = $consulta['preco'];
		$array_km[] = $consulta['km'];
		$array_marca[] = $consulta['marca'];
		$array_cor[] = $consulta['cor'];
	}
?>


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
			
			<aside class="row" class="col-md-12">
			
				<div class="col-md-2"></div>
				<div class="col-md-8" id="borda_info_anuncio">
					<div class="row">
						<div class="col-md-2">
						</div>
						<div class="col-md-4" >
							<h2><?php echo  $array_marca[0]." - ".$array_modelo[0]; ?></h2>
						</div>	
					</div>
					
					<div class="row">
						<div class="col-md-2" >
						</div>
						<div class="col-md-4" >
							<p><?php echo "ano: ". $array_ano[0] ?></p>
						</div>	
					</div>
					
					
					<div class="row">
						<div class="col-md-2">
						</div>
						<div class="col-md-5" >
							<img id="img_anuncio" src="img/<?php echo $array_imagem1[0]; ?>">
						</div>
						<div class="col-md-3" id="borda_info_anuncio">
							<h4>cod: <?php echo $array_cod[0]; ?></h4>
							<h4>Cor: <?php echo  $array_cor[0] ?></h4>
							<h4>KM: <?php echo  $array_km[0] ?></h4>
							<h4>Preço: <?php echo  $array_preco[0].",00" ?></h4>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-2">
						</div>
						<div class="col-md-4" >
							<h3>vendedor - contato: </h3>
						</div>
					</div>
				</div>	
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