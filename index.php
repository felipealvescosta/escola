<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="author" content="Felipe Alves da Costa">
	<meta name="viewport" content="width=device-width">
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/estilo_teste.css">

	<link href="http://fonts.googleapis.com/css?family=Tienne" rel="stylesheet" type="text/css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <style>
    	body {
          -webkit-font-smoothing: antialiased;
          font: normal 15px/1.5 "Helvetica Neue", Helvetica, Arial, sans-serif;
          color: #232525;
        }
        
        #slides .slidesjs-navigation {
          margin-top:5px;
        }

        a.slidesjs-next,
        a.slidesjs-previous,
        a.slidesjs-play,
        a.slidesjs-stop {
          background-image: url(img/slide/btns-next-prev.png);
          background-repeat: no-repeat;
          width:12px;
          height:18px;
          overflow:  hidden;
          text-indent: -9999px;
          float: left;
          margin-right:5px;
        }

        a.slidesjs-next {
          margin-right:10px;
          background-position: -12px 0;
        }

        a:hover.slidesjs-next {
          background-position: -12px -18px;
        }

        a.slidesjs-previous {
          background-position: 0 0;
        }

        a:hover.slidesjs-previous {
          background-position: 0 -18px;
        }

        a.slidesjs-play {
          width:15px;
          background-position: -25px 0;
        }

        a:hover.slidesjs-play {
          background-position: -25px -18px;
        }

        a.slidesjs-stop {
          width:18px;
          background-position: -41px 0;
        }

        a:hover.slidesjs-stop {
          background-position: -41px -18px;
        }

        .slidesjs-pagination {
          margin: 7px 0 0;
          float: right;
          list-style: none;
        }

        .slidesjs-pagination li {
          float: left;
          margin: 0 1px;
        }

        .slidesjs-pagination li a {
          display: block;
          width: 13px;
          height: 0;
          padding-top: 13px;
          background-image: url(img/slide/pagination.png);
          background-position: 0 0;
          float: left;
        }

        .slidesjs-pagination li a.active,
        .slidesjs-pagination li a:hover.active {
          background-position: 0 -13px
        }

        .slidesjs-pagination li a:hover {
          background-position: 0 -26px
        }        
      </style>
      <!-- End SlidesJS Optional-->
</head>


