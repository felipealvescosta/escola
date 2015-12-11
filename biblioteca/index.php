<!DOCTYPE html>
<html lang="pt-br">
<head>

	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/estilo_teste.css">
	<link href="http://fonts.googleapis.com/css?family=Tienne" rel="stylesheet" type="text/css">
	<script src="../js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../js/bootstrap.js" type="text/javascript"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript">
		function voltar(){
			alert("Voltando!");
			window.location.href=("index.php");
		}
		function direcionar(){
			window.location.href=("cadastrarlivro.php");
		}
		function sair(){
			window.location.href=("../");
		}
	</script>

</head>

<body>
	<div class="container">
		<!--Div do logo, utilizada com Grid-->
		<div class="row">
			<div class="col-xs-2 logo">
				<a href="../index.php"><img src="../img/ideallogo.png"  class="img-polaroid" width="150" height="150" ></a>
			</div>
			<div class="col-xs-8 nome">
				<h2>EEEP Antonio Rodrigues de Oliveira <br><small>Sistema Bibliotecário</small></h2>
			</div>
			<div class="col-xs-2 logout">
				<p>Olá, Felipe Alves !</p>
				<div class="btn btn-primary" onclick="sair()">Sair <span class="glyphicon glyphicon-arrow-right"></span></div>
			</div>
			<hr>
		</div>
		<div class="row">
			<div class="col-xs-12"><hr></div>
		</div>

		<!-- Conteudo do Site-->
		<div class="row">
			<!-- Menu esquerda-->
			<div class="col-xs-3  menu_esquerdo">
				<ul class="nav menu">
					<li><a href="cadastrarlivro.php"><span class="glyphicon glyphicon-plus"></span> Cadastrar Livro</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-search"></span> Buscar Livro</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-time"></span> Alugar Livro</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-refresh"></span> Atualizar Livro</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-remove"></span> Remover Livro</a></li>
				</ul>
			</div>

			<!-- Exibicao Livros--> 
			<div class="col-xs-8 show_livro">
	    		<h3>Livros:</h3>
	    		<hr>
	    		<!-- Aqui sera a consulta do mysql -->
	    	 	   <?php 
			        $conecta = mysql_connect("localhost", "root", "felipe007") or print (mysql_error()); 
			        mysql_select_db("escola", $conecta) or print(mysql_error()); 
			        $sql = "SELECT id_livro, titulo , autor FROM tb_livro ORDER BY id_livro DESC"; 
			        $result = mysql_query($sql, $conecta); 
			         
			        /* Escreve resultados até que não haja mais linhas na tabela */ 
			        
			        while($consulta = mysql_fetch_array($result)) {
			           print "<h2>$consulta[id_livro]</h2>"; 
			           print "<h4>$consulta[titulo]</p>";
			           print "<h5>$consulta[autor]</h5>"; 
			           print "<tr>";
			          
			        } 
			        mysql_free_result($result); 
			        mysql_close($conecta); 
			        ?>
			</div> <!--  fim da exibicao dos livros -->
		</div>
			<div class="row">
				<div class="col-xs-12 rodape">
					<footer>
						<a href='idealjr.php'>&copy ideal Empresa Jr</a> - Todos os direitos reservados.
					</footer>
				</div>
			</div>

	</div><!-- fim container--> 
</body>
</html>





