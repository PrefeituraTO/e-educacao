<?php require_once("cabecalho.php"); 
$aluno = array("Nome" => "", "Mae" => "", "Endereco" => "",  "Bairro" => "", "Cidade" => "");

?>			
	<h1>Inscrição do Aluno</h1>
	<form action="adiciona-aluno.php" method="post">
		<table class="table">
			
			<?php include("aluno-formulario-base.php"); ?>

			<tr>
				<td>
					<button class="btn btn-primary" type="submit">Cadastrar</button>
					<span class="pull-right"><a href="sair.php" class="btn btn-danger">Sair</a></span>
				</td>
			</tr>
		</table>
	</form>
<?php include("rodape.php"); ?>			
