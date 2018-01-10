<?php
error_reporting(E_ALL ^ E_NOTICE);
  require_once("mostra-alerta.php"); ?>
<html>
<head>
	<meta charset="utf-8">
	<title>E-Educação</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/functions.js"></script>
</head>
<body>
	
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">E-Educação</a>
			</div>
			<div>
				<ul class="nav navbar-nav">
					<li><a href="aluno-formulario.php">Adicionar Aluno</a></li>
					<li><a href="aluno-lista.php">Alunos</a></li>
					<li><a href="lista-excel.php">Excel</a></li>
				</ul>
			</div>
		</div>
	</div>
	
	
	<div class="container" style="padding-top: 100px" class="col-md-12">
		<div class="principal">
		    <?php  mostraAlerta("success"); ?>
		    <?php mostraAlerta("danger"); ?>
			