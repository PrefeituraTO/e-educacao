<?php require_once("cabecalho.php"); 		
 require_once("banco-aluno.php"); 

 $ID = $_POST['ID'];
 removeAluno($conexao, $ID);
 $_SESSION["success"] = "Aluno removido com sucesso.";
 header("Location: aluno-lista.php");
 die();
 ?>
 