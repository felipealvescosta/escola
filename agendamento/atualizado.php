<?php
$id = $_POST['id'];
$ambiente = $_POST['ambiente'];
$horario = $_POST['horario'];
$dia = $_POST['dia'];
$mes = $_POST['mes'];



print "$id <br>";
print "$ambiente <br>";
print "$horario <br>";
print "$dia <br>";
print "$mes";


  $conecta = mysql_connect("localhost", "root", "felipe007") or print (mysql_error()); 
  mysql_select_db("escola", $conecta) or print(mysql_error()); 

      $query = "UPDATE tb_agendamento SET ambiente = '$ambiente', horario='$horario', dia='$dia', mes='$mes' WHERE id_ag ='$id' ";
      $atualiza = mysql_query($query,$conecta);                 
        if($atualiza)
        {
           echo"<script language='javascript'  charset='utf-8' type='text/javascript'>alert('Agendamento atualizado com sucesso!');window.close()</script>";
        }
        else
        {
           echo"<script language='javascript' charset='utf-8' type='text/javascript'>alert('N\u00e3o foi poss\u00edvel atualizar esse ambiente, tente novamente!');window.close()</script>";
        }
?>