<h1>Cadastro da Educação Infantil 2018</h1>
<div class="row">
	<div class="col-md-6"><label>Zoneamento?</label>
	<select class="form-control" name="Zoneamento" required>
	<option value="">Escolha...</option>
	<option value="Água Mineral"<?php if($_SESSION['EDUCACAO']['Zoneamento']=="Água Mineral") echo "selected";?>>Água Mineral</option>	
	<option value="Altino Barbosa"<?php if($_SESSION['EDUCACAO']['Zoneamento']=="Altino Barbosa") echo "selected";?>>Altino Barbosa</option>
	<option value="Alto do Instituto"<?php if($_SESSION['EDUCACAO']['Zoneamento']=="Alto do Instituto") echo "selected";?>>Alto do Instituto</option>
	<option value="Barreiros"<?php if($_SESSION['EDUCACAO']['Zoneamento']=="Barreiros") echo "selected";?>>Barreiros</option>
	<option value="Bela Vista"<?php if($_SESSION['EDUCACAO']['Zoneamento']=="Bela Vista") echo "selected";?>>Bela Vista</option>
	<option value="Belvedere"<?php if($_SESSION['EDUCACAO']['Zoneamento']=="Belvedere") echo "selected";?>>Belvedere</option>
	<option value="Castro Pires"<?php if($_SESSION['EDUCACAO']['Zoneamento']=="Castro Pires") echo "selected";?>>Castro Pires</option>
	<option value="Centro" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Centro") echo "selected";?>>Centro</option>
	<option value="Cidade Alta" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Cidade Alta") echo "selected";?>>Cidade Alta</option>
	<option value="Cidade Nova" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Cidade Nova") echo "selected";?>>Cidade Nova</option>Nova
	<option value="Concórdia" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Concórdia") echo "selected";?>>Concórdia</option>
	<option value="Doze de Outubro" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Doze de Outubro") echo "selected";?>>Doze de Outubro</option>
	<option value="Doutor Laerte Laender" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Doutor Laerte Laender") echo "selected";?>>Doutor Laerte Laender</option>
	<option value="Eldorado" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Eldorado") echo "selected";?>>Eldorado</option>
	<option value="Eucalipto" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Eucalipto") echo "selected";?>>Eucalipto</option>
	<option value="Esperança" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Esperança") echo "selected";?>>Esperança</option>
	<option value="Fátima" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Fátima") echo "selected";?>>Fátima</option>
	<option value="Fazenda Arnô" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Fazenda Arnô") echo "selected";?>>Fazenda Arnô</option>
	<option value="Filadélfia" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Filadélfia") echo "selected";?>>Filadélfia</option>
	<option value="Felicidade" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Felicidade") echo "selected";?>>Felicidade</option>
	<option value="Frei Dimas" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Frei Dimas") echo "selected";?>>Frei Dimas</option>
	<option value="Frei Júlio" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Frei Júlio") echo "selected";?>>Frei Júlio</option>
	<option value="Frimusa" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Frimusa") echo "selected";?>>Frimusa</option>
	<option value="Funcionários" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Funcionários") echo "selected";?>>Funcionários</option>
	<option value="Gangorrinha/Minas Novas" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Gangorrinha/Minas Novas") echo "selected";?>>Gangorrinha/Minas Novas</option>
	<option value="Grão-pará" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Grão-pará") echo "selected";?>>Grão-pará</option>
	<option value="Indaiá" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Indaiá") echo "selected";?>>Indaiá</option>
	<option value="Itaguaçu" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Itaguaçu") echo "selected";?>>Itaguaçu</option>
	<option value="Ipiranga" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Ipiranga") echo "selected";?>>Ipiranga</option>
	<option value="Jardim das Acácias" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Jardim das Acácias") echo "selected";?>>Jardim das Acácias</option>
	<option value="Jardim Floresta" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Jardim Floresta") echo "selected";?>>Jardim Floresta</option>
	<option value="Jardim Iracema" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Jardim Iracema") echo "selected";?>>Jardim Iracema</option>
	<option value="Jardim São Paulo" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Jardim São Paulo") echo "selected";?>>Jardim São Paulo</option>
	<option value="Joaquim Pedrosa" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Joaquim Pedrosa") echo "selected";?>>Joaquim Pedrosa</option>
	<option value="Laerte Laender" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Laerte Laender") echo "selected";?>>Laerte Laender</option>
	<option value="Lourival Soares da Costa" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Lourival Soares da Costa") echo "selected";?>>Lourival Soares de Costa</option>
	<option value="Manoel Pimenta" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Manoel Pimenta") echo "selected";?>>Manoel Pimenta</option>
	<option value="Matinha" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Matinha") echo "selected";?>>Matinha</option>
	<option value="Marajoara" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Marajoara") echo "selected";?>>Marajoara</option>
	<option value="Minas Novas" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Minas Novas") echo "selected";?>>Minas Novas</option>
	<option value="Monte Carlo" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Monte Carlo") echo "selected";?>>Monte Carlo</option>
	<option value="Morro da Rádio" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Morro da Rádio") echo "selected";?>>Morro da Rádio</option>
	<option value="Morro do Cemitério/Vila Progresso" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Morro do Cemitério/Vila Progresso") echo "selected";?>>Morro do Cemitério/Vila Progresso</option>
	<option value="Mucuri" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Mucuri") echo "selected";?>>Mucuri</option>
	<option value="Novo Horizonte" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Novo Horizonte") echo "selected";?>>Novo Horizonte</option>
	<option value="Olga Prates Corrêa" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Olga Prates Corrêa") echo "selected";?>>Olga Prates Corrêa</option>
	<option value="Palmeiras" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Palmeiras") echo "selected";?>>Palmeiras</option>
	<option value="Pampulhinha" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Pampulhinha") echo "selected";?>>Pampulhinha</option>
	<option value="Santa Clara" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Santa Clara") echo "selected";?>>Santa Clara</option>
	<option value="São Benedito" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="São Benedito") echo "selected";?>>São Benedito</option>
	<option value="São Cristóvão" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="São Cristóvão") echo "selected";?>>São Cristóvão</option>
	<option value="São Diogo" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="São Diogo") echo "selected";?>>São Diogo</option>
	<option value="São Francisco" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="São Francisco") echo "selected";?>>São Francisco</option>
	<option value="São Jacinto" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="São Jacinto") echo "selected";?>>São Jacinto</option>
	<option value="São João" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="São João") echo "selected";?>>São João</option>
	<option value="Serra Verde" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Serra Verde") echo "selected";?>>Serra Verde</option>
	<option value="Soares da Costa" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Soares da Costa") echo "selected";?>>Soares da Costa</option>
	<option value="Solidariedade" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Solidariedade") echo "selected";?>>Solidariedade</option>
	<option value="Suíça I e II" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Suíça I e II") echo "selected";?>>Suíça I e II</option>
	<option value="Tabajaras" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Tabajaras") echo "selected";?>>Tabajaras</option>
	<option value="Taquara" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Taquara") echo "selected";?>>Taquara</option>
	<option value="Teófilo Rocha" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Teófilo Rocha") echo "selected";?>>Teófilo Rocha</option>
	<option value="Turma 36" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Turma 36") echo "selected";?>>Turma 36</option>
	<option value="Turma 37" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Turma 37") echo "selected";?>>Turma 37</option>
	<option value="Turma 38" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Turma 38") echo "selected";?>>Turma 38</option>
	<option value="Vila Barreiros" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Vila Barreiros") echo "selected";?>>Vila Barreiros</option>
	<option value="Vila Betel" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Vila Betel") echo "selected";?>>Vila Betel</option>
	<option value="Vila da Palha" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Vila da Palha") echo "selected";?>>Vila da Palha</option>
	<option value="Vila Esperança" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Vila Esperança") echo "selected";?>>Vila Esperança</option>
	<option value="Vila Jacaré" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Vila Jacaré") echo "selected";?>>Vila Jacaré</option>
	<option value="Vila Ramos" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Vila Ramos") echo "selected";?>>Vila Ramos</option>
	<option value="Vila Verônica" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Vila Verônica") echo "selected";?>>Vila Verônica</option>
	<option value="Vila Vitória" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Vila Vitória") echo "selected";?>>Vila Vitória</option>
	<option value="Vilinha" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Vilinha") echo "selected";?>>Vilinha</option>
	<option value="Viriato" <?php if($_SESSION['EDUCACAO']['Zoneamento']=="Viriato") echo "selected";?>>Viriato</option>
	</select>
