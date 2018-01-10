<?php
require_once("conecta.php");			
function listaAlunos($conexao) {
	$alunos = array();
	$resultado = mysqli_query($conexao, "select * from aluno order by ID");
	while($aluno = mysqli_fetch_assoc($resultado)) {
		array_push($alunos, $aluno);
	}
	return $alunos;
}

function insereAluno($conexao) {
    $Quando = date('Y-m-d H:i:s');
	$query = "INSERT INTO aluno (Nome, Mae, Pai, Responsavel, Sexo, Nascimento, Rua, Numero, Bairro, 
	Cidade, Estado, Complemento, Zoneamento, Vaga, Tel_Mae, Tel_Pai, Tel_Responsavel, Parentesco, Doc_Identificacao, 
	Transf_Particular, Bolsa_Familia, Num_Cartao, Resp_Trabalha, Moradia, Deficiente, Deficiente_Qual, Renda, Resp_Informacao, Funcionario, Quando) 
	VALUES ('".$_POST['Nome']."', '".$_POST['Mae']."','".$_POST['Pai']."','".$_POST['Responsavel']."','".$_POST['Sexo']."',
	'".$_POST['Nascimento']."', '".$_POST['Rua']."', '".$_POST['Numero']."','".$_POST['Bairro']."', '".$_POST['Cidade']."', 
	'".$_POST['Estado']."','".$_POST['Complemento']."','".$_POST['Zoneamento']."', '".$_POST['Vaga']."', '".$_POST['Tel_Mae']."', 
	'".$_POST['Tel_Pai']."', '".$_POST['Tel_Responsavel']."', '".$_POST['Parentesco']."', '".$_POST['Doc_Identificacao']."', 
	'".$_POST['Transf_Particular']."', '".$_POST['Bolsa_Familia']."', '".$_POST['Num_Cartao']."', 
	'".$_POST['Resp_Trabalha']."', '".$_POST['Moradia']."','".$_POST['Deficiente']."', '".$_POST['Deficiente_Qual']."', '".$_POST['Renda']."', '".$_POST['Resp_Informacao']."', '".$_POST['Funcionario']."','".$Quando."')";
	return mysqli_query($conexao, $query);

}

function alteraAluno($conexao, $ID, $Nome, $Mae, $Pai, $Responsavel, $Sexo, $Nascimento, $Rua, $Numero, $Bairro, $Cidade,
     $Estado, $Complemento, $Zoneamento, $Vaga, $Deficiente, $Deficiente_Qual, $Tel_Mae, $Tel_Pai, $Tel_Responsavel,
     $Parentesco, $Doc_Identificacao, $Transf_Particular, $Bolsa_Familia, $Num_Cartao, $Renda, $Resp_Trabalha, $Moradia, 
     $Resp_Informacao, $Funcionario ) {
	$query = "update aluno set 
	Nome = '{$Nome}', 
	Mae = '{$Mae}',
	Pai = '{$Pai}',
	Responsavel = '{$Responsavel}',
	Sexo = '{$Sexo}',
	Nascimento = '{$Nascimento}', 
	Rua = '{$Rua}', 
	Bairro = '{$Bairro}', 
	Cidade = '{$Cidade}',
	Estado = '{$Estado}',
	Complemento = '{$Complemento}',
	Zoneamento = '{$Zoneamento}',
	Vaga = '{$Vaga}',
	Deficiente = '{$Deficiente}',
	Deficiente_Qual = '{$Deficiente_Qual}',
	Tel_Mae = '{$Tel_Mae}',
	Tel_Pai = '{$Tel_Pai}',
	Tel_Responsavel = '{$Tel_Responsavel}',
	Parentesco = '{$Parentesco}',
	Doc_Identificacao = '{$Doc_Identificacao}',
	Transf_Particular = '{$Transf_Particular}',
	Bolsa_Familia = '{$Bolsa_Familia}',
	Num_Cartao = '{$Num_Cartao}',
	Renda = '{$Renda}',
	Resp_Trabalha = '{$Resp_Trabalha}',
	Moradia = '{$Moradia}',
	Resp_Informacao = '{$Resp_Informacao}',
	Funcionario = '{$Funcionario}' 
	where ID = '{$ID}'";
	return mysqli_query($conexao, $query);
}



function buscaAluno($conexao, $ID) {
	$query = "select * from aluno where ID = {$ID}";
	$resultado = mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);
}

function removeAluno($conexao, $ID) {
	$query = "delete from aluno where ID = {$ID}";
	return mysqli_query($conexao, $query);
}