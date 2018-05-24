<?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>       

<div class="columns" style="font-weight:100;">
  
    <?php echo $__env->make('includes.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="column" style="text-align:center; padding-left:0px;">
    	
    	<div class="tile is-ancestor">
		  <div class="tile is-vertical is-12">
		    <div class="tile">
		      <div class="tile is-parent is-vertical" style="height:80px;">
		        
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
				    	<i class="fa fa-street-view" style="float:left; font-size:50px;font-weight:100!important;"></i>
				    	<div style="float:left; font-size:20px; font-weight:bold; margin-top:0px; margin-left:15px;">
				    		<span style="font-size:26px;">768</span><br />
				    		<span style="font-size:16px; font-weight:100!important;">Pedidos realizados</span>
				    	</div>
				    	<div style="clear:both;"></div>
				    </div>
				</div>
				<div class="column" style="text-align:left;">
                    <div class="notification is-link" style="line-height:25px; font-weight:100!important;">
                        <i class="fa fa-street-view" style="float:left; font-size:50px;font-weight:100!important;"></i>
                        <div style="float:left; font-size:20px; font-weight:bold; margin-top:0px; margin-left:15px;">
                            <span style="font-size:26px;">768</span><br />
                            <span style="font-size:16px; font-weight:100!important;">Pedidos realizados</span>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                </div>
				<div class="column" style="text-align:left;">
                    <div class="notification is-info" style="line-height:25px; font-weight:100!important;">
                        <i class="fa fa-street-view" style="float:left; font-size:50px;font-weight:100!important;"></i>
                        <div style="float:left; font-size:20px; font-weight:bold; margin-top:0px; margin-left:15px;">
                            <span style="font-size:26px;">768</span><br />
                            <span style="font-size:16px; font-weight:100!important;">Pedidos realizados</span>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                </div>
				<div class="column" style="text-align:left;">
                    <div class="notification is-danger" style="line-height:25px; font-weight:100!important;">
                        <i class="fa fa-street-view" style="float:left; font-size:50px;font-weight:100!important;"></i>
                        <div style="float:left; font-size:20px; font-weight:bold; margin-top:0px; margin-left:15px;">
                            <span style="font-size:26px;">768</span><br />
                            <span style="font-size:16px; font-weight:100!important;">Pedidos realizados</span>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                </div>
			</div>

			<div class="columns">
				<div class="column">
					<div class="chart-container">
						<canvas id="chart-legend-normal"></canvas>
					</div>
				</div>
				<div class="column">
					
				</div>
			</div>

		</div>

    </div>

</div>

<!-- FIM SIDEBAR -->

<?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>  
