<?php

	$nome="Felipe";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/960_12_col.css">
	<link rel="stylesheet" type="text/css" href="../css/estilo_modelo.css">
	

	<link href='http://fonts.googleapis.com/css?family=Tienne' rel='stylesheet' type='text/css'>
	<title>Ideal Empresa Jr - Consultoria e Desenvolvimento</title>
	<script type="text/javascript">
	function voltar(){
		alert("Voltando!");
		window.location.href=("index.php");
	}
	</script>
</head>
<body bgcolor="#F6F5F3">

	<!--Corpo do Site-->
	<div class="container_12 cont">

		<!--Div do logo, utilizada com Grid-->
		<div class="grid_3 cont2">
			<a href="index.php"><img src="../img/logo.png" width="140" height="130"></a>
		</div>
		<div class="grid_4 push_5 usuario">
			Bem vindo ao  sistema <?php echo "$nome"?> !
		</div>
		<div class="grid_4 push_3 logout">
			<nav>
				<ul class="nav nav-pills" id="texto">
					<li><a href="#logout">Sair</a></li>                  
                </ul>
            </nav>
		</div>
		<div class="grid_12 espacoTopo">
			<hr>
		</div>
		<div class="grid_12 espacoTopo">
		</div>
		<div class="grid_2 menulateral">
			<div class="navbar">
	          <ul class="nav navbar-nav">
	          		<li><a href="noticias.php">Noticias</a></li>
			        <li><a href="recursos.php">Recursos</a></li>
			        <li><a href="servicos.php">Serviços</a></li>
			        <li><a href="perfil.php">Perfil</a></li>
			        <li><a href="documentos.php">Documentos</a></li>
			        
 		            <!--<li><a href="#">Reviews <span class="badge">1,118</span></a></li>-->
	         </ul>
	       </div><!--/.nav-collapse -->
	    </div>
	    <div class="grid_9  corponoticias">
	    	<h4>Cadastrar Noticia:</h4>
	    	<form action="enviarnoticias.php" method="POST">
	    		<label>Titulo:</label><br>
	    		<input class="form-control" type="text" name="texto" size="40"><br>
	    		<label>Mensagem:</label> <br>
	    		<textarea class="form-control" rows="3"></textarea><br>
	    		<input class="btn btn-success" type="submit" value="Enviar">
	    		<input class="btn btn btn-danger" type="submit" value="Cancelar" onclick="voltar()">
	    	</form>
	    	
	    </div>

	<!-- Fim do corpo do site-->    
	</div>

	<!--Rodape do site. Ideal Empresa Junior-->
	<footer>
		<a href="#idealEmpresaJr">ideal Empresa Jr</a> - Todos os direitos reservados.
	</footer>

	<script src="../js/bootstrap.js" type="text/javascript"></script>
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('.dropdown-toggle').dropdown();
        }); 
    </script>
</body>
</html>