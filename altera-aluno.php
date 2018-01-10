<?php require_once("cabecalho.php"); 		
require_once("banco-aluno.php");

$ID = $_POST['ID'];
$Nome = $_POST['Nome'];
$Mae = $_POST['Mae'];
$Pai = $_POST['Pai'];
$Responsavel = $_POST['Responsavel'];
$Sexo = $_POST['Sexo'];
$Nascimento = $_POST['Nascimento'];
$Rua = $_POST['Rua'];
$Numero = $_POST['Numero'];
$Bairro = $_POST['Bairro'];
$Cidade = $_POST['Cidade'];
$Estado = $_POST['Estado'];
$Complemento = $_POST['Complemento'];
$Zoneamento = $_POST['Zoneamento'];
$Vaga = $_POST['Vaga'];
$Deficiente = $_POST['Deficiente'];
$Deficiente_Qual = $_POST['Deficiente_Qual'];
$Tel_Mae = $_POST['Tel_Mae'];
$Tel_Pai = $_POST['Tel_Pai'];
$Tel_Responsavel = $_POST['Tel_Responsavel'];
$Parentesco = $_POST['Parentesco'];
$Doc_Identificacao = $_POST['Doc_Identificacao'];
$Transf_Particular = $_POST['Transf_Particular'];
$Bolsa_Familia = $_POST['Bolsa_Familia'];
$Num_Cartao = $_POST['Num_Cartao'];
$Renda = $_POST['Renda'];
$Resp_Trabalha = $_POST['Resp_Trabalha'];
$Moradia = $_POST['Moradia'];
$Resp_Informacao = $_POST['Resp_Informacao'];
$Funcionario = $_POST['Funcionario'];

if(alteraAluno($conexao, $ID, $Nome, $Mae, $Pai, $Responsavel, $Sexo, $Nascimento, $Rua, $Numero, $Bairro, $Cidade,
	$Estado, $Complemento, $Zoneamento, $Vaga, $Deficiente, $Deficiente_Qual, $Tel_Mae, $Tel_Pai, $Tel_Responsavel,
	$Parentesco, $Doc_Identificacao, $Transf_Particular, $Bolsa_Familia, $Num_Cartao, $Renda, $Resp_Trabalha, $Moradia,
	$Resp_Informacao, $Funcionario)) { ?>
	<p class="text-success">O Aluno foi alterado.</p>
<?php } else {
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">O Aluno não foi alterado: <?= $msg?></p>
<?php
}
?>

<?php include("rodape.php"); ?>			