</div>
<div class="col-md-6">
	<label>Período da Educação infantil em que a vaga é solicitada?</label>
<select name="Vaga" class="form-control" required>
	<option value="">Escolha...</option>
	<option value="Berçario 1"<?php if($_SESSION['EDUCACAO']['Vaga']=="Berçario 1") echo "selected";?>>Berçario 1 - nascidos de 01/07/2017 a 31/08/2017</option>
	<option value="Berçario 2"<?PHP if($_SESSION['EDUCACAO']['Vaga']=="Berçario 2") echo "selected";?>>Berçario 2 - 01 ano - nascidos de 01/07/2016 a 30/06/2017</option>
	<option value="Maternal 1"<?php if($_SESSION['EDUCACAO']['Vaga']=="Maternal 1") echo "selected";?>>Maternal 1 - 02 anos - nascidos de 01/07/2015 a 30/06/2016</option>
	<option value="Maternal 2"<?php if($_SESSION['EDUCACAO']['Vaga']=="Maternal 2") echo "selected";?>>Maternal 2 - 03 anos - nascidos de 01/07/2014 a 30/06/2015</option>
	<option value="1º Período"<?php if($_SESSION['EDUCACAO']['Vaga']=="1º Período") echo "selected";?>>1º Período 2 - 04 anos - nascidos de 01/07/2013 a 30/06/2014</option>
	<option value="2º Período"<?php if($_SESSION['EDUCACAO']['Vaga']=="2º Período") echo "selected";?>>2º Período 2 - 05 anos - nascidos de 01/07/2012 a 30/06/2013</option>
