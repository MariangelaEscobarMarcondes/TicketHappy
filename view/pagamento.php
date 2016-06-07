<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
  
  <script>
		<?php include "static/jquery.payment-master/lib/jquery.payment.js";?>
  </script>
  
<script>
    jQuery(function($) {
      $('[data-numeric]').payment('restrictNumeric');
      $('.cc-number').payment('formatCardNumber');
      $('.cc-exp').payment('formatCardExpiry');
      $('.cc-cvc').payment('formatCardCVC');
      $.fn.toggleInputError = function(erred) {
        this.parent('.form-group').toggleClass('has-error', erred);
        return this;
      };
      
    });
  </script>

	<!----------------------- NAVBAR => BOOSTRAP --------------------------------------------------------->
	
	<div class="div_breadcrumb">
		<!--------------------------- BREADCRUMB  --------------------------------------> 
		<ol class="breadcrumb">
			<li><a href="/home/home">Home</a></li>
			<li><a href="compra/compra">Compra</a></li>
			<li class="active">Pagamento</li>
			
			<p style="color:#FFFF99">Bem Vindo:  <?= $dado["nome"] ?></p>
			<p style="display:none">Id:     <?= $dado["id"] ?></p>
		</ol>
		<!--------------------------- BREADCRUMB --------------------------------------> 
	</div>	
	
	<div id="content">		
		
		<!------------------------------ MAIN --------------------------------------------->
		<main id="largura_compra">
		
				<h2>Resumo da Compra</h2>
			
				
				<div class="entrega">
					
					<p class="entrega">1 Ingresso</p>
					<p class="entrega">Musical Rei Leão</p>
					<p class="entrega">Total a pagar : R$ 569,00</p>
				</div>
				<br>
				
				<h2>Formas de Pagamento</h2>
				
				<form method="post" action="/pagamento/inserir"  class="form-horizontal">
				
				<div class="form-group"> <!-- Only required for left/right tabs -->
										
					<div class="tab-content">
								
						<div class="form-group">
							<br>
							
							<label for="cc-num credito" class="col-sm-2 control-label color_label">Número do cartão de crédito <small class="text-muted"><span class="cc-brand"></span></small></label>
							<div class="col-sm-5">
								<input type="tex" name="credito" id="credito" class="input-lg form-control cc-number"  autocomplete="cc-number" placeholder="•••• •••• •••• ••••" required>
							</div>

							<label for="cc-exp validade" class="col-sm-1 control-label color_label">Validade</label>					
							<div class="col-sm-3">
								<input type="tel" name="validade" id="validade" class="input-lg form-control cc-exp" autocomplete="cc-exp" placeholder="•• / ••••" required>
							</div>				
						</div>		
				
						<div class="form-group">
							<label for="nome_titular" class="col-sm-2 control-label color_label">Nome do tiular do cartão</label>
							<div class="col-sm-4">
								<input type="text" name="nome_titular" id="nome_titular" class="form-control" placeholder="Nome">
							</div>	
						
							<label for="cc-cvc seguranca" class="col-sm-2 control-label color_label">Código de segurança</label>
							<div class="col-sm-3">
								<input type="tel" name="seguranca" id="seguranca" class="input-lg form-control cc-cvc" autocomplete="off" placeholder="•••" required>
							</div>						
						</div>					  			
				
						<div class="form-group">
							<label for="bandeira" class="col-sm-2 control-label color_label">Bandeiras</label>
							<div class="col-sm-2">
								<select name="bandeira" class="form-control">
									<option value="Visa">Visa</option>
									<option value="Master Card">Master Card</option>													  				 
								</select>
							</div>	
						</div>						
						
					</div>
				</div>
								
				<div class="form-group">
					<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">	
						<input type="submit" id="finalizar_compra" class="btn btn-laranja" value="Finaliza Compra"/>	
					</div>				
					
				</div><!-- form-group -->
				<h2 class="validation"></h2>
			</form>
			<br><br>
			
			
		
		</main>
		<!------------------------------ MAIN --------------------------------------------->
		
	</div>
	
	
	