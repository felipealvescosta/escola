<?php

	$nome="Felipe";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/estilo_teste.css">
	

	<link href='http://fonts.googleapis.com/css?family=Tienne' rel='stylesheet' type='text/css'>
	<title>Ideal Empresa Jr - Consultoria e Desenvolvimento</title>
	<script type="text/javascript">
	function voltar(){
		alert("Voltando!");
		window.location.href=("index.php");
	}
	</script>
</head>

<body>

	<!--Corpo do Site-->
	<div class="container">

		<!--Div do logo, utilizada com Grid-->
		<div class="row">
		<div class="col-xs-2 logo ">
			<a href="../index.php"><img src="../img/ideallogo.png" width="120" height="120"></a>
		</div>


		<div class="col-xs-8 nome">
			Bem vindo ao  sistema <?php echo "$nome"?> !
		</div>


		<div class="col-xs-2 logout">
			<nav>
				<ul class="nav nav-pills" id="texto">
					<li><a href="#logout">Sair</a></li>                  
                </ul>
            </nav>
		</div>
		</div>

		<div class="row">
			<div class="grid_12 espacoTopo">
				<hr>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-3  menu_esquerdo">
				<ul class="nav menu">
					<li><a href="cadastrarnoticia.php"><span class="glyphicon glyphicon-plus"></span> Cadastrar Notícia</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-refresh"></span> Atualizar Notícia</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-remove"></span> Remover Notícia</a></li>
				</ul>
			</div>

	    <div class="col-xs-8  corponoticias">
	    	<h4>Cadastrar Noticia:</h4>
	    	<form method="post" action="enviarnoticias.php">
	    		<label>Titulo:</label><br>
	    		<input class="form-control" type="text" name="titulo" id="titulo" size="40"><br>
	    		<label>Mensagem:</label> <br>
	    		<input class="form-control" type="text" name="mensagem" id="mensagem" size="40"><br>
	    		<label>Autor</label>
	    		<input class="form-control" type="text" name="autor"  id= "autor"  size="20"><br>

	    		<input class="btn btn-success" type="submit" value="Enviar">
	    		<input class="btn btn btn-danger" type="submit" value="Cancelar" onclick="voltar()">
	    	</form>
	    	
	    </div>

	<!-- Fim do corpo do site-->    
	</div>

	<!--Rodape do site. Ideal Empresa Junior-->
	<div class="row">
		<div class="col-xs-12 rodape">
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