@include('includes.header')       

<div class="columns" style="font-weight:100;">
  
    @include('includes.sidebar')

    <div class="column" style="text-align:center; padding-left:0px;">
    	
    	<div class="tile is-ancestor" style="text-align:right;">
			<div class="tile is-vertical is-12">
			    <div class="tile">
			        <div class="tile is-parent is-vertical" style="height:80px; float:right; line-height: 20px;">
			      		<div style="height:20px; margin-top:15px; margin-right:30px; float:right;">
			        		
			      			<div style="float:right; width:80px; height:20px; text-align: center; margin:0px 10px;">
			        			<a style="color:#038672;" href="{{url('/')}}"><i class="fa fa-sign-in" style="margin-right:5px; font-size:28px;"></i><br />Logout</a>
			        		</div>

			        		<div style="float:right; width:80px; height:20px; text-align: center; margin:0px 10px;">
			        			<a style="color:#038672;" href="{{url('/')}}"><i class="fa fa-user" style="margin-right:5px; font-size:28px;"></i><br />Meu perfil</a>
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
				    <div class="notification is-primary" style="line-height:25px; font-weight:100!important;">
				    	<i class="fa fa-street-view" style="float:left; font-size:56px;font-weight:100!important;"></i>
				    	<div style="float:left; font-size:20px; font-weight:bold; margin-top:3px; margin-left:25px;">
				    		<span style="font-size:35px;">768</span><br />
				    		<span style="font-weight:100!important;">Pedidos realizados</span>
				    	</div>
				    	<div style="clear:both;"></div>
				    </div>
				</div>
				<div class="column" style="text-align:left;">
				    <div class="notification is-link" style="line-height:25px; font-weight:100!important;">
				    	<i class="fa fa-gear" style="float:left; font-size:56px;font-weight:100!important;"></i>
				    	<div style="float:left; font-size:20px; font-weight:bold; margin-top:3px; margin-left:25px;">
				    		<span style="font-size:35px;">768</span><br />
				    		<span style="font-weight:100!important;">Pedidos realizados</span>
				    	</div>
				    	<div style="clear:both;"></div>
				    </div>
				</div>
				<div class="column" style="text-align:left;">
				    <div class="notification is-info" style="line-height:25px; font-weight:100!important;">
				    	<i class="fa fa-users" style="float:left; font-size:56px;font-weight:100!important;"></i>
				    	<div style="float:left; font-size:20px; font-weight:bold; margin-top:3px; margin-left:25px;">
				    		<span style="font-size:35px;">768</span><br />
				    		<span style="font-weight:100!important;">Pedidos realizados</span>
				    	</div>
				    	<div style="clear:both;"></div>
				    </div>
				</div>
				<div class="column" style="text-align:left;">
				    <div class="notification is-danger" style="line-height:25px; font-weight:100!important;">
				    	<i class="fa fa-list-alt" style="float:left; font-size:56px;font-weight:100!important;"></i>
				    	<div style="float:left; font-size:20px; font-weight:bold; margin-top:3px; margin-left:25px;">
				    		<span style="font-size:35px;">768</span><br />
				    		<span style="font-weight:100!important;">Pedidos realizados</span>
				    	</div>
				    	<div style="clear:both;"></div>
				    </div>
				</div>
			</div>

			<div class="columns" style="text-align:left;">
				
				<div class="column">
					<div class="chart-container">
						<canvas id="chart-legend-normal"></canvas>
					</div>
				</div>
				
				<div class="column">
					<div class="notification" style="line-height:25px; font-weight:100!important;">
				    	<table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
					        <thead>
						        <tr>
						          <th>One</th>
						          <th>Two</th>
						        </tr>
					        </thead>
					        <tbody>
						        <tr>
						          <td>Three</td>
						          <td>Four</td>
						        </tr>
						        <tr>
						          <td>Five</td>
						          <td>Six</td>
						        </tr>
						        <tr>
						          <td>Seven</td>
						          <td>Eight</td>
						        </tr>
						        <tr>
						          <td>Nine</td>
						          <td>Ten</td>
						        </tr>
						        <tr>
						          <td>Eleven</td>
						          <td>Twelve</td>
						        </tr>
						        <tr>
						          <td>Eleven</td>
						          <td>Twelve</td>
						        </tr>
						        <tr>
						          <td>Eleven</td>
						          <td>Twelve</td>
						        </tr>
					        </tbody>
					    </table>
				    </div>
				</div>
				
			</div>

			<div class="columns" style="text-align:left;">
				
				<div class="column">
					<div class="notification" style="line-height:25px; font-weight:100!important;">
				    	<table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
					        <thead>
						        <tr>
						          <th>One</th>
						          <th>Two</th>
						        </tr>
					        </thead>
					        <tbody>
						        <tr>
						          <td>Three</td>
						          <td>Four</td>
						        </tr>
						        <tr>
						          <td>Five</td>
						          <td>Six</td>
						        </tr>
						        <tr>
						          <td>Seven</td>
						          <td>Eight</td>
						        </tr>
						        <tr>
						          <td>Nine</td>
						          <td>Ten</td>
						        </tr>
						        <tr>
						          <td>Eleven</td>
						          <td>Twelve</td>
						        </tr>
						        <tr>
						          <td>Eleven</td>
						          <td>Twelve</td>
						        </tr>
						        <tr>
						          <td>Eleven</td>
						          <td>Twelve</td>
						        </tr>
					        </tbody>
					    </table>
				    </div>
				</div>
				
				<div class="column">
					<div class="notification" style="line-height:25px; font-weight:100!important;">
				    	<table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
					        <thead>
						        <tr>
						          <th>One</th>
						          <th>Two</th>
						        </tr>
					        </thead>
					        <tbody>
						        <tr>
						          <td>Three</td>
						          <td>Four</td>
						        </tr>
						        <tr>
						          <td>Five</td>
						          <td>Six</td>
						        </tr>
						        <tr>
						          <td>Seven</td>
						          <td>Eight</td>
						        </tr>
						        <tr>
						          <td>Nine</td>
						          <td>Ten</td>
						        </tr>
						        <tr>
						          <td>Eleven</td>
						          <td>Twelve</td>
						        </tr>
						        <tr>
						          <td>Eleven</td>
						          <td>Twelve</td>
						        </tr>
						        <tr>
						          <td>Eleven</td>
						          <td>Twelve</td>
						        </tr>
					        </tbody>
					    </table>
				    </div>
				</div>
				
			</div>

		</div>

    </div>


</div>

<!-- FIM SIDEBAR -->

@include('includes.footer')  
