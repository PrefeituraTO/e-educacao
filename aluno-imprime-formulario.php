<?php require_once("cabecalho.php"); 
require_once("banco-aluno.php");

$ID = $_GET['ID'];
$aluno = buscaAluno($conexao, $ID);
?>			
	<form action="altera-aluno.php" method="post">
		<input type="hidden" name="ID" value="<?=$aluno['ID']?>">
		<div class="container container-fluid">
			<?php include("reimpress.php"); ?>
		</div>
	</form>
<?php include("rodape.php"); ?>			
