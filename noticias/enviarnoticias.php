<?php

$titulo = $_POST['titulo'];
$mensagem = $_POST['mensagem'];
$autor = $_POST['autor'];

$connect = mysql_connect('localhost','root','felipe007');
$db = mysql_select_db('escola');
$query_select = "SELECT titulo FROM noticias WHERE titulo = '$titulo'";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
$logarray = $array['titulo'];
 
    if($titulo== "" || $titulo == null){
        echo"<script language='javascript'   charset='utf-8' type='text/javascript'>alert('O campo t\u00edtulo deve ser preenchido');window.location.href='cadastrarnoticia.php';</script>";
 
    }else{
        if($logarray == $titulo){
            echo"<script language='javascript'   charset='utf-8' type='text/javascript'>alert('Esse t\u00edtulo j\u00e1 existe. Tente um t\u00edtulo diferente!');window.location.href='cadastrarnoticia.php';</script>";
               die();
        }else{
    
            $query = "INSERT INTO noticias (titulo,noticia,autor) VALUES ('$titulo', '$mensagem','$autor')";
            $insert = mysql_query($query,$connect);                 
            if($insert){
                echo"<script language='javascript'  charset='utf-8' type='text/javascript'>alert('Not\u00edcia cadastrada com sucesso!');window.location.href='index.php'</script>";
            }else{
                echo"<script language='javascript' charset='utf-8' type='text/javascript'>alert('N\u00e3o foi poss\u00edvel cadastrar essa not\u00edcia, tente novamente!');window.location.href='cadastrarnoticia.php'</script>";
                }
         }   
        }
?>