</select>
</div>
</div>

<h2>Dados da Criança</h2>
<div class="row">
	<div class="col-md-5"><label>Nome:</label>
	<input class="form-control" type="text" name="Nome" required value="<?php echo $_SESSION['EDUCACAO']['Nome']?>">
	</div>
	<div class="col-md-3"><label>Data Nascimento</label>
	<input type="text" name="Nascimento" value="<?php echo $_SESSION['EDUCACAO']['Nascimento']?>" class="form-control" onkeyup="dataConta(this);" minlength="10" maxlength="10" onkeypress='return SomenteNumero(event)'>	
	</div>
	<div class="col-md-4"><label>Sexo:</label>
		<input type="radio" name="Sexo" value="Masculino" required <?php if($_SESSION['EDUCACAO']['Sexo']=="Masculino") echo "checked";?>>Masculino
		<input type="radio" name="Sexo" value="Feminino" <?php if($_SESSION['EDUCACAO']['Sexo']=="Feminino") echo "checked";?>>Feminino
	</div>
</div>

<div class="row">
	<div class="col-md-6">
	<label>Apresentou algum documento de identificação?</label>
	Sim:<input type="radio" name="Doc_Identificacao" required value="Sim" <?php if($_SESSION['EDUCACAO']['Doc_Identificacao']=="Sim") echo "checked";?>>
	Não:<input type="radio" name="Doc_Identificacao" value="Não" <?php if($_SESSION['EDUCACAO']['Doc_Identificacao']=="Não") echo "checked";?>>
	</div>
	<div class="col-md-6">
	<label>Criança transferida da rede particular?</label>
	Sim:<input type="radio" name="Transf_Particular" required value="Sim" <?php if($_SESSION['EDUCACAO']['Transf_Particular']=="Sim") echo "checked";?>>
	Não:<input type="radio" name="Transf_Particular" value="Não" <?php if($_SESSION['EDUCACAO']['Transf_Particular']=="Não") echo "checked";?>>	
	</div>
