
	<!-- NAVBAR => BOOSTRAP -->
	
	<div class="div_breadcrumb">
		<!-- BREADCRUMB  --> 
		<ol class="breadcrumb">
			<li><a href="/home/home">Home</a></li>
			<li class="active">Listar Pagamento</li>				
		</ol>
		<!-- BREADCRUMB --> 
	</div>	
	
	<div id="content">
		<div style="clear: both"></div>
		
		<!-- MAIN -->
		
		<!--<main id="largura_contato_form">-->
		<main id="largura_compra">
	
			<h1>Lista de Pagamento</h1>
			
			<div class="panel panel-default row custyle">
				<table class="table table-condensed custab">
					<thead>
						<tr>
						<th style="width:05%">id</th> 
	  					<th style="width:20%">N° Cartão de Crédido</th>
	  					<th style="width:25%">Nome do Titular</th>
	  					<th style="width:25%">Validade</th>
	  					<th style="width:25%">Segurança</th>
	  					<th style="width:25%">Bandeira</th>
	  					<th style="width:05%"></th>
	  					</tr>
	  				</thead>
	  				<tbody>
        			 <?php
                		foreach($dado as $pagamento){
                    		 echo "<tr>".
                    				 "<td>" . $pagamento->getId()      ."</td>".
                    				 "<td>" . $pagamento->getCredito()      ."</td>".
                    				 "<td>" . $pagamento->getNome_Titular()    ."</td>".
                    				 "<td>" . $pagamento->getValidade()   ."</td>".
                    				 "<td>" . $pagamento->getSeguranca() ."</td>".
                    				 "<td>" . $pagamento->getBandeira() ."</td>".
                    				 "<td>" . "<a href='/pagamento/deletar/". $pagamento->getId() ."' class='btn btn-laranja btn-xs'><span class='glyphicon glyphicon-remove'></span> Excluir</a>"."</td>".
                    				
                    				
                    				
                    				
                    				
                    		      "</tr>";
                		 }
           			 ?>
           			</tbody>
       			 </table>
			
			</div>
			
			<br><br>
			
			<div id="centro">
				<nav>
				  <ul class="pagination">
				    <li>
				      <a href="#" aria-label="Previous">
				        <span aria-hidden="true">&laquo;</span>
				      </a>
				    </li>
				    <li><a href="#">1</a></li>
				    <li><a href="#">2</a></li>
				    <li><a href="#">3</a></li>
				    <li><a href="#">4</a></li>
				    <li><a href="#">5</a></li>
				    <li>
				      <a href="#" aria-label="Next">
				        <span aria-hidden="true">&raquo;</span>
				      </a>
				    </li>
				  </ul>
				</nav>
			</div>
			
		</main>
		<!-- MAIN -->
		

		
		<div style="clear: both"></div>
	</div>
	
	
		<!------------------------------------------------ FOOTER --------------------------------------------------------------->
