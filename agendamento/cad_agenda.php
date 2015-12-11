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
	<title>Agendamento Ambientes e Laboratórios</title>
	<script type="text/javascript">
	function voltar(){
		alert("Voltando!");
		window.location.href=("index.php");
	}
	function direcionar(){
		window.location.href=("cad_agenda.php");
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
		<div class="col-xs-7 nome ">
			<h1>Sistema de Agendamento <br><small>Ambientes e Laboratórios | EEEP Antonio Rodrigues de Oliveira</small></h1>
		</div>

		<div class="col-xs-3 logout">
				Bem vindo ao  sistema <?php echo "$nome"?>!<br>
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
					<li><a href="cad_agenda.php"><span class="glyphicon glyphicon-plus"></span> Agendar Ambiente</a></li>
					<li><a href="atua_agenda.php"><span class="glyphicon glyphicon-refresh"></span> Atualizar Agenda</a></li>
					<li><a href="remove_agenda.php"><span class="glyphicon glyphicon-remove"></span> Cancelar Agendamento</a></li>
				</ul>
			</div>
		 
	  

	    	<div class="col-xs-9 corpoCad">
	    	<h2>Agendamento de Ambientes Escolares</h2>

	    	<form method="POST" action="envia_agenda.php">
	    		<table class="table table-responsive">
	    		<thead>
		    		<tr>
		    		<th><h4>Ambiente</h4></th>
		    		<th><h4>Horário</h4></th>
		    		<th><h4>Dia</h4></th>
		    		<th><h4>Mês</h4></th>
		    		</tr>
		    	</thead>
		    	<tbody>
		    		<tr>
		    			<td>
				    		<select name="ambiente" >
				    			<option selected>Selecione o Ambiente</option>
				    			<option value="Informatica">Lab de Informática</option>
				    			<option value="Linguas">Lab de Línguas</option>
				    			<option value="Fisica">Lab de Física</option>
				    			<option value="Quimica">Lab de Química</option>
				    			<option value="Biologia">Lab de Biologia</option>
				    			<option value="Matematica">Lab de Matemática</option>
				    			<option value="Biblioteca">Biblioteca</option>
				    			<option value="Auditorio">Auditório</option>
				    			<option value="DataShow 1">DataShow 1</option>
				    			<option value="DataShow 2">DataShow 2</option>
				    			<option value="Caixa de Som">Caixa de Som</option>
				    			<option value="Quadra">Quadra Esportiva</option>
				    			<option value="Anfiteatro">Anfiteatro</option>
				    		</select>
				    	</td>
				    	<td>
				    		<select name="horario">
				    			<option selected>Selecione o horário</option>
				    			<option value="1º aula">1º Aula - 07:00 - 07:50</option>
				    			<option value="2º aula">2º Aula - 07:50 - 08:40</option>
				    			<option value="3º aula">3º Aula - 09:10 - 10:00</option>
				    			<option value="4º aula">4º Aula - 10:00 - 10:50</option>
				    			<option value="5º aula">5º Aula - 10:50 - 11:40</option>
				    			<option value="6º aula">6º Aula - 13:20 - 14:10</option>
				    			<option value="7º aula">7º Aula - 14:10 - 15:00</option>
				    			<option value="8º aula">8º Aula - 15:20 - 16:10</option>
				    			<option value="9º aula">9º Aula - 16:10 - 17:00</option>
				    			<option value="Noite">Noite</option>
				    			<option value="Sabado">Sabádo</option>
				    			<option value="Domingo">Domingo</option>
				    		</select>
				    	</td>
				    	<td>
				    		<select name="dia">
				    			<option selected>Selecione o dia</option>
				    			<option value="01">01</option>
				    			<option value="02">02</option>
				    			<option value="03">03</option>
				    			<option value="04">04</option>
				    			<option value="05">05</option>
				    			<option value="06">06</option>
				    			<option value="07">07</option>
				    			<option value="08">08</option>
				    			<option value="09">09</option>
				    			<option value="10">10</option>
				    			<option value="11">11</option>
				    			<option value="12">12</option>
				    			<option value="13">13</option>
				    			<option value="14">14</option>
				    			<option value="15">15</option>
				    			<option value="16">16</option>
				    			<option value="17">17</option>
				    			<option value="18">18</option>
				    			<option value="19">19</option>
				    			<option value="20">20</option>
				    			<option value="21">21</option>
				    			<option value="22">22</option>
				    			<option value="23">23</option>
				    			<option value="24">24</option>
				    			<option value="25">25</option>
				    			<option value="26">26</option>
				    			<option value="27">27</option>
				    			<option value="28">28</option>
				    			<option value="29">29</option>
				    			<option value="30">30</option>
				    			<option value="31">31</option>
				    		</select>
				    	</td>
				    	<td>
				    		<select name="mes">
				    			<option selected>Selecione o mês</option>
				    			<option value="Janeiro">Janeiro</option>
				    			<option value="Fevereiro">Fevereiro</option>
				    			<option value="Março">Março</option>
				    			<option value="Abril">Abril</option>
				    			<option value="Maio">Maio</option>
				    			<option value="Junho">Junho</option>
				    			<option value="Julho">Julho</option>
				    			<option value="Agosto">Agosto</option>
				    			<option value="Setembro">Setembro</option>
				    			<option value="Outubro">Outubro</option>
				    			<option value="Novembro">Novembro</option>
				    			<option value="Dezembro">Dezembro</option>
				    		</select>
				    	</td>
				    	<td>
				    		<button type="submit" class="btn btn-success">Cadastrar</button>
				    	</td>
	    			</tr>
	    		</tbody>
	    		</table>
	    	</form>
	    </div>

	<!-- Fim do corpo do site-->    
	</div>

	<!--Rodape do site. Ideal Empresa Junior-->
	<div class="row">
		<div class="col-xs-12 rodape">
			<footer>
				<a href="ideadljr.php">ideal Empresa Jr</a> - Todos os direitos reservados.
			</footer>
		</div>
	</div>
	<script src="../js/bootstrap.js" type="text/javascript"></script>
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>

</body>
</html>
