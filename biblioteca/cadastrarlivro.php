<?php

	$nome="Felipe";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/estilo_teste.css">

	<link href="http://fonts.googleapis.com/css?family=Tienne" rel="stylesheet" type="text/css">

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<title>Sistema de Gestão Bibliotecária</title>

	<script type="text/javascript">
	
		function voltar(){
			alert("Voltando!");
			window.location.href=("index.php");
		}

		function Sair () {
			window.location.href=("../");
		}

	</script>
</head>
<body bgcolor="#F6F5F3">

	<!--Corpo do Site-->
	<div class="container">

		<!--Div do logo, utilizada com Grid-->
		<div class="row">
		
			<div class="col-xs-2 logo">
				<a href="../index.php"><img src="../img/ideallogo.png" width="120" height="120"></a>
			</div>

			<div class="col-xs-7 nome">
				<h2>EEEP Antonio Rodrigues de Oliveira <br><small>Sistema Bibliotecário</small></h2>
				
			</div>

			<div class="col-xs-3 logout">
						<h5>Bem vindo ao  sistema <?php echo "$nome !"?></h5>					
						<button class="btn btn-primary" onclick="Sair()">Sair <span glyphicon glyphicon-arrow-right></span></button>                  
			</div>

		</div>

		<div class="row">
			<div class="col-xs-3  menu_esquerdo">
				<ul class="nav menu">
					<li><a href="cadastrarlivro.php"><span class="glyphicon glyphicon-plus"></span> Cadastrar Livro</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-search"></span> Buscar Livro</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-time"></span> Alugar Livro</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-refresh"></span> Atualizar Livro</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-remove"></span> Remover Livro</a></li>
				</ul>
			</div>

		    <div class="col-xs-8 show_livro">
		    	<h4>Cadastrar Novo livro:</h4>
		    	<br>
		    	<form method="POST" action="gravarlivro.php">
		    		<h4>Titulo:</h4>
		    		<input class="form-control" type="text" name="titulo" size="20"><br>
		    		<h4>Autor:</h4> 
		    		<input class="form-control" type="text" name="autor" size="20"><br>
		    		<h4>Editora</h4>
		    		<input class="form-control" type="text" name="editora"  size="20"><br>
		    		<h4>Genero</h4> 
		    		<input class="form-control" type="text" name="genero"  size="20"><br>
		    		<h4>ISBN</h4>
		    		<input class="form-control" type="text" name="isbn"  size="20"><br>
		    		<h4>Quantidade</h4>
		    		<input class="form-control" type="text" name="quantidade"  size="20"><br>
		    		<h4>Registro Biblioteca</h4>
		    		<input class="form-control" type="text" name="reg_biblioteca"  size="20"><br>
		    		<h4>Imagem livro</h4>
		    		<input class="form-control" type="file" name="imagem"  size="20"><br>

		    		<button class="btn btn-success" type="submit" value="Cadastrar novo livro"><b>Casdastrar Livro</b> <spam class="glyphicon glyphicon-ok"></spam></button>
		    		<button class="btn btn btn-danger" onclick="voltar()"><b>Cancelar</b> <spam class="glyphicon glyphicon-remove"></spam></button>
		    	</form>
		    	
		    </div>

	    </div>

	<!-- Fim do corpo do site-->    
	

	
	<!--Rodape do site. Ideal Empresa Junior-->
	<div  class="col-xs-12 rodape"> 
	<footer>
		<a href="idealjr.php">ideal Empresa Jr</a> - Todos os direitos reservados.
	</footer>

	</div>
	</div>
	<script src="../js/bootstrap.js" type="text/javascript"></script>
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('.dropdown-toggle').dropdown();
        }); 
    </script>
</body>
</html>