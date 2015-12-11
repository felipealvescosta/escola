<?php

$ambiente = $_POST['ambiente'];
$horario = $_POST['horario'];
$dia = $_POST['dia'];
$mes = $_POST['mes'];


$connect = mysql_connect('localhost','root','felipe007');
$db = mysql_select_db('escola');
//$query_select = "SELECT ambiente FROM tb_agendamento WHERE ambiente = '$ambiente'";
//$select = mysql_query($query_select,$connect);
//$array = mysql_fetch_array($select);
//$logarray = $array['ambiente'];
 
 //   if($ambiente== "" || $ambiente == null){
 //       echo"<script language='javascript'   charset='utf-8' type='text/javascript'>alert('O campo ambiente deve ser preenchido');window.location.href='cad_agenda.php';</script>";
 
 //   }
   // else{
     //   if($logarray == $ambiente){
      //      echo"<script language='javascript'   charset='utf-8' type='text/javascript'>alert('Este agendamento j\u00e1 existe. Tente um horario diferente!');window.location.href='cad_agenda.php';</script>";
      //         die();
      //  }

      //  else{

            $query = "INSERT INTO tb_agendamento (ambiente, horario, dia, mes) VALUES ('$ambiente','$horario','$dia','$mes')";
            $insert = mysql_query($query,$connect);                 
            if($insert){
                echo"<script language='javascript'  charset='utf-8' type='text/javascript'>alert('Agendamento cadastrado com sucesso!');window.location.href='index.php'</script>";
            }
            else{
                echo"<script language='javascript' charset='utf-8' type='text/javascript'>alert('N\u00e3o foi poss\u00edvel agendar esse ambiente, tente novamente!');window.location.href='cad_agenda.php'</script>";
                }
        // }   
       // }
?>