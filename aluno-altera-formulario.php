<?php require_once("cabecalho.php"); 
require_once("banco-aluno.php");

$ID = $_GET['ID'];
$aluno = buscaAluno($conexao, $ID);
?>			
	<form action="altera-aluno.php" method="post">
		<input type="hidden" name="ID" value="<?=$aluno['ID']?>">
		<div class="container container-fluid">
			<?php include("aluno-altera-base.php"); ?>
		</div>
		<tr>
				<td>
					<button class="btn btn-primary" type="submit">Alterar</button>
					<span class="pull-right"><a href="sair.php" class="btn btn-danger">Sair</a></span>
				</td>
			</tr>
	</form>
<?php include("rodape.php"); ?>			
