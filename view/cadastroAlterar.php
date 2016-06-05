
	<!-- NAVBAR => BOOSTRAP -->
	
	<div class="div_breadcrumb">
		<!-- BREADCRUMB  --> 
		<ol class="breadcrumb">
			<li><a href="/home/home">Home</a></li>
			<li class="active">Cadastro</li>				
		</ol>
		<!-- BREADCRUMB --> 
	</div>	
	
	<div id="content">
		<div style="clear: both"></div>
		
		<!-- MAIN -->
		<main id="largura_contato_form">
		
			<h2>Dados Pessoais</h2>
			
			<form method="post" action="/cadastro/update" class="form-horizontal">
			    
			    	<input type="text" style="display:none" value="<?= $dado["id"] ?>" name="id" id="id" class="form-control" size="10" maxlength="10" placeholder="id">
			
				<div class="form-group">
					<label for="nome" class="col-sm-2 control-label color_label">Nome Completo</label>
					<div class="col-sm-10">
					  <input type="text" name="nome" id="nome" value="<?= $dado["nome"] ?>" class="form-control" size="55" maxlength="50" placeholder="Nome Completo" required>
					</div>		
				</div>	

				<div class="form-group">
					<label for="cpf" class="col-sm-2 control-label color_label">CPF</label>
					<div class="col-sm-4">
						<input type="text" name="cpf" class="form-control" id="cpf" value="<?= $dado["cpf"] ?>" maxlength="11" pattern="[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}" placeholder="123.456.789-00" required>
					</div>
					
					<label for="dataNascimento" class="col-sm-2 control-label color_label">Data de Nascimento</label>
					<div class="col-sm-4">
						<input type="text" name="dataNascimento" value="<?= date("d/m/Y",strtotime($dado['dataNascimento'])) ?>" class="form-control" id="dataNascimento" maxlength="10" pattern="[0-9]{2}/[0-9]{2}/[0-9]{4}" placeholder="00/00/0000" required>
					</div>
				</div>	
				
				
				<div class="form-group">
					<label for="telefone" class="col-sm-2 control-label color_label">Telefone</label>
					<div class="col-sm-4">
					  <input type="text" name="telefone" id="telefone" value="<?= $dado["telefone"] ?>" class="form-control" maxlength="11" placeholder="(00)1234-5678">
					</div>	

					<label for="celular" class="col-sm-2 control-label color_label">Celular</label>
					<div class="col-sm-4">
					  <input type="text" name="celular" id="celular" value="<?= $dado["celular"] ?>" class="form-control" maxlength="11" placeholder="(00)12345-6789">
					</div>
				</div>
						
				<div class="form-group">
					<label  class="col-sm-2 control-label color_label">Sexo</label>
					<div class="col-sm-9">
						<label for="sexo" class="radio-inline col-sm-2 control-label color_label">Feminino</label>
						<div class="col-sm-2">
							<input type="radio" name="sexo" id="feminino" value="f" <?php echo ($dado["sexo"] == f)?"checked":"";?>>
						</div>
					
						<label for="sexo" class="radio-inline col-sm-2 control-label color_label" value="<?= $dado["sexo"] ?>">Maculino</label>
						<div class="col-sm-2">
							<input type="radio" name="sexo" id="masculino" value="m" <?php echo ($dado["sexo"] == m)?"checked":"";?>>
						</div>	
					</div>
				</div>
				
				<h2>Dados de Acesso</h2>
				
				<div class="form-group">
					<label for="email" class="col-sm-2 control-label color_label">Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="Email" value="<?= $dado["email"] ?>" name="email" placeholder="email@exemplo.com.br" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="confirmaEmail" class="col-sm-2 control-label color_label">Cofirmar Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="confirmaEmail" value="<?= $dado["email"] ?>" placeholder="email@exemplo.com.br" required>
					</div>
				</div>
				 
				<div class="form-group">
					<label for="senha" class="col-sm-2 control-label color_label">Senha</label>
					<div class="col-sm-4">
						<input type="password" class="form-control" id="senha" value="<?= $dado["senha"] ?>" name="senha" maxlength="8" placeholder="Password" required>
					</div>
					
					<label for="confirmasenha" class="col-sm-2 control-label color_label">Cofirmar Senha</label>
					<div class="col-sm-4">
						<input type="password" class="form-control" id="confirmasenha" value="<?= $dado["senha"] ?>" placeholder="Password" required>
					</div>
				</div>				
				
				
				<h2>Endereço de Contato</h2>	
										
				
				<div class="form-group">
					<label for="endereco" class="col-sm-2 control-label color_label">Endereço</label>
					<div class="col-sm-10">
					  <input type="text" name="endereco" id="endereco" value="<?= $dado["endereco"] ?>" class="form-control" placeholder="Endereço" required>
					</div>		
				</div>
		  		
				<div class="form-group">
					<label for="numero" class="col-sm-2 control-label color_label">Número</label>
					<div class="col-sm-4">
					  <input type="text" name="numero" id="numero" value="<?= $dado["numero"] ?>" class="form-control"  placeholder="Número" required>
					</div>	

					<label for="apartamento" class="col-sm-2 control-label color_label">Apartamento</label>
					<div class="col-sm-4">
					  <input type="text" name="apartamento" id="apartamento" value="<?= $dado["apartamento"] ?>" class="form-control"  placeholder="Apartamento">
					</div>	
				</div>
				
				<div class="form-group">
					<label for="bairro" class="col-sm-2 control-label color_label">Bairro</label>
					<div class="col-sm-10">
					  <input type="text" name="bairro" id="bairro" value="<?= $dado["bairro"] ?>" class="form-control" placeholder="Bairro" required>
					</div>		
				</div>
				
				
				<div class="form-group">
					<label for="cidade" class="col-sm-2 control-label color_label">Cidade</label>
					<div class="col-sm-5">
					  <input type="text" name="cidade" id="cidade" value="<?= $dado["cidade"] ?>" class="form-control" placeholder="Cidade" required>
					</div>	

					<label for="estado" class="col-sm-2 control-label color_label">Estado</label>					
					<div class="col-sm-3">
					<select name="estado" class="form-control">
					  <option value="AC" <?php echo ($dado["estado"] == AC)?"selected":"";?>>AC</option>
					  <option value="AL" <?php echo ($dado["estado"] == AL)?"selected":"";?>>AL</option>
					  <option value="AP" <?php echo ($dado["estado"] == AP)?"selected":"";?>>AP</option>
					  <option value="AM" <?php echo ($dado["estado"] == AM)?"selected":"";?>>AM</option>
					  <option value="BA" <?php echo ($dado["estado"] == BA)?"selected":"";?>>BA</option>
					  <option value="CE" <?php echo ($dado["estado"] == CE)?"selected":"";?>>CE</option>
					  <option value="DF" <?php echo ($dado["estado"] == DF)?"selected":"";?>>DF</option>
					  <option value="ES" <?php echo ($dado["estado"] == ES)?"selected":"";?>>ES</option>
					  <option value="GO" <?php echo ($dado["estado"] == GO)?"selected":"";?>>GO</option>
					  <option value="MA" <?php echo ($dado["estado"] == MA)?"selected":"";?>>MA</option>
					  <option value="MT" <?php echo ($dado["estado"] == MT)?"selected":"";?>>MT</option>
					  <option value="MS" <?php echo ($dado["estado"] == MS)?"selected":"";?>>MS</option>
					  <option value="MG" <?php echo ($dado["estado"] == PA)?"selected":"";?>>PA</option>
					  <option value="PB" <?php echo ($dado["estado"] == PB)?"selected":"";?>>PB</option>
					  <option value="PR" <?php echo ($dado["estado"] == PR)?"selected":"";?>>PR</option>
					  <option value="PE" <?php echo ($dado["estado"] == PE)?"selected":"";?>>PE</option>
					  <option value="PI" <?php echo ($dado["estado"] == PI)?"selected":"";?>>PI</option>
					  <option value="RJ" <?php echo ($dado["estado"] == RJ)?"selected":"";?>>RJ</option>
					  <option value="RN" <?php echo ($dado["estado"] == RN)?"selected":"";?>>RN</option>
					  <option value="RS" <?php echo ($dado["estado"] == RS)?"selected":"";?>>RS</option>
					  <option value="RO" <?php echo ($dado["estado"] == RO)?"selected":"";?>>RO</option>
					  <option value="RR" <?php echo ($dado["estado"] == RR)?"selected":"";?>>RR</option>
					  <option value="SC" <?php echo ($dado["estado"] == SC)?"selected":"";?>>SC</option>
					  <option value="SP" <?php echo ($dado["estado"] == SP)?"selected":"";?>>SP</option>
					  <option value="SE" <?php echo ($dado["estado"] == SE)?"selected":"";?>>SE</option>
					  <option value="TO" <?php echo ($dado["estado"] == TO)?"selected":"";?>>TO</option>					 
					</select>
					</div>
				</div>
				
				
				<div class="form-group">
					<label for="cep" class="col-sm-2 control-label color_label">CEP</label>
					<div class="col-sm-4">
					  <input type="text" name="cep" id="cep" value="<?= $dado["cep"] ?>" class="form-control" maxlength="9"  pattern="[0-9]{5}-[0-9]{3}" placeholder="11111-111" required>					  
					</div>		
				</div>
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">	
						<input type="submit" id="enviar" class="btn btn-laranja" value="Enviar"/>	
					</div>				
					
				</div><!-- form-group -->

			</form>
			<br><br>
		
		</main>
		<!-- MAIN -->
		
		
		<div style="clear: both"></div>
	</div>
	
		<!-- FOOTER -->
