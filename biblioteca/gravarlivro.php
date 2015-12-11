<?php

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$editora = $_POST['editora'];
$genero = $_POST['genero'];
$isbn = $_POST['isbn'];
$quantidade = $_POST['quantidade'];
$reg_biblioteca = $_POST['reg_biblioteca'];
$imagem = $_POST['imagem'];

$connect = mysql_connect('localhost','root','felipe007');
$db = mysql_select_db('escola');
$query_select = "SELECT isbn FROM tb_livro WHERE isbn = '$isbn'";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
$logarray = $array['isbn'];

    if($isbn== "" || $isbn== null){
        echo"<script language='javascript' type='text/javascript'>alert('O campo ISBN deve ser preenchido');
        window.location.href='cadastrarlivro.php';</script>";

    }else{
        if($logarray == $isbn){
            echo"<script language='javascript'   charset='utf-8' type='text/javascript'>alert('Esse titulo já existe. 
            Tente um titulo diferente!');
            window.location.href='cadastrarlivro.php';</script>";
               die();
        }else{
            
            $query = "INSERT INTO tb_livro ( titulo,isbn,autor,editora,genero,qtd,reg,imagem ) 
            VALUES ('$titulo','$isbn','$autor','$editora','$genero','$quantidade','$reg_biblioteca','$imagem')";
           
            $insert = mysql_query($query,$connect);
        //    if (($_POST['nome']) && ($_FILES['imagem']['name'])) {
          //      move_uploaded_file($_FILES['imagem']['tmp_name'], "livros/".$_FILES['imagem']['name']);
                // $sql_insert = mysql_query("INSERT INTO usuarios ( nome , foto) values('".$_POST['nome']."', 'fotos/".$_FILES['foto']['name']."')");
          //}
 

            if($insert){
                echo"<script language='javascript'  charset='utf-8' type='text/javascript'>alert('Livro cadastrado com Sucesso!');
                window.location.href='index.php'</script>";
            }else{
                echo"<script language='javascript' charset='utf-8' type='text/javascript'>alert('Não foi possível cadastrar o livro,
                 tente novamente!');window.location.href='cadastrarlivro.php'</script>";
                }
         }   
        }
?>