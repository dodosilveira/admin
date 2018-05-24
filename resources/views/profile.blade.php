@include('includes.header')   

<div class="columns" style="font-weight:100;">
  
    @include('includes.sidebar')

    <div class="column" style="text-align:center; padding-left:0px;">

    	@include('includes.navtop')

		<div class="tile is-ancestor" style="text-align:center; height:200px;">
			<div class="tile is-vertical is-12">
			    <div class="tile">
			      	<div class="tile is-parent is-vertical">
			        	<article class="tile is-child notification" style="background:#d2e6e3; border-radius:0px;">
			          		<p class="title is-2">Perfil</p>
			          		<p class="subtitle">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos.</p>
			        	</article>
			      	</div>
			    </div>
			</div>
		</div>

		<div class="column is-11" style="width:98%; height:auto; background:#FFF; margin:0 auto; margin-top:-80px; z-index:99999; position:relative;">

			<div class="columns">
				<div class="column" style="text-align:left;">

					<p class="subtitle">Lorem Ipsum é simplesmente uma simulação de texto da indústria.</p>

					<div class="field">
					  <div class="control">
					    <input class="input" type="text" placeholder="Nome">
					  </div>
					</div>

					<div class="field">
					  <div class="control">
					    <input class="input" type="text" placeholder="Usuário">
					  </div>
					</div>

					<div class="field">
					  <div class="control">
					    <input class="input" type="password" placeholder="Senha">
					  </div>
					</div>

					<div class="field">
					  <div class="control">
					    <input class="input" type="email" placeholder="E-mail">
					  </div>
					</div>

					<div class="field is-grouped">
					  <div class="control">
					    <button class="button is-link">Submit</button>
					  </div>
					</div>

				</div>

				<div class="column">
					sdasad
				</div>
			</div>

		</div>

    </div>

</div>

@include('includes.footer') 