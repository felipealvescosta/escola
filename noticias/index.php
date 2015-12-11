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
	<title>Ideal Jr - Noticias </title>
	<script type="text/javascript">
	function voltar(){
		alert("Voltando!");
		window.location.href=("index.php");
	}
	function direcionar(){
		window.location.href=("cadastrarnoticia.php");
	}
	function sair(){
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
				<a href="../index.php"><img src="../img/ideallogo.png" width="150" height="150"></a>
			</div>
		<div class="col-xs-8 nome ">
			<h1>Sistema de Notícias <br><small>EEEP Antonio Rodrigues de Oliveira</small></h1>
		</div>

		<div class="col-xs-2 logout">
				Bem vindo ao  sistema <?php echo "$nome"?> !
				<div class="btn btn-primary" onclick="sair()">Sair<span class="glyphicon glyphicon-arrow-right"></span></div>
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
		 
	  

	    	<div class="col-xs-9">
	    	<h3>Noticias Ideal Jr:</h3>
	    	<br>
	    	<!-- Aqui sera a consulta do mysql -->
	    	 <?php 
				$conecta = mysql_connect("localhost", "root", "felipe007") or print (mysql_error()); 
				mysql_select_db("escola", $conecta) or print(mysql_error()); 
				$sql = "SELECT id, titulo , noticia , autor, data FROM noticias ORDER BY id  DESC"; 
				$result = mysql_query( $sql, $conecta); 
				 
				/* Escreve resultados até que não haja mais linhas na tabela */ 
				while( $consulta = mysql_fetch_array($result)) { 
				   print "<h1>$consulta[titulo]</h1><br>"; 
				   print "<p>$consulta[noticia]</p><br>";
				   print "<h5>$consulta[autor]</h5>";
				   print "<h5>$consulta[data]</h5>";
				   print "<tr>";
				} 
				mysql_free_result($result); 
				mysql_close($conecta); 
				?>
	    	</div>
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

</body>
</html>