</div>
<h2>Dados Gerais:</h2>
<div class="row">
	<div class="col-md-7">Mãe:
	<input  class="form-control" type="text" name="Mae" value="<?php echo $_SESSION['EDUCACAO']['Mae']?>">
    </div>
    <div class="col-md-5">Telefone Mãe:	
	<input type="text" name="Tel_Mae" class="form-control" value="<?php echo $_SESSION['EDUCACAO']['Tel_Mae']?>">
	</div>
</div>

<div class="row">
	<div class="col-md-7">
	Pai:<input type="text" name="Pai" class="form-control" value="<?php echo $_SESSION['EDUCACAO']['Pai']?>">
    </div>
    <div class="col-md-5">
	Telefone Pai:<input type="text" name="Tel_Pai" class="form-control" value="<?php echo $_SESSION['EDUCACAO']['Tel_Pai']?>">	
	</div>
</div>

<div class="row">
	<div class="col-md-6">Responsável:
	<input type="text" name="Responsavel" class="form-control" value="<?php echo $_SESSION['EDUCACAO']['Responsavel']?>">
    </div>
    <div class="col-md-4">Parentesco:
	<input type="text" name="Parentesco" class="form-control" value="<?php echo $_SESSION['EDUCACAO']['Parentesco']?>">	
	</div>
	<div class="col-md-2">Telefone Responsável
	<input type="text" name="Tel_Responsavel" class="form-control" value="<?php echo $_SESSION['EDUCACAO']['Tel_Responsavel']?>">	
	</div>
</div>

<h2>Endereço:</h2>
<div class="row">
    <div class="col-md-4">Rua:
    <input  class="form-control" type="text" name="Rua" value="<?php echo $_SESSION['EDUCACAO']['Rua']?>">
    </div>
    <div class="col-md-4">Nº:
   	<input type="text" name="Numero" class="form-control" value="<?php echo $_SESSION['EDUCACAO']['Numero']?>">
   </div>
    <div class="col-md-4">Bairro:
	<input  class="form-control" type="text" name="Bairro" value="<?php echo $_SESSION['EDUCACAO']['Bairro']?>">
    </div>
</div>

