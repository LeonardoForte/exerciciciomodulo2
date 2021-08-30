<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title> UTD - AULA 05 </title>

		<!-- Bootstrap -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-3"></div>
				<div class="col-6">
					<hr><h3> Formulario de Cadastro do produto </h3><hr>
					<form action="recebeproduto.php" method="POST">
						<label> <i class="fa fa-user"></i> Nome do Produto </label><br>
						<input type="text" class="form-control" name="nome_produto" placeholder="Digite o nome do produto"><br><br>	

						<label> <i class="fa fa-envelope"></i> Preço </label><br>
						<input type="float" class="form-control" name="preco" placeholder="Digite o preço do produto"><br><br>

                        <label> <i class="fa fa-envelope"></i> Itens vendidos </label><br>
						<input type="int" class="form-control" name="vendidos" placeholder="Digite o numero de vendidos"><br><br>

                        <label> <i class="fa fa-envelope"></i> Fornecedor</label><br>
						<input type="text" class="form-control" name="fornecedor" placeholder="Digite o nome do fornecedor"><br><br>

						

						<div>
							<p class="text-end">
								<button class="btn btn-outline-secondary"> <i class="fa fa-send"></i> Enviar Dados </button>
							</p>
						</div>
					</form>	

				</div>
				<div class="col-3"></div>
			</div>
		</div>

			
	</body>
</html>