<body>
	<div class="container">
		<!--Div do logo, utilizada com Grid-->
		<div class="row">
      <div class="col-xs-2 logo">
          <a href="#"><img src="img/logo.png" width="150" height="150"></a>
      </div>
			<div class="col-xs-10 logoescola">
				<h1>EEEP Antonio Rodrigues de Oliveira <br><small>Conviver, Fazer, Conhecer e Ser!</small></h1>
			</div>
		</div>
		<div class="row espacotopo">
			<div class="col-xs-12">
          	</div>
		</div>

    <!-- Barra de navegacao--> 
    	<div class="row">
                  <div class="col-xs-12">
                    <div class="drop">
            
			            <ul class="drop_menu">
				            <li><a href='#'>Escola</a>
			            </li>
			            
			            <li><a href='#'>Cursos Profissionais</a>
				            <ul>
				            	<li><a href='#agronegocio.html'>Agronégocio</a></li>
				            	<li><a href='#enfermagem.html'>Enfermagem</a></li>
				            	<li><a href='#eletrotecnica.html'>Eletrotécnica</a></li>
				            	<li><a href='#informatica.html'>Informática</a></li>
				            	<li><a href='#rededecomputadores.html'>Redes de Computadores</a></li>
				            </ul>
			            </li>

			            <li><a href='#'>Disciplinas</a>
				            <ul>
				            	<li><a href='#portugues.html'>Português</a></li>
				            	<li><a href='#ingles.html'>Inglês</a></li>
						        <li><a href='#sociologia.html'>Sociologia</a></li>
						        <li><a href='#filosofia.html'>Filosofia</a></li> 
						        <li><a href='#historia.html'>História</a></li>      
						        <li><a href='#artes.html'>Artes</a></li>       
						        <li><a href='#matematica.html'>Matemática</a></li>    
						        <li><a href='#fisica.html'>Física</a></li>    
						        <li><a href='#biologia.html'>Biologia</a></li>    
						        <li><a href='#quimica.html'>Química</a></li> 
						        <li><a href='#tese.html'>TESE</a></li> 
						        <li><a href='#empreendedorismo'>Empreendedorismo</a></li> 
						        <li><a href='#cidada'>Formação Cidadã</a></li> 
						        <li><a href='#projeto'>Projeto</a></li> 
						        <li><a href='#he'>Horário de Estudo</a></li> 

			            	</ul>
			            </li>

			            <li><a href='#f'>Feiras</a>
				            <ul>
				            	 <li><a href='#feiradasprofissoes.html'>Feira das PRofissōes</a></li> 
				            	 <li><a href='#fecep'>FECEP</a></li> 
				            	 <li><a href='#semenfer'>Semana da Enfermagem</a></li> 
				            	 <li><a href='#sempoesia'>Semana da Poesia</a></li> 
				            </ul>
			            </li>

			            <li><a href='#'>Avaliações Externas</a>
				            <ul>
				            	<li><a href='#he'>Enem 2014</a></li>  
				            	<li><a href='#he'>SPAECE</a></li> 
				            	<li><a href='#he'>OBMEP</a></li>
				            	<li><a href='#he'>OBI</a></li>  
				            	<li><a href='#he'></a></li>  

				            </ul>
			            </li>

			            <li><a href='#'>Outros Sites</a>
				            <ul>
				            	 <li><a href='#link' target="about_blank">Rumo à Universidade</a></li>
				            	 <li><a href="http://www.seduc.ce.gov.br" target="about_blank" />Seduc-CE</a></li>
				            	 <li><a href='#descomplica' target="about_blank">Descomplica</a></li>
				            </ul>
			            </li>
			            
                  <li><a href="#frequencia.php">Frequência Escolar</a></li>
                  <li><a href="#gremio/">Grêmio</a></li>
			            </ul>
			  		</div>
      			   </div>
    	</div><!--FIM menu-->
    	<div class="row espaco">
			<div class="col-xs-12">
      </div>
		</div>
		<!-- Conteudo dos Slides -->
		<div class="row">
			<div class="col-xs-9 slide">
				<div id="slides">
			      <img src="img/slide/example-slide-1.jpg" alt="Photo by: Missy S Link: http://www.flickr.com/photos/listenmissy/5087404401/" height="350">
			      <img src="img/slide/example-slide-2.jpg" alt="Photo by: Daniel Parks Link: http://www.flickr.com/photos/parksdh/5227623068/" height="350">
			      <img src="img/slide/example-slide-3.jpg" alt="Photo by: Mike Ranweiler Link: http://www.flickr.com/photos/27874907@N04/4833059991/" height="350">
			      <img src="img/slide/example-slide-4.jpg" alt="Photo by: Stuart SeegerLink: http://www.flickr.com/photos/stuseeger/97577796/" height="350">
			    </div>
			</div>
      <!--Fim Slides-->

      <!-- Menu Sistemas-->
			<div class="col-xs-3 menulatescola">
				<nav>
		          <ul class="nav">
		   		      <li>Sistemas</li>
		              <li><a href="biblioteca/">Biblioteca</a></li>
		              <li><a href="#">Enfermagem</a></li>
		              <li><a href="#">Estágio</a></li>
		              <li><a href="ideal/">Ideal Jr</a></li>
		              <li><a href="noticias/">Noticias</a></li>
                  <li><a href="agendamento/">Agendamento Labs</a></li>
		          </ul>
				</nav>
			</div>
		</div>
      <!--Fim menu sistemas-->
      <!-- NOticias escola-->
    <div class="row">
      <div class="col-xs-9 noticiasEscola">
        <h3>Noticias recentes </h3>
        <hr>     
        <!-- consultas aqui -->
        <?php 
        $conecta = mysql_connect("localhost", "root","074932") or print (mysql_error()); 
        mysql_select_db("escola", $conecta) or print(mysql_error()); 
        $sql = "SELECT id, titulo , noticia , autor , data FROM tb_noticias ORDER BY id DESC"; 
        $result = mysql_query($sql, $conecta); 
         
        /* Escreve resultados até que não haja mais linhas na tabela */ 
        
        while($consulta = mysql_fetch_array($result)) {
           print "<p bgcolor=gray'>";
           print "<h2>$consulta[titulo]</h2>"; 
           print " <p>$consulta[noticia]</p>";
           print "<h5>$consulta[autor]</h5>"; 
           print "<h5>$consulta[data]</h5>";
           print "<br>";
           print "</p>";
          
        } 
        mysql_free_result($result); 
        mysql_close($conecta); 
        ?>
      </div>
    <!-- Fim notícias -->
    <!-- Enquete e links-->
      <div class="col-xs-3 enquete">
        <h4>Enquete da Semana</h4>
        <!-- Script Aqui --> 
      </div>
    <!-- Fim enquentes e links-->
    </div>
    <!-- Rodapé-->
		<div class="row">
				<div class="col-xs-12 rodape">
					<footer>
						Desenvolvido por<a href='ideal/'> Ideal Empresa Jr &copy</a> 
					</footer>
				</div>
			</div>
    <!--Fim rodapé -->

		

  		<!-- SlidesJS Required: Link to jquery.slides.js -->
  		<script src="js/bootstrap.js" type="text/javascript"></script>
	    <script src="js/bootstrap.min.js" type="text/javascript"></script>
	    <!-- SlidesJS Required: Link to jQuery -->
  		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  		<script src="js/jquery.slides.min.js"></script>
  		<!-- End SlidesJS Required -->

  		<!-- SlidesJS Required: Initialize SlidesJS with a jQuery doc ready -->
  		<script>
    	$(function() {
      	$('#slides').slidesjs({
   			width: 600,
        height: 250,
        	play: {
          		active: true,
          		auto: true,
          		interval: 4000,
          		swap: true
        		}
      		});
    	});
  		</script>
  		<!-- End SlidesJS Required -->	
  	</div>
		<!-- fim container--> 
    
</body>
</html>