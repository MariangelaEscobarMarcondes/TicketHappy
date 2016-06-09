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
			<li class="active">Carrinho de Compras</li>
			
			<p style="color:#FFFF99">Bem Vindo:  <?= $dado["nome"] ?></p>
			<p style="display:none">Id:     <?= $dado["id"] ?></p>
		</ol>
		<!--------------------------- BREADCRUMB --------------------------------------> 
	</div>	
	
	<div id="content">		
		
		<!------------------------------ MAIN --------------------------------------------->
		<main id="largura_compra">
			
			<table id="cart" class="table table-condensed">
					<thead class="thead_compra">
						<tr>
							<th style="width:50%">Produto</th>
							<th style="width:10%">Preço</th>
							<th style="width:8%">Quantidade</th>
							<th style="width:22%" class="text-center">Subtotal</th>
							<th style="width:10%"></th>
						</tr>
					</thead>
					<tbody>
						<tr class="tr_compra">
							<td data-th="Produto">
								<div class="row">
									<div class="col-sm-10">
										<h4 class="nomargin">Ingresso Rei Leão - o musical</h4>
									</div>
								</div>
							</td>
							
						  <td data-th="Preco">R$ 100,00</td>
							<td data-th="Quantidade">
								<input type="number" class="form-control text-center" value="1">
							</td>	
						  <td data-th="Subtotal" class="text-center">R$ 100,00</td>
							<td class="actions" data-th="">
								<button class="btn btn-laranja btn-sm"><i class="fa fa-refresh"></i></i><span class="glyphicon glyphicon-refresh"></button>
								<button class="btn btn-laranja btn-sm"><i class="fa fa-trash-o"></i><span class="glyphicon glyphicon-trash"></span></button>								
							</td>
						</tr>
					</tbody>
						<tfoot>
						<tr>
							<td><a href="home.html" class="btn btn-laranja btn-warning"><i class="fa fa-angle-left"></i> Continuar Comprando</a></td>
					</tfoot>
				</table>		
		
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
							
							<label for="cc-num cd_credito" class="col-sm-2 control-label color_label">Número do cartão de crédito <small class="text-muted"><span class="cc-brand"></span></small></label>
							<div class="col-sm-5">
								<input type="tex" name="cd_credito" id="cd_credito" class="input-lg form-control cc-number"  autocomplete="cc-number" placeholder="•••• •••• •••• ••••" required>
							</div>

							<label for="cc-exp dt_validade" class="col-sm-1 control-label color_label">Validade</label>					
							<div class="col-sm-3">
								<input type="tel" name="dt_validade" id="dt_validade" class="input-lg form-control cc-exp" autocomplete="cc-exp" placeholder="•• / ••••" required>
							</div>				
						</div>		
				
						<div class="form-group">
							<label for="nm_titular" class="col-sm-2 control-label color_label">Nome do tiular do cartão</label>
							<div class="col-sm-4">
								<input type="text" name="nm_titular" id="nm_titular" class="form-control" placeholder="Nome">
							</div>	
						
							<label for="cc-cvc cd_seguranca" class="col-sm-2 control-label color_label">Código de segurança</label>
							<div class="col-sm-3">
								<input type="tel" name="cd_seguranca" id="cd_seguranca" class="input-lg form-control cc-cvc" autocomplete="off" placeholder="•••" required>
							</div>						
						</div>					  			
				
						<div class="form-group">
							<label for="ds_bandeira" class="col-sm-2 control-label color_label">Bandeiras</label>
							<div class="col-sm-2">
								<select name="ds_bandeira" class="form-control">
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
	
	
	