<div class="row">    
    <div class="col-md-4">Cidade:
	<input  class="form-control" type="text" name="Cidade" value="<?php echo $_SESSION['EDUCACAO']['Cidade']?>">
   </div>
   <div class="col-md-4">Complemento:
   	<input type="text" name="Complemento" class="form-control" value="<?php echo $_SESSION['EDUCACAO']['Complemento']?>">
   </div>
   <div class="col-md-4">Estado:
   	<select class="form-control" name="Estado"> 
     <option value="Acre"<?php if($_SESSION['EDUCACAO']['Estado']=='Acre') echo "selected";?>>Acre</option>
     <option value="Alagoas"<?php if($_SESSION['EDUCACAO']['Estado']=='Alagoas') echo "selected";?>>Alagoas</option>
     <option value="Amapá"<?php if($_SESSION['EDUCACAO']['Estado']=='Amapá') echo "selected";?>>Amapá</option>	 
     <option value="Amazonas"<?php if($_SESSION['EDUCACAO']['Estado']=='Amazonas') echo "selected";?>>Amazonas</option>
     <option value="Bahia"<?php if($_SESSION['EDUCACAO']['Estado']=='Bahia') echo "selected";?>>Bahia</option>
     <option value="Ceará"<?php if($_SESSION['EDUCACAO']['Estado']=='Ceará') echo "selected";?>>Ceará</option>	 
     <option value="Distrito Federal"<?php if($_SESSION['EDUCACAO']['Estado']=='Distrito Federal') echo "selected";?>>Distrito Federal</option>	
     <option value="Espírito Santo"<?php if($_SESSION['EDUCACAO']['Estado']=='Espírito Santo') echo "selected";?>>Espírito Santo</option>
     <option value="Goiás"<?php if($_SESSION['EDUCACAO']['Estado']=='Goiás') echo "selected";?>>Goiás</option>
     <option value="Maranhão"<?php if($_SESSION['EDUCACAO']['Estado']=='Maranhão') echo "selected";?>>Maranhão</option>
     <option value="Mato Grosso"<?php if($_SESSION['EDUCACAO']['Estado']=='Mato Grosso') echo "selected";?>>Mato Grosso</option>	 
     <option value="Mato Grosso do Sul "<?php if($_SESSION['EDUCACAO']['Estado']=='Mato Grosso do Sul ') echo "selected";?>>Mato Grosso do Sul </option>	 
     <option value="Minas Gerais"<?php if($_SESSION['EDUCACAO']['Estado']=='Minas Gerais') echo "selected";?>>Minas Gerais</option> 
     <option value="Pará"<?php if($_SESSION['EDUCACAO']['Estado']=='Pará') echo "selected";?>>Pará</option>	 
     <option value="Paraíba"<?php if($_SESSION['EDUCACAO']['Estado']=='Paraíba') echo "selected";?>>Paraíba</option>	 
     <option value="Paraná"<?php if($_SESSION['EDUCACAO']['Estado']=='Paraná') echo "selected";?>>Paraná</option>	 
     <option value="Pernambuco"<?php if($_SESSION['EDUCACAO']['Estado']=='Pernambuco') echo "selected";?>>Pernambuco</option>	 
     <option value="Piauí"<?php if($_SESSION['EDUCACAO']['Estado']=='Piauí') echo "selected";?>>Piauí</option>	 
     <option value="Rio de Janeiro"<?php if($_SESSION['EDUCACAO']['Estado']=='Rio de Janeiro') echo "selected";?>>Rio de Janeiro</option>	   
     <option value="Rio Grande do Norte"<?php if($_SESSION['EDUCACAO']['Estado']=='Rio Grande do Norte') echo "selected";?>>Rio Grande do Norte</option> 
     <option value="Rio Grande do Sul"<?php if($_SESSION['EDUCACAO']['Estado']=='Rio Grande do Sul') echo "selected";?>>Rio Grande do Sul</option>	  
     <option value="Rondônia"<?php if($_SESSION['EDUCACAO']['Estado']=='Rondônia') echo "selected";?>>Rondônia</option> 
     <option value="Roraima"<?php if($_SESSION['EDUCACAO']['Estado']=='Roraima') echo "selected";?>>Roraima</option>	 
     <option value="Santa Catarina"<?php if($_SESSION['EDUCACAO']['Estado']=='Santa Catarina') echo "selected";?>>Santa Catarina</option> 
     <option value="São Paulo"<?php if($_SESSION['EDUCACAO']['Estado']=='São Paulo') echo "selected";?>>São Paulo</option>
     <option value="Sergipe"<?php if($_SESSION['EDUCACAO']['Estado']=='Sergipe') echo "selected";?>>Sergipe</option>	 
     <option value="Tocantis"<?php if($_SESSION['EDUCACAO']['Estado']=='Tocantis') echo "selected";?>>Tocantis</option>	 

   	</select>
   </div>
</div>

<div class="row">
         <div class="col-md-6">
         <label>Possui algum tipo deficiência?</label><br />
	 <input type="radio" onclick="document.getElementById('Deficiente_Qual').disabled=false;" name="Deficiente" id="DeficienteS" value="SIM"<?php if($_SESSION['EDUCACAO']['Deficiente']=="SIM")echo "checked";?>  required/>Sim
         <input type="radio" onclick="document.getElementById('Deficiente_Qual').disabled=true; document.getElementById('Deficiente_Qual').value=null;"" name="Deficiente" id="DeficienteN" value="NAO"<?php if($_SESSION['EDUCACAO']['Deficiente']=="NAO")echo "checked"; ?>/>Não
         </div>
         <div class="col-md-6">
            <label>Tipo de deficiência:</label>
             <select name="Deficiente_Qual" disabled="disabled" class="form-control" id="Deficiente_Qual" value="<?php echo $_SESSION['EDUCACAO']['Deficiente_Qual']?>" required>
                 <option value="">Escolha...</option>
                 <option value="AUDITIVA"<?php if($_SESSION['EDUCACAO']['Deficiente_Qual']=="AUDITIVA")echo "selected"; ?>>Auditiva</option>
                 <option value="FISICA"<?php if($_SESSION['EDUCACAO']['Deficiente_Qual']=="FISICA")echo "selected"; ?>>Fisica</option>
                 <option value="INTELECTUAL"<?php if($_SESSION['EDUCACAO']['Deficiente_Qual']=="INTELECTUAL")echo "selected"; ?>>Intelectual</option>
		         <option value="FALA"<?php if($_SESSION['EDUCACAO']['Deficiente_Qual']=="FALA")echo "selected"; ?>>Fala</option>
		         <option value="OUTRA"<?php if($_SESSION['EDUCACAO']['Deficiente_Qual']=="OUTRA")echo "selected"; ?>>Outra</option>
             </select>
         </div>
