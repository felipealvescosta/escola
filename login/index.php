
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Felipe Alves da Costa">
	<meta name="viewport" content="width=device-width">
	
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/estilo_teste.css">

	<link href="http://fonts.googleapis.com/css?family=Tienne" rel="stylesheet" type="text/css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

	<title>Faça seu login!</title>


</head>
<body>

	<!--Corpo do Site-->
	<div class="container">
	<div class="row">
		<!--Div do logo, utilizada com Grid-->
		<div class="col-xs-2 logo">
			<a href="../"><img src="../img/logo.png" width="130" height="130"></a>
		</div>
		<div class="col-xs-10 logoescola">
				<h1>EEEP Antonio Rodrigues de Oliveira <br><small>Aprender, Fazer, Conhecer e Ser!</small></h1>
		</div>
	</div>

	<div class="row">
		<div class="grid_12 espacoTopo">
			<hr>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-3"></div>
		<div class="col-xs-3 login_espaco">
			<!--Formulario Login 1-->
			<h4 align="center">Aluno</h4>
			<form action="#aluno">
			 
			    <label for="exampleInputEmail1">Usuário</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Entre com Usuário">
			    <label for="exampleInputPassword1">Senha</label>
			    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha"><br>
			    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> Acessar</button>
			    <button type="button" class="btn btn-danger" onclick="window.history.go(-1)"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
			</form>
			<br>
			<div id="senha">
			<h5> Ajuda com o acesso?</h5>
			<a href="#usuario">recuperar usuário!</a><br>
			<a href="#senha">recuperar senha!</a>
			</div>
			<hr>
	    </div>

	    <div class="col-xs-3 login_espaco">
		    <!--formulario login 2-->
		    <h4 align="center">Professor</h4>

			<form action="#professor">
			    <label for="exampleInputEmail1">Usuário</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Entre com Usuário">
			    <label for="exampleInputPassword1">Senha</label>
			    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha"><br>
			    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> Acessar</button>
			    <button type="button" class="btn btn-danger" onclick="window.history.go(-1)"><span class="glyphicon glyphicon-remove"></span>Cancelar</button>
			</form>
			<br>
			<div id="senha">
			<h5>Ajuda com o acesso?</h5>
			<a href="#usuario">recuperar usuário!</a><br>
			<a href="#senha">recuperar senha!</a>
			</div>
			<hr>
			</div>
			<div class="col-xs-3"></div>
	    </div>
	<!-- Fim do corpo do site-->    
	</div>
	<div class="row">
		<div class="col-xs-12 rodape">
	<!--Rodape do site. Ideal Empresa Junior-->
	<footer>
		<a href="../ideal/">&copy ideal Empresa Jr</a> - Todos os direitos reservados.
	</footer>
	</div>
	</div>
	<!-- SCRITPS DO BOOTSTRAP -->
	<script src="../js/bootstrap.js" type="text/javascript"></script>
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('.dropdown-toggle').dropdown();
        }); 
    </script>
</body>
</html>