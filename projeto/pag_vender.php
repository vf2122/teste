<!DOCTYPE html>


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
			
			<aside id="form_vender" class="col-md-4">
				<form action="insert.php" method="POST" enctype="multipart/form-data">
					
					<div class="row form-group">
						<div class="col-md-5">
							<label for="marca">marca:</label>
							<select name="marca"  required="required" class="form-control">
								<option value="Astron Martin">Astron Martin
								<option value="Audi">Audi
								<option value="BMW">BMW
								<option value="Chery">Chery
								<option value="ChevroletGM">Chevrolet/GM
								<option value="Chrysler">Chrysler
								<option value="Citroen">Citroën
								<option value="Ferrari">Ferrari
								<option value="Fiat">Fiat
								<option value="Ford">Ford
								<option value="Honda">Honda
								<option value="Jac Motors">Jac Motors
								<option value="Jeep">Jeep
								<option value="Land Rover">Land Rover
								<option value="Lexus">Lexus
								<option value="Mercedes-Benz">Mercedes-Benz
								<option value="Mitsubishi">Mitsubishi
								<option value="Nissan">Nissan
								<option value="Peugeot">Peugeot
								<option value="Renault">Renault
								<option value="Toyota">Toyota
								<option value="Volkswagen">Volkswagen
								<option value="Volvo">Volvo
							</select>
						</div>
						<div class="col-md-5">
							<label for="modelo">modelo:</label>
							<input type="text" name="modelo"  required="required" class="form-control">
						</div>
					</div>
					
					
					<div class="row form-group">
						<div class="col-md-5">
							<label>ano:</label>
							<input type="text" size="1" maxlength="4" name="ano" required="required" class="form-control">
						</div>
						<div class="col-md-5">
							<label>cor:</label>
								<select name="cor"  required="required" class="form-control">
									<option value="Amarelo">Amarelo
									<option value="Azul">Azul
									<option value="Branco">Branco
									<option value="Bege">Bege
									<option value="Cinza">Cinza
									<option value="Dourado">Dourado
									<option value="Marrom">Marrom
									<option value="Preto">Preto
									<option value="Verde">Verde
									<option value="vermelho">vermelho
									<option value="outros">outros
								</select>
							</div>
					</div>
					
					<div class="row form-group">
						<div class="col-md-5">
							<label>km:</label>
							<input type="text" size="3" maxlength="6" name="km" required="required" class="form-control">
						</div>
						<div class="col-md-5">
							<label for="preco">preço:</label>
							<input type="text" size="5" maxlength="6" name="preco"  required="required" class="form-control" >
						</div>
					</div>
					
					
					<div class="row form-group">
						<div class="col-md-3">
							<label>portas:</label>
							<select name="portas" required="required" class="form-control">
								<option value="2">2
								<option value="3">3
								<option value="4">4
								<option value="5">5
							</select>
						</div>
							<div class="col-md-2"></div>
						<div class="col-md-5">
							<label>final da placa:</label>
							<select name="placa" required="required" class="form-control">
								<option value="0">0
								<option value="1">1
								<option value="2">2
								<option value="3">3
								<option value="4">4
								<option value="5">5
								<option value="6">6
								<option value="7">7
								<option value="8">8
								<option value="9">9
							</select>
						</div>						
					</div>
					
					
					<div class="row form-group">
						<div class="col-md-5">
							<label>combustível</label>
							<select name="combustivel" required="required" class="form-control">
								<option value="alcool">álcool
								<option value="gasolina">gasolina
								<option value="flex">flex
								<option value="gas">gás
							</select>
						</div>
						<div class="col-md-5">
							<label>cambio</label>
							<select name="combustivel" required="required" class="form-control">
								<option value="manual">manual
								<option value="automatico">automático
							</select>
						</div>						
					</div>	
					
					
					<div class="row form-group">
						<div class="col-md-10">
							<label>descrição:</label>
							<textarea  id="area_texo" name="descricao" rows="10" cols="50" placeholder="digite os opcionais..." class="form-control"></textarea>
						</div>
					</div>	
					
					
					<input type="file" name="img1">
					<input type="file" name="img2">
					<input type="file" name="img3">
					<input type="file" name="img4">
					
					
					<input type="submit" class="btn btn-primary" name="send" value="enviar">
					<input type="reset" class="btn" class="" name="clear" value="limpar">
					
			
				</form>
			</aside>
			<aside class="col-md-8">
				<img id="imagem-negoc" src="img/negocio.png">
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