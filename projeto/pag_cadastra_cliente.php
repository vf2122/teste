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
			
			<aside class="col-md-12">
				<div class="col-md-1">
				</div>
					
					<div class="col-md-10">
						<form action="cadastra_cliente.php" method="POST" enctype="multipart/form-data">
							<div class="row">
								<div class="col-md-2">
									<legend>info pessoal</legend>
								</div>
							</div>
							
							
							<div class="row form-group">
								<div class="col-md-6">
									<label>Nome:</label>
									<input type="text" name="nome" required="required" class="form-control">
								</div>
							</div>
							
							
							<div class="row form-group">
								<div class="col-md-2">
									<label>CPF:</label>
									<input type="text" maxlength="11" name="cpf" required="required" class="form-control">
								</div>
								<div class="col-md-4">
									<label>Apelido:</label>
									<input type="text" maxlength="11" name="apelido" required="required" class="form-control">
								</div>
							</div>
							
							
							<div class="row form-group">
								<div class="col-md-3">
									<label>Data de nascimento:</label>
									<input type="date" name="dt_nasc" required="required" class="form-control">
								</div>
								<div class="col-md-3">
									<label>Estado civil:</label>
									<select name="estado_civil" class="form-control">
										<option value="solteiro">Solteiro(a)
										<option value="casado">Casado(a)
										<option value="viuvo">Viúvo(a)
										<option value="divorciado">Divorciado(a)										
									</select>
								</div>
							</div>	
							
							
							<div class="row form-group">
								<div class="col-md-3">
									<label>E-mail:</label>
									<input type="email" maxlength="11" name="email" required="required" class="form-control">
								</div>
								<div class="col-md-3">
									<label>Confirme:</label>
									<input type="email" name="re_email" required="required" class="form-control">
								</div>
							</div>
							
							
							<div class="row form-group">
								<div class="col-md-3">
									<label>Senha:</label>
									<input type="password" name="senha" required="required" class="form-control">
								</div>
								<div class="col-md-3">
									<label>Confirme:</label>
									<input type="password" name="re_senha" required="required" class="form-control">
								</div>
							</div>
							
							
							nome
							apelido
							dt nasc
							estado civil
					
							-info ender-
							logradouro
							endereco
							numero
							complemento
							estado
							cidade
					</div>
						</form>
				<div class="col-md-1">
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