
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
			
			<form method="post" action="/cadastro/inserir" class="form-horizontal">
			
				<div class="form-group">
					<label for="nome" class="col-sm-2 control-label color_label">Nome Completo</label>
					<div class="col-sm-10">
					  <input type="text" name="nome" id="nome" class="form-control" size="55" maxlength="50" placeholder="Nome Completo" required>
					</div>		
				</div>
				
				<div class="form-group">
					<label for="cpf" class="col-sm-2 control-label color_label">cpf</label>
					<div class="col-sm-4">
					  <input type="text" name="cpf" id="cpf" class="form-control" pattern="[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}" placeholder="123.456.789-00" required>
					</div>
<!--
				<div class="form-group">
					<label for="cpf" class="col-sm-2 control-label color_label">CPF</label>
					<div class="col-sm-4">
						<input type="text" name="cpf" class="form-control" id="cpf" maxlength="14"  placeholder="123.456.789-00" required>
					</div>-->
					
					<label for="dataNascimento" class="col-sm-2 control-label color_label">Data de Nascimento</label>
					<div class="col-sm-4">
						<input type="text" name="dataNascimento" class="form-control" id="dataNascimento" maxlength="10" pattern="[0-9]{2}/[0-9]{2}/[0-9]{4}" placeholder="00/00/0000" required>
					</div>
				</div>	
				
				
				<div class="form-group">
					<label for="telefone" class="col-sm-2 control-label color_label">Telefone</label>
					<div class="col-sm-4">
					  <input type="text" name="telefone" id="telefone" class="form-control" maxlength="14" pattern="\([0-9]{2}\)[0-9]{4,6}-[0-9]{3,4}$"  placeholder="(00)1234-5678">
					</div>	

					<label for="celular" class="col-sm-2 control-label color_label">Celular</label>
					<div class="col-sm-4">
					  <input type="text" name="celular" id="celular" class="form-control" maxlength="14" pattern="\([0-9]{2}\)[0-9]{4,6}-[0-9]{3,4}$" placeholder="(00)12345-6789">
					</div>
				</div>
						
				<div class="form-group">
					<label  class="col-sm-2 control-label color_label">Sexo</label>
					<div class="col-sm-9">
						<label for="sexo" class="radio-inline col-sm-2 control-label color_label">Feminino</label>
						<div class="col-sm-2">
							<input type="radio" name="sexo" id="feminino" value="f" checked>
						</div>
					
						<label for="sexo" class="radio-inline col-sm-2 control-label color_label">Maculino</label>
						<div class="col-sm-2">
							<input type="radio" name="sexo" id="masculino" value="m">
						</div>	
					</div>
				</div>
				
				<h2>Dados de Acesso</h2>
				
				<div class="form-group">
					<label for="email" class="col-sm-2 control-label color_label">Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="Email" name="email" placeholder="email@exemplo.com.br" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="confirmaEmail" class="col-sm-2 control-label color_label">Cofirmar Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="confirmaEmail" placeholder="email@exemplo.com.br" required>
					</div>
				</div>
				 
				<div class="form-group">
					<label for="senha" class="col-sm-2 control-label color_label">Senha</label>
					<div class="col-sm-4">
						<input type="password" class="form-control" id="senha" name="senha" placeholder="Password" required>
					</div>
					
					<label for="confirmasenha" class="col-sm-2 control-label color_label">Cofirmar Senha</label>
					<div class="col-sm-4">
						<input type="password" class="form-control" id="confirmasenha" placeholder="Password" required>
					</div>
				</div>				
				
				
				<h2>Endereço de Contato</h2>	
										
				
				<div class="form-group">
					<label for="endereco" class="col-sm-2 control-label color_label">Endereço</label>
					<div class="col-sm-10">
					  <input type="text" name="endereco" id="endereco" class="form-control" placeholder="Endereço" required>
					</div>		
				</div>
		  		
				<div class="form-group">
					<label for="numero" class="col-sm-2 control-label color_label">Número</label>
					<div class="col-sm-4">
					  <input type="text" name="numero" id="numero" class="form-control"  placeholder="Número" required>
					</div>	

					<label for="apartamento" class="col-sm-2 control-label color_label">Apartamento</label>
					<div class="col-sm-4">
					  <input type="text" name="apartamento" id="apartamento" class="form-control"  placeholder="Apartamento">
					</div>	
				</div>
				
				<div class="form-group">
					<label for="bairro" class="col-sm-2 control-label color_label">Bairro</label>
					<div class="col-sm-10">
					  <input type="text" name="bairro" id="bairro" class="form-control" placeholder="Bairro" required>
					</div>		
				</div>
				
				
				<div class="form-group">
					<label for="cidade" class="col-sm-2 control-label color_label">Cidade</label>
					<div class="col-sm-5">
					  <input type="text" name="cidade" id="cidade" class="form-control" placeholder="Cidade" required>
					</div>	

					<label for="estado" class="col-sm-2 control-label color_label">Estado</label>					
					<div class="col-sm-3">
					<select name="estado" class="form-control">
					  <option value=""></option>
					  <option value="AC">AC</option>
					  <option value="AL">AL</option>
					  <option value="AP">AP</option>
					  <option value="AM">AM</option>
					  <option value="BA">BA</option>
					  <option value="CE">CE</option>
					  <option value="DF">DF</option>
					  <option value="ES">ES</option>
					  <option value="GO">GO</option>
					  <option value="MA">MA</option>
					  <option value="MT">MT</option>
					  <option value="MS">MS</option>
					  <option value="MG">MG</option>
					  <option value="PA">PA</option>
					  <option value="PB">PB</option>
					  <option value="PR">PR</option>
					  <option value="PE">PE</option>
					  <option value="PI">PI</option>
					  <option value="RJ">RJ</option>
					  <option value="RN">RN</option>
					  <option value="RS">RS</option>
					  <option value="RO">RO</option>
					  <option value="RR">RR</option>
					  <option value="SC">SC</option>
					  <option value="SP">SP</option>
					  <option value="SE">SE</option>
					  <option value="TO">TO</option>					 
					</select>
					</div>
				</div>
				
			
				
				<div class="form-group">
					<label for="cep" class="col-sm-2 control-label color_label">CEP</label>
					<div class="col-sm-4">
					  <input type="text" name="cep" id="cep" class="form-control" maxlength="9"  pattern="[0-9]{5}-[0-9]{3}" placeholder="12345-678" required>					  
					</div>		
				</div>
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">	
						<input type="submit" id="enviar" class="btn btn-laranja" value="Enviar"/>	
					</div>				
					
				</div><!-- form-group -->

			</form>
			<br><br>
			
			<script type="text/javascript">
$(document).ready(function(){
	$("input.dataNascimento").mask("99/99/9999");
        $("input.cpf").mask("999.999.999-99");
        $("input.cep").mask("99.999-999");
});
</script>
	
	
	<script type="text/javascript">$("#").mask("(00) 0000-00009");</script>

		</main>
		<!-- MAIN -->
		
		
		<div style="clear: both"></div>
	</div>


	
		<!-- FOOTER -->
