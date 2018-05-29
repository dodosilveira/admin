<?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>       

<div class="columns" style="font-weight:100;">
  
    <?php echo $__env->make('includes.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="column" style="text-align:center; padding-left:0px;">

    	<?php echo $__env->make('includes.navtop', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

		<div class="tile is-ancestor" style="text-align:center; height:200px;">
			<div class="tile is-vertical is-12">
			    <div class="tile">
			      	<div class="tile is-parent is-vertical">
			        	<article class="tile is-child notification" style="background:#d2e6e3; border-radius:0px;">
			          		<p class="title is-2">Dashboard</p>
			          		<p class="subtitle">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos.</p>
			        	</article>
			      	</div>
			    </div>
			</div>
		</div>

		<div class="column is-11" style="width:98%; height:auto; background:#FFF; margin:0 auto; margin-top:-80px; z-index:99999; position:relative;">

			<div class="columns is-11">
				<div class="column" style="text-align:center;">
                    <div class="notification is-link" style="line-height:20px; font-weight:100!important;">
                        <i class="fa fa-cart-arrow-down" style="font-size:50px;font-weight:100!important; line-height: 60px;"></i><br />
                        <span style="font-size:25px; font-weight:bold;">837</span><br />
                        <div style="font-weight:100!important;">Pedidos realizados</div>
                    </div>
                </div>
				<div class="column" style="text-align:center;">
                    <div class="notification is-danger" style="line-height:20px; font-weight:100!important;">
                        <i class="fa fa-history" style="font-size:50px;font-weight:100!important; line-height: 60px;"></i><br />
                        <span style="font-size:25px; font-weight:bold;">126</span><br />
                        <div style="font-weight:100!important;">Pedidos pendentes</div>
                    </div>
                </div>
				<div class="column" style="text-align:center;">
                    <div class="notification is-primary" style="line-height:20px; font-weight:100!important;">
                        <i class="fa fa-print" style="font-size:50px;font-weight:100!important; line-height: 60px;"></i><br />
                        <span style="font-size:25px; font-weight:bold;">326</span><br />
                        <div style="font-weight:100!important;">Pedidos impressos</div>
                    </div>
                </div>
				<div class="column" style="text-align:center;">
                    <div class="notification is-danger" style="line-height:20px; font-weight:100!important;">
                        <i class="fa fa-exclamation-circle" style="font-size:50px;font-weight:100!important; line-height: 60px;"></i><br />
                        <span style="font-size:25px; font-weight:bold;">26</span><br />
                        <div style="font-weight:100!important;">Não impressos</div>
                    </div>
                </div>
			</div>

			<hr />

			<div class="columns" style="text-align:left;">
				
				<div class="column">
		          	<p class="subtitle" style="font-weight:100;">Últimos pedidos</p>
		          	<table class="table" style="width:100%;">
					  <thead>
					    <tr>
					      <th>Data</th>
					      <th>Tipo</th>
					      <th>UF</th>
					      <th>Cidade</th>
					      <th style="text-align:center;">Ações</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <th>23/05/2018</th>
					      <td>Nascimento</td>
					      <td>SP</td>
					      <td>São Paulo</td>
					      <td style="text-align:center;"><button class="button is-small is-primary">Visualizar</button> <button class="button is-small is-link">Notificar</button></td>
					    </tr>
					    <tr>
					      <th>22/05/2018</th>
					      <td>Casamento</td>
					      <td>SP</td>
					      <td>São Paulo</td>
					      <td style="text-align:center;"><button class="button is-small is-primary">Visualizar</button> <button class="button is-small is-link">Notificar</button></td>
					    </tr>
					    <tr>
					      <th>21/05/2018</th>
					      <td>Óbito</td>
					      <td>SP</td>
					      <td>São Paulo</td>
					      <td style="text-align:center;"><button class="button is-small is-primary">Visualizar</button> <button class="button is-small is-link">Notificar</button></td>
					    </tr>
					    <tr>
					      <th>20/05/2018</th>
					      <td>Casamento</td>
					      <td>SP</td>
					      <td>São Paulo</td>
					      <td style="text-align:center;"><button class="button is-small is-primary">Visualizar</button> <button class="button is-small is-link">Notificar</button></td>
					    </tr>
					    <tr>
					      <th>19/05/2018</th>
					      <td>Nascimento</td>
					      <td>SP</td>
					      <td>São Paulo</td>
					      <td style="text-align:center;"><button class="button is-small is-primary">Visualizar</button> <button class="button is-small is-link">Notificar</button></td>
					    </tr>
					    <tr>
					      <th>18/05/2018</th>
					      <td>Óbito</td>
					      <td>SP</td>
					      <td>São Paulo</td>
					      <td style="text-align:center;"><button class="button is-small is-primary">Visualizar</button> <button class="button is-small is-link">Notificar</button></td>
					    </tr>
					    <tr>
					      <th>17/05/2018</th>
					      <td>Óbito</td>
					      <td>SP</td>
					      <td>São Paulo</td>
					      <td style="text-align:center;"><button class="button is-small is-primary">Visualizar</button> <button class="button is-small is-link">Notificar</button></td>
					    </tr>					    
					  </tbody>
					</table>
				</div>

				<div class="column">
					<div class="chart-container">
						<canvas id="canvas"></canvas>
					</div>
				</div>
				
			</div>

			<hr />

		</div>


    </div>


</div>

<!-- FIM SIDEBAR -->

<?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>  