</div>

<h2>Informações adicionais:</h2>
<div class="row">
	<div class="col-md-6">
		<label>Responsável pelas Informações:</label><input type="text" name="Resp_Informacao" class="form-control" required value="<?php echo $_SESSION['EDUCACAO']['Resp_Informacao'] ?>">
	</div>
	<div class="col-md-6">	
		<label>Funcionario:</label><input type="text" name="Funcionario" class="form-control" required value="<?php echo $_SESSION['EDUCACAO']['Funcionario'] ?>">
	</div>
</div>
<!--
<h2>Dados Socioeconômicos:</h2>
<div class="row">
	<div class="col-md-8"><label>A familia é beneficiária do Programa Bolsa Família?</label>
		Sim:<input type="radio" required onclick="document.getElementById('Num_Cartao').disabled=false;" name="Bolsa_Familia" value="Sim"<?php if($_SESSION['EDUCACAO']['Bolsa_Familia']=="Sim")?>>
		Não:<input type="radio" name="Bolsa_Familia" onclick="document.getElementById('Num_Cartao').disabled=true;" value="Não"<?php if($_SESSION['EDUCACAO']['Bolsa_Familia']=="Não")?>>
	</div>
	<div class="col-md-4">
		<label>Nº do cartão:</label><input type="text" name="Num_Cartao" id="Num_Cartao" class="form-control" value="<?php echo $_SESSION['EDUCACAO']['Num_Cartao']?>" disabled>
	</div>
</div>

<div class="row">	
	<div class="col-md-12"><label>Renda Familiar:</label>
		<input type="radio" name="Renda" required value="Até 1 salário mínimo"<?php if($_SESSION['EDUCACAO']['Renda']=="Até 1 salário mínimo") echo "checked";?>>Até 1 salário mínimo 
		<input type="radio" name="Renda" value="Até 2 salários mínimos"<?php if($_SESSION['EDUCACAO']['Renda']=="Até 2 salários mínimos") echo "checked";?>>Até 2 salários mínimos
		<input type="radio" name="Renda" value="2 a 4 salários mínimos"<?php if($_SESSION['EDUCACAO']['Renda']=="2 a 4 salários mínimos")?>>2 a 4 salários mínimos
		<input type="radio" name="Renda" value="Acima de 4 salários mínimos"<?php if($_SESSION['EDUCACAO']['Renda']=="Acima de 4 salários mínimos") echo "checked";?>>Acima de 4 salários mínimos
	</div>
</div>

<div class="row">
	<div class="col-md-4">
		<label>A mãe ou responsável trabalha?</label>
		<input type="radio" name="Resp_Trabalha" required value="Sim"<?php if($_SESSION['EDUCACAO']['Resp_Trabalha']=="Sim") echo "checked";?>>Sim
		<input type="radio" name="Resp_Trabalha" value="Não"<?php if($_SESSION['EDUCACAO']['Resp_Trabalha']=="Não") echo "checked";?>>Não
	</div>
	<div class="col-md-8">
		<label>Moradia:</label>
		<input type="radio" name="Moradia" required value="Própria"<?php if($_SESSION['EDUCACAO']['Moradia']=="Própria") echo "checked";?>>Própria
		<input type="radio" name="Moradia" value="Alugada"<?php if($_SESSION['EDUCACAO']['Moradia']=="Alugada") echo "checked";?>>Alugada
		<input type="radio" name="Moradia" value="Cedida"<?php if($_SESSION['EDUCACAO']['Moradia']=="Cedida") echo "checked";?>>Cedida
	</div>
</div>
-->