@include('includes.header')       

<style>
	.navtop{color:#038672;}
	.navtop:hover{color:#055044;}
</style>

<div class="columns" style="font-weight:100;">
  
    @include('includes.sidebar')

    <div class="column" style="text-align:center; padding-left:0px;">
    	
    	<div class="tile is-ancestor" style="text-align:right;">
			<div class="tile is-vertical is-12">
			    <div class="tile">
			        <div class="tile is-parent is-vertical" style="height:80px; float:right; line-height: 20px;">
			      		<div style="height:20px; margin-top:15px; margin-right:30px; float:right;">
			        		
			      			<div style="float:right; width:90px; height:20px; text-align: center; margin-left:10px;">
			        			<a class="navtop" href="{{url('/')}}"><i class="fa fa-sign-in" style="margin-right:5px; font-size:28px;"></i><br />Logout</a>
			        		</div>

			        		<div style="float:right; width:120px; height:20px; text-align: center; margin:0px 10px;">
			        			<a class="navtop" href="{{url('/')}}"><i class="fa fa-bell" style="margin-right:5px; font-size:28px;"></i><br />Notificações <span style="padding:2px 6px; background:#ff3860; font-size:11px; color:#FFF; font-weight:bold; border-radius:5px;">7</span></a>
			        		</div>

			        		<div style="float:right; width:90px; height:20px; text-align: center; margin:0px 25px;">
			        			<a class="navtop" href="{{url('/')}}"><i class="fa fa-user" style="margin-right:5px; font-size:28px;"></i><br />Meu perfil</a>
			        		</div>

			      		</div>
			        </div>
			    </div>
			</div>
		</div>

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

		<div class="column is-11" style="width:98%; height:588px; background:#FFF; margin:0 auto; margin-top:-80px; z-index:99999; position:relative;">

			<div class="columns">
				<div class="column" style="text-align:left;">
				    <div class="notification is-info" style="line-height:25px; font-weight:100!important;">
				    	<i class="fa fa-street-view" style="float:left; font-size:56px;font-weight:100!important;"></i>
				    	<div style="float:left; font-size:20px; font-weight:bold; margin-top:3px; margin-left:25px;">
				    		<span style="font-size:35px;">1033</span><br />
				    		<span style="font-weight:100!important;">Pedidos realizados</span>
				    	</div>
				    	<div style="clear:both;"></div>
				    </div>
				</div>
				<div class="column" style="text-align:left;">
				    <div class="notification is-info" style="line-height:25px; font-weight:100!important;">
				    	<i class="fa fa-gear" style="float:left; font-size:56px;font-weight:100!important;"></i>
				    	<div style="float:left; font-size:20px; font-weight:bold; margin-top:3px; margin-left:25px;">
				    		<span style="font-size:35px;">320</span><br />
				    		<span style="font-weight:100!important;">Impressas</span>
				    	</div>
				    	<div style="clear:both;"></div>
				    </div>
				</div>
				<div class="column" style="text-align:left;">
				    <div class="notification is-primary" style="line-height:25px; font-weight:100!important;">
				    	<i class="fa fa-users" style="float:left; font-size:56px;font-weight:100!important;"></i>
				    	<div style="float:left; font-size:20px; font-weight:bold; margin-top:3px; margin-left:25px;">
				    		<span style="font-size:35px;">159</span><br />
				    		<span style="font-weight:100!important;">Recebidas</span>
				    	</div>
				    	<div style="clear:both;"></div>
				    </div>
				</div>
				<div class="column" style="text-align:left;">
				    <div class="notification is-danger" style="line-height:25px; font-weight:100!important;">
				    	<i class="fa fa-list-alt" style="float:left; font-size:56px;font-weight:100!important;"></i>
				    	<div style="float:left; font-size:20px; font-weight:bold; margin-top:3px; margin-left:25px;">
				    		<span style="font-size:35px;">26</span><br />
				    		<span style="font-weight:100!important;">Não impressa</span>
				    	</div>
				    	<div style="clear:both;"></div>
				    </div>
				</div>
			</div>

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
					      <td style="text-align:center;"><button class="button is-primary">Visualizar</button> <button class="button is-danger">Notificar</button></td>
					    </tr>
					    <tr>
					      <th>22/05/2018</th>
					      <td>Casamento</td>
					      <td>SP</td>
					      <td>São Paulo</td>
					      <td style="text-align:center;"><button class="button is-primary">Visualizar</button> <button class="button is-danger">Notificar</button></td>
					    </tr>
					    <tr>
					      <th>21/05/2018</th>
					      <td>Óbito</td>
					      <td>SP</td>
					      <td>São Paulo</td>
					      <td style="text-align:center;"><button class="button is-primary">Visualizar</button> <button class="button is-danger">Notificar</button></td>
					    </tr>
					    <tr>
					      <th>20/05/2018</th>
					      <td>Casamento</td>
					      <td>SP</td>
					      <td>São Paulo</td>
					      <td style="text-align:center;"><button class="button is-primary">Visualizar</button> <button class="button is-danger">Notificar</button></td>
					    </tr>
					    <tr>
					      <th>19/05/2018</th>
					      <td>Nascimento</td>
					      <td>SP</td>
					      <td>São Paulo</td>
					      <td style="text-align:center;"><button class="button is-primary">Visualizar</button> <button class="button is-danger">Notificar</button></td>
					    </tr>
					    <tr>
					      <th>18/05/2018</th>
					      <td>Óbito</td>
					      <td>SP</td>
					      <td>São Paulo</td>
					      <td style="text-align:center;"><button class="button is-primary">Visualizar</button> <button class="button is-danger">Notificar</button></td>
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

		</div>

    </div>


</div>

<!-- FIM SIDEBAR -->

@include('includes.footer')  
