<?php require_once("cabecalho.php"); 
 require_once("banco-aluno.php");
  ?>
<div style="width:1200px; height: 500px; overflow: auto;">
	<h1 align="center">Alunos cadastrados</h1>
<table class="table table-striped table-bordered">
	<tr>
		<th colspan="2"></th>
		<th>Matrícula</th>
		<th>Aluno</th>
		<th>Mãe</th>
		<th>Pai</th>
        <th>Responsável</th>
        <th>Sexo</th>
        <th>Nascimento</th>
        <th>Rua</th>
        <th>Bairro</th>
        <th>Número</th>
        <th>Cidade</th>
        <th>Estado</th>
        <th>Complemento</th>
        <th>Zoneamento</th>
        <th>Vaga</th>
        <th>Deficiente</th>
        <th>Deficiente_Qual</th>
        <th>Telefone Mãe</th>
        <th>Telefone Pai</th>
        <th>Telefone Responsável</th>
        <th>Doc. Identificação</th>
        <th>Resp. Informação</th>
        <th>Funcionário</th>        
	</tr>
	<?php
		$alunos = listaAlunos($conexao);
		foreach($alunos as $aluno) :
	?>
	<tr>
		<!--<td>
			<form action="remove-aluno.php" method="post">
				<input type="hidden" name="ID" value="<?=$aluno['ID']?>">
				<button class="btn btn-danger">remover</button>
			</form>
		</td>-->
		<td><a class="btn btn-warning" href="aluno-imprime-formulario.php?ID=<?=$aluno['ID']?>">Imprimir</a></td>
		<td><a class="btn btn-primary" href="aluno-altera-formulario.php?ID=<?=$aluno['ID']?>">Alterar</a></td>
		<td><?= $aluno['ID'] ?></td>
		<td><?= $aluno['Nome'] ?></td>
		<td><?= $aluno['Mae'] ?></td>
		<td><?= $aluno['Pai'] ?></td>
		<td><?= $aluno['Responsavel'] ?></td>
		<td><?= $aluno['Sexo'] ?></td>
		<td><?= $aluno['Nascimento'] ?></td>
		<td><?= $aluno['Rua'] ?></td>
		<td><?= $aluno['Bairro'] ?></td>
		<td><?= $aluno['Numero'] ?></td>
		<td><?= $aluno['Cidade'] ?></td>
		<td><?= $aluno['Estado'] ?></td>
		<td><?= $aluno['Complemento'] ?></td>
		<td><?= $aluno['Zoneamento'] ?></td>
		<td><?= $aluno['Vaga'] ?></td>
		<td><?= $aluno['Deficiente'] ?></td>
		<td><?= $aluno['Deficiente_Qual'] ?></td>
		<td><?= $aluno['Tel_Mae'] ?></td>
		<td><?= $aluno['Tel_Pai'] ?></td>
		<td><?= $aluno['Tel_Responsavel'] ?></td>
		<td><?= $aluno['Doc_Identificacao'] ?></td>
		<td><?= $aluno['Resp_Informacao']?></td>
		<td><?= $aluno['Funcionario']?></td>
	</tr>
	<?php
		endforeach
	?>	
</table>		
</div>

<?php include("rodape.php"); ?>			
