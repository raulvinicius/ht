<?php if ( strpos( $_SERVER[ "REQUEST_URI" ], "frontend" ) ) : ?>

	<?php $tUrl = get_bloginfo("template_url"); ?>

	<?php require( "frontend/contato.php" ) ?>

<?php else : ?>


	<?php get_header(); ?>
	<section id="page-contato">

		<iframe id="map" width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=pt&amp;geocode=&amp;q=hightoush,+bras%C3%ADlia,+df&amp;draggable=false&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=53.829089,119.970703&amp;ie=UTF8&amp;hq=&amp;hnear=&amp;t=m&amp;ll=-15.804683,-47.901764&amp;spn=0.00991,0.013733&amp;z=16&amp;iwloc=&amp;output=embed"></iframe>

		<div id="topo-bg-form" class="container-fluid">
		</div>	
		
		<div id="wrap-form" class="container-fluid">
		    <div class="row-fluid">

		    	<div id="wrap-endereco" class="span4 offset4">

					<div class="span5">
						<figure>
							<img src="<?php bloginfo('template_url') ?>/img/hi-icon-endereco.png">
						</figure>
					</div>		    		
		    		
					<div class="span7">
						<address>
							<p>E-mail: <strong>contato@hightouch.com.br</strong><br>
							Tel: <strong>61.3326.2201</strong>
							</p>
							<p>
							Centro Empresarial Santa Cruz<br>
							SEPS 705/905 Bl. A Sala 142<br>
							72390-055 - Brasília - DF</p>
						</address>
					</div>		    		
		    		
		    	</div>

		    </div>

		    <div class="row-fluid">

		    	<div id="form" class="span4 offset4">

		    		
		    		<div id="process" class="alert">
		    		  Enviando e-mail...
		    		</div>

		    		<div id="success" class="alert alert-success">
		    		  <button type="button" class="close">×</button>
		    		  <strong>Sucesso!</strong> Seu e-mail foi enviado. Entraremos em contato em breve.
		    		</div>

		    		<div id="error" class="alert alert-error">
		    		  <button type="button" class="close">×</button>
		    		  <strong>Opa!</strong> Houver um erro ao enviar seu e-mail, tente novamente por favor.
		    		</div>

		    		<form id="form-contato" action="<?php bloginfo('url') ?>/envia-email" method="POST">

		    		    <div class="control-group">
		    		        <label class="control-label" for="input-nome">Nome*</label>
		    		        <div class="controls">
		    		            <input type="text" name="nome" id="input-nome" class="required">
		    		        </div>
		    		    </div>

		    		    <div class="control-group">
		    		        <label class="control-label" for="input-email">E-mail*</label>
		    		        <div class="controls">
		    		            <input type="email" name="email" id="input-email" class="required">
		    		        </div>
		    		    </div>

		    		    <div class="control-group">
		    		        <label class="control-label" for="input-assunto">Assunto*</label>
		    		        <div class="controls">
		    		            <input type="text" name="assunto" id="input-assunto" class="required">
		    		        </div>
		    		    </div>

		    		    <div class="control-group">
		    		        <label class="control-label" for="input-mensagem">Mensagem*</label>
		    		        <div class="controls">
		    		            <textarea name="mensagem" id="input-mensagem" class="required"></textarea>  
		    		        </div>
		    		    </div>

		    		    <input class="animado-02-in-out" type="submit" value="Enviar">
		    		    <p>* campos obrigatórios</p>
		    		</form>


		    	</div>

		    </div>
		</div>	

	</section>

	<?php get_footer() ?>

<?php endif; ?>