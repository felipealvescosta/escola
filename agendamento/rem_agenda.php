<?php


$ido = $_GET['id_ag'];

$connect = mysql_connect('localhost','root','felipe007');

$db = mysql_select_db('escola',$connect);

$query =mysql_query("DELETE  FROM tb_agendamento WHERE id_ag = '$ido' ");

if ($query) {
    echo " <script language='javascript' charset='utf-8' type='text/javascript'>alert('Agendamendo removido com sucesso!');window.location.href='remove_agenda.php'</script>";  
}
else{
  echo "<script language='javascript' charset='utf-8' type='text/javascript'>alert(':( Algo deu errado, tente novamente!');window.location.href='remove_agenda.php'</script>";
}

mysql_close($connect);

?>

