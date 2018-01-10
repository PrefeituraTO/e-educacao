<?php require_once("cabecalho.php"); 		
require_once("banco-aluno.php"); 

$_SESSION['EDUCACAO']=$_POST;
	extract ($_POST);


if(insereAluno($conexao)) { ?>
	<p class="text-success">O Aluno foi adicionado.</p>
    <?php
    $ID = mysqli_insert_id($conexao);
    $_SESSION['ID'] = $ID;
	header('location: imprime.php');
	?>
<?php } else {
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">O aluno não foi adicionado: <?= $msg?></p>
<?php
}
?>

<?php include("rodape.php"); ?>			
