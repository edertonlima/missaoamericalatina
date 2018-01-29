<?php get_header(); ?>

<!-- slide -->
<section class="box-content box-slide">
	<div class="slide">
		<div class="carousel slide" data-ride="carousel" data-interval="6000" id="slide">

			<div class="carousel-inner" role="listbox">

				<?php //if( have_rows('slide') ):
					$slide = 0;
					//while ( have_rows('slide') ) : the_row();
						$slide = $slide+1;

						//if(get_sub_field('video')){ ?>

							<div class="item video <?php if($slide == 1){ echo 'active'; } ?>">
								<video autoplay="true" loop="true" muted="true">
									<source src="<?php echo get_template_directory_uri(); ?>/assets/images/video2.mp4<?php //the_sub_field('video'); ?>" type="video/mp4">
								</video>
								<div class="mask-slide">
									<div class="box-slide-txt">
										<span class="titulo">
											Arrependei-vos porque é chegado o reino dos céus
											<span>Mateus 4:17</span>
										</span>
									</div>
								</div>
							</div>

						<?php //}else{

							/*if(get_sub_field('imagem')){ ?>

								<div class="item <?php if($slide == 1){ echo 'active'; } ?>" style="background-image: url('<?php the_sub_field('imagem'); ?>');">

									<div class="box-height">
										<div class="box-texto">
											
											<p class="texto"><?php the_sub_field('texto'); ?></p>
											<?php if(get_sub_field('sub_texto')){ ?>
												<p class="sub-texto"><?php the_sub_field('sub_texto'); ?></p>
											<?php } ?>

										</div>
									</div>
									
								</div>

							<?php }*/

						//}
					//endwhile;
				//endif; ?>

			</div>

			<ol class="carousel-indicators">
				
				<?php for($i=0; $i<$slide; $i++){ ?>
					<li data-target="#slide" data-slide-to="<?php echo $i; ?>" class="<?php if($i == 0){ echo 'active'; } ?>"></li>
				<?php } ?>
				
			</ol>

		</div>
	</div>
</section>

<section class="box-content">
	<div class="container">
		
		<div class="sobre-home row">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/inhouse2-intro.png" class="col-4">
			<div class="col-8 txt-sobre">
				<span class="area">Sobre</span>
				<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean gravida mattis fermentum. Cras imperdiet libero in tincidunt sodales. Sed placerat laoreet magna.</h4>
				<p>Phasellus sapien massa, efficitur id posuere at, aliquam nec nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae. Vivamus ut lorem eu nibh ultricies laoreet.</p>
				<p>Morbi eu varius lorem, non dapibus quam. Ut at varius magna. Nunc velit est, molestie id orci et, mollis fringilla erat. Proin sapien erat, tristique vel auctor volutpat, ornare in turpis.</p>
				<a href="javascript:" class="button">saiba mais <i class="fa fa-angle-right" aria-hidden="true"></i></a>
			</div>
		</div>

	</div>
</section>

<section class="box-content no-padding">

	<div class="sobre-home box-item-sobre row">
		<div class="col-3 item-sobre active" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/img1.jpg');" rel="#finalidade">
			<div class="mask-hover">
				<div class="box-hover">
					<h4 class="titulo">Finalidade</h4>
					<span class="button">saiba mais <i class="fa fa-angle-right" aria-hidden="true"></i></span>
				</div>
			</div>
		</div>
		<div class="col-3 item-sobre" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/img3.jpg');" rel="#visao">
			<div class="mask-hover">
				<div class="box-hover">
					<h4 class="titulo">Visão</h4>
					<span class="button">saiba mais <i class="fa fa-angle-right" aria-hidden="true"></i></span>
				</div>
			</div>
		</div>
		<div class="col-3 item-sobre " style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/img4.jpg');" rel="#objetivos">
			<div class="mask-hover">
				<div class="box-hover">
					<h4 class="titulo">Objetivos</h4>
					<span class="button">saiba mais <i class="fa fa-angle-right" aria-hidden="true"></i></span>
				</div>
			</div>
		</div>
		<div class="col-3 item-sobre " style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/peru_lima_highlight.jpg');" rel="#igrejas-parceiras">
			<div class="mask-hover">
				<div class="box-hover">
					<h4 class="titulo">Igrejas Parceiras</h4>
					<span class="button">saiba mais <i class="fa fa-angle-right" aria-hidden="true"></i></span>
				</div>
			</div>
		</div>
	</div>

</section>

<section class="box-content sobre-home item-sobre-content active" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/Afbeelding-ANNE-086.jpg');" id="finalidade">
	<div class="mask-content-item">
		<div class="container">
			
			<div class="row">
				<div class="col-4">&nbsp;</div>
				<div class="col-8 txt-sobre">
					<span class="area">Finalidade</span>
					<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean gravida mattis fermentum. Cras imperdiet libero in tincidunt sodales. Sed placerat laoreet magna.</h4>
					<p>Phasellus sapien massa, efficitur id posuere at, aliquam nec nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae. Vivamus ut lorem eu nibh ultricies laoreet.</p>
					<p>Morbi eu varius lorem, non dapibus quam. Ut at varius magna. Nunc velit est, molestie id orci et, mollis fringilla erat. Proin sapien erat, tristique vel auctor volutpat, ornare in turpis.</p>
				</div>
			</div>

		</div>
	</div>
</section>

<section class="box-content sobre-home item-sobre-content" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/c176acf764c928d66a7af017aa03d66d.jpg');" id="visao">
	<div class="mask-content-item">
		<div class="container">
			
			<div class="row">
				<div class="col-4">&nbsp;</div>
				<div class="col-8 txt-sobre">
					<span class="area">Visão</span>
					<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean gravida mattis fermentum. Cras imperdiet libero in tincidunt sodales. Sed placerat laoreet magna.</h4>
					<p>Phasellus sapien massa, efficitur id posuere at, aliquam nec nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae. Vivamus ut lorem eu nibh ultricies laoreet.</p>
					<p>Morbi eu varius lorem, non dapibus quam. Ut at varius magna. Nunc velit est, molestie id orci et, mollis fringilla erat. Proin sapien erat, tristique vel auctor volutpat, ornare in turpis.</p>
				</div>
			</div>

		</div>
	</div>
</section>

<section class="box-content sobre-home item-sobre-content " style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/Peru-slide-F3GM-superJumbo.jpg');" id="objetivos">
	<div class="mask-content-item">
		<div class="container">
			
			<div class="row">
				<div class="col-4">&nbsp;</div>
				<div class="col-8 txt-sobre">
					<span class="area">Objetivos</span>
					<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean gravida mattis fermentum. Cras imperdiet libero in tincidunt sodales. Sed placerat laoreet magna.</h4>
					<p>Phasellus sapien massa, efficitur id posuere at, aliquam nec nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae. Vivamus ut lorem eu nibh ultricies laoreet.</p>
					<p>Morbi eu varius lorem, non dapibus quam. Ut at varius magna. Nunc velit est, molestie id orci et, mollis fringilla erat. Proin sapien erat, tristique vel auctor volutpat, ornare in turpis.</p>
				</div>
			</div>

		</div>
	</div>
</section>

<section class="box-content sobre-home item-sobre-content " style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/peru_lima_highlight.jpg');" id="igrejas-parceiras">
	<div class="mask-content-item">
		<div class="container">
			
			<div class="row">
				<div class="col-12 txt-sobre igrejas-parceiras">
					<h4 class="titulo">Igrejas Parceiras</h4>

					<div class="owl-carousel owl-theme list-igrejas">

						<div class="item">
							<a href="javascript:">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/igreja.gif" alt="">
							</a>
						</div>

						<div class="item">
							<a href="javascript:">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/igreja.gif" alt="">
							</a>
						</div>

						<div class="item">
							<a href="javascript:">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/igreja.gif" alt="">
							</a>
						</div>

						<div class="item">
							<a href="javascript:">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/igreja.gif" alt="">
							</a>
						</div>

						<div class="item">
							<a href="javascript:">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/igreja.gif" alt="">
							</a>
						</div>

					</div>

					<a href="javascript:" class="button">seja uma igreja parceira <i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>

				</div>
			</div>

		</div>
	</div>
</section>

<?php get_footer(); ?>

<script type="text/javascript">
	jQuery(document).ready(function(){	
		jQuery('.item-sobre').each(function(){
			jQuery(this).height(jQuery(this).width());
		});

		jQuery('.item-sobre').click(function(){
			jQuery('.item-sobre').removeClass('active');
			jQuery(this).addClass('active');
			jQuery('.item-sobre-content').removeClass('active');
			jQuery(jQuery(this).attr('rel')).addClass('active');

			jQuery('html, body').animate({scrollTop:jQuery(jQuery(this).attr('rel')).position().top}, 'slow');
		});
	});

	jQuery(window).resize(function(){
		jQuery('.item-sobre').each(function(){
			jQuery(this).height(jQuery(this).width());
		});
	});
</script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js" type="text/javascript"></script>
<script type="text/javascript">
	jQuery('.list-igrejas').owlCarousel({
		loop: false,
		center: false,
		nav: true,
		margin: 20,
		navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
		responsive: {
			0: {
				items: 2
			},
			400: {
				items: 2
			},
			500: {
				items: 3
			},
			768: {
				items: 4
			}
		}
	}) 
</script>

<?php /*
<script type="text/javascript">
	jQuery(document).ready(function(){	  

		// FORM
		jQuery(".enviar").click(function(){
			jQuery('.enviar').html('ENVIANDO').prop( "disabled", true );
			jQuery('.msg-form').removeClass('erro ok').html('');
			var nome = jQuery('#nome').val();
			var email = jQuery('#email').val();
			var telefone = jQuery('#telefone').val();
			var assunto = jQuery('#assunto').val();
			var mensagem = jQuery('#texto').val();
			var para = '<?php get_field('email', 'option'); ?>';
			var nome_site = '<?php get_field('titulo', 'option'); ?>';

			if(email!=''){
				jQuery.getJSON("<?php echo get_template_directory_uri(); ?>/mail.php", { nome:nome, email:email, telefone:telefone, assunto:assunto, mensagem:mensagem, para:para, nome_site:nome_site }, function(result){		
					if(result=='ok'){
						resultado = 'Enviado com sucesso! Obrigado.';
						classe = 'ok';
					}else{
						resultado = result;
						classe = 'erro';
					}
					jQuery('.msg-form').addClass(classe).html(resultado);
					jQuery('form').trigger("reset");
					jQuery('.enviar').html('CADASTRAR').prop( "disabled", false );
				});
			}else{
				jQuery('.msg-form').addClass('erro').html('Por favor, digite um e-mail válido.');
				jQuery('.enviar').html('CADASTRAR').prop( "disabled", false );
			}
		});
		
	});

</script>

<script type="text/javascript">
	<?php 
		foreach ($tipos as $value) {
			echo 'var '.$value.' = '. json_encode($representantes[$value]).';';
		}

		echo 'var repre_estados = '. json_encode($repre_estados).';';
		echo 'var lojas_estados = '. json_encode($lojas_estados).';';
	?>

	jQuery('form.login').submit(function(event){

		jQuery('.enviar').html('Enviando').prop( "disabled", true );
		jQuery('.msg-form').removeClass('erro ok').html('');

		var usuario = jQuery('#usuario').val();
		var senha = jQuery('#senha').val();		

		var enviar = true;

		if(usuario == ''){
			jQuery('#usuario').parent().addClass('erro');
			enviar = false;
		}

		if(senha == ''){
			jQuery('#senha').parent().addClass('erro');
			enviar = false;
		}

		if(!enviar){
			jQuery('.msg-form').html('Todos os campos são obrigatórios.');
			jQuery('.enviar').html('Entrar').prop( "disabled", false );
			return false;
		}else{
			jQuery('.enviar').html('Enviar').prop( "disabled", false );
			//event.preventDefault();
		}		
		
	});

	var val_estado_map = '';
	var val_estado = '';
	var list_representantes = '';
	var val_tipo = '';
	
	function monta_estados(tipo){
		var estados = new Array();
		if(tipo == 'representantes'){
			jQuery.each(repre_estados, function (key, val) {
				estados.push({'nome':val.nome, 'uf':val.uf});
			});
		}
		if(tipo == 'lojas'){
			jQuery.each(lojas_estados, function (key, val) {
				estados.push({'nome':val.nome, 'uf':val.uf});
			});
		}
		estados = estados.filter(function(elem, pos, self) {
			return self.indexOf(elem) == pos;
		});

		estado = '<option value="Selecione um Estado">Selecione um Estado</option>';
		jQuery.each(estados, function (key, val) {
			estado += '<option value="' + val.uf + '">' + val.nome + '</option>';
		});
		jQuery("#estado").html(estado);
	}

	jQuery(document).ready(function(){

		monta_estados(jQuery('#tipo option:selected').val());

		jQuery("#tipo").change(function(){
			
			jQuery('#cidade').html('<option value="Selecione uma Cidade">Selecione uma Cidade</option>').prop('disabled', true);
			//jQuery("#estado").val('Selecione um Estado').change();
			jQuery('.list-representantes').html('');

			monta_estados(jQuery(this).val());

			jQuery(".map li a").removeClass('active');
			jQuery(".map").hide();
			jQuery('.on-'+jQuery(this).val()).show();
		}).change();

		jQuery("#estado").change(function(){
			jQuery(".map li a").removeClass('active');
			var cidade = '<option value="Selecione uma Cidade">Selecione uma Cidade</option>';
			var cidades = [];
			val_estado = jQuery('#estado option:selected').val();			
			val_tipo = jQuery('#tipo option:selected').val();

			if(val_estado != val_estado_map){
				if(val_estado != 'Selecione um Estado'){

					// MONTA SELECT CIDADES
					if(val_tipo == 'lojas'){
						jQuery.each(lojas, function (key, val) {
							if((val.uf == val_estado) && (val_tipo == val.categoria.toLowerCase())) {
								cidades.push(val.cidade);
							}
						});
					}
					if(val_tipo == 'representantes'){
						jQuery.each(representantes, function (key, val) {
							if((val.uf == val_estado) && (val_tipo == val.categoria.toLowerCase())) {
								cidades.push(val.cidade);
							}
						});
					}
					cidades = cidades.filter(function(elem, pos, self) {
						return self.indexOf(elem) == pos;
					});
					jQuery.each(cidades, function (key, val) {
						cidade += '<option value="' + val + '">' + val + '</option>';
					});
					jQuery("#cidade").html(cidade).prop('disabled', false);
					// MONTA SELECT CIDADES

					jQuery('.list-representantes').html('');
					jQuery('.map li a').removeClass('active');
					jQuery('.map li a.'+val_estado).addClass('active');
					list_representantes = '';
					
					if(val_tipo == 'representantes'){
						jQuery.each(representantes, function (key, val) {
							if((val.uf == val_estado) && (val.categoria.toLowerCase() == val_tipo)) {
								list_representantes += '<li>';
								list_representantes += '<h3>'+val.nome+'</h3><div class="content-txt">';

								if(val.email != ''){
									list_representantes += '<span class="email"><strong>E-mail</strong>'+val.email+'</span>'
								}

								if(val.telefone != ''){
									list_representantes += '<span><strong>Telefone</strong>'+val.telefone+'</span>'
								}

								if(val.celular != ''){
									list_representantes += '<span><strong>Celular</strong>'+val.celular+'</span>'
								}

								if(val.endereco != ''){
									list_representantes += '<span><strong>Endereço</strong>'+val.endereco+', '+val.numero+', '+val.bairro+'</span>'
								}

								if(val.cidade != ''){
									list_representantes += '<span><strong>Cidade</strong>'+val.cidade+', '+val.estado+'</span>'
								}

								list_representantes += '</div></li>';
							}
						});
					}

					if(val_tipo == 'lojas'){
						jQuery.each(lojas, function (key, val) {
							if((val.uf == val_estado) && (val.categoria.toLowerCase() == val_tipo)) {
								list_representantes += '<li>';
								list_representantes += '<h3>'+val.nome+'</h3><div class="content-txt">';

								if(val.email != ''){
									list_representantes += '<span class="email"><strong>E-mail</strong>'+val.email+'</span>'
								}

								if(val.telefone != ''){
									list_representantes += '<span><strong>Telefone</strong>'+val.telefone+'</span>'
								}

								if(val.celular != ''){
									list_representantes += '<span><strong>Celular</strong>'+val.celular+'</span>'
								}

								if(val.endereco != ''){
									list_representantes += '<span><strong>Endereço</strong>'+val.endereco+', '+val.numero+', '+val.bairro+'</span>'
								}

								if(val.cidade != ''){
									list_representantes += '<span><strong>Cidade</strong>'+val.cidade+', '+val.estado+'</span>'
								}

								list_representantes += '</div></li>';
							}
						});
					}
				}
				jQuery('.list-representantes').html(list_representantes);
			}
		}).change();

		jQuery("#cidade").change(function(){
			val_cidade = jQuery('#cidade option:selected').val();
			val_estado = jQuery('#estado option:selected').val();
			val_tipo = jQuery('#tipo option:selected').val();
			list_representantes = '';
			
			if(val_tipo == 'representantes'){
				if(val_cidade != 'Selecione uma Cidade'){
					jQuery.each(representantes, function (key, val) {
						if((val.uf == val_estado) && (val.cidade == val_cidade) && (val.categoria.toLowerCase() == val_tipo)) {
							list_representantes += '<li>';
							list_representantes += '<h3>'+val.nome+'</h3><div class="content-txt">';

							if(val.email != ''){
								list_representantes += '<span class="email"><strong>E-mail</strong>'+val.email+'</span>'
							}

							if(val.telefone != ''){
								list_representantes += '<span><strong>Telefone</strong>'+val.telefone+'</span>'
							}

							if(val.celular != ''){
								list_representantes += '<span><strong>Celular</strong>'+val.celular+'</span>'
							}

							if(val.endereco != ''){
								list_representantes += '<span><strong>Endereço</strong>'+val.endereco+', '+val.numero+', '+val.bairro+'</span>'
							}

							if(val.cidade != ''){
								list_representantes += '<span><strong>Cidade</strong>'+val.cidade+', '+val.estado+'</span>'
							}

							list_representantes += '</div></li>';
						}
					});
				}
			}

			if(val_tipo == 'lojas'){
				if(val_cidade != 'Selecione uma Cidade'){
					jQuery.each(lojas, function (key, val) {
						if((val.uf == val_estado) && (val.cidade == val_cidade) && (val.categoria.toLowerCase() == val_tipo)) {
							list_representantes += '<li>';
							list_representantes += '<h3>'+val.nome+'</h3><div class="content-txt">';

							if(val.email != ''){
								list_representantes += '<span class="email"><strong>E-mail</strong>'+val.email+'</span>'
							}

							if(val.telefone != ''){
								list_representantes += '<span><strong>Telefone</strong>'+val.telefone+'</span>'
							}

							if(val.celular != ''){
								list_representantes += '<span><strong>Celular</strong>'+val.celular+'</span>'
							}

							if(val.endereco != ''){
								list_representantes += '<span><strong>Endereço</strong>'+val.endereco+', '+val.numero+', '+val.bairro+'</span>'
							}

							if(val.cidade != ''){
								list_representantes += '<span><strong>Cidade</strong>'+val.cidade+', '+val.estado+'</span>'
							}

							list_representantes += '</div></li>';
						}
					});
				}
			}

			jQuery('.list-representantes').html(list_representantes);
		}).change();
		

		jQuery(".map li a").click(function(){
			jQuery('.list-representantes').html('');

			var cidade = '<option value="Selecione uma Cidade">Selecione uma Cidade</option>';
			var cidades = [];

			val_estado_map = jQuery(this).attr('rel');
			val_tipo = jQuery('#tipo option:selected').val();
			list_representantes = '';

			if(val_estado != val_estado_map){
				if(val_estado_map != ''){

					// MONTA SELECT CIDADES
					if(val_tipo == 'lojas'){
						jQuery.each(lojas, function (key, val) {
							if((val.uf == val_estado_map) && (val_tipo == val.categoria.toLowerCase())) {
								cidades.push(val.cidade);
							}
						});
					}
					if(val_tipo == 'representantes'){
						jQuery.each(representantes, function (key, val) {
							if((val.uf == val_estado_map) && (val_tipo == val.categoria.toLowerCase())) {
								cidades.push(val.cidade);
							}
						});
					}
					cidades = cidades.filter(function(elem, pos, self) {
						return self.indexOf(elem) == pos;
					});
					jQuery.each(cidades, function (key, val) {
						cidade += '<option value="' + val + '">' + val + '</option>';
					});
					jQuery("#cidade").html(cidade).prop('disabled', false);
					// MONTA SELECT CIDADES

					jQuery("#estado").val(val_estado_map).change();

					list_representantes = '';
					if(val_tipo == 'representantes'){
						jQuery.each(representantes, function (key, val) {
							if((val.uf == val_estado) && (val.categoria.toLowerCase() == val_tipo)) {
								list_representantes += '<li>';
								list_representantes += '<h3>'+val.nome+'</h3><div class="content-txt">';

								if(val.email != ''){
									list_representantes += '<span class="email"><strong>E-mail</strong>'+val.email+'</span>'
								}

								if(val.telefone != ''){
									list_representantes += '<span><strong>Telefone</strong>'+val.telefone+'</span>'
								}

								if(val.celular != ''){
									list_representantes += '<span><strong>Celular</strong>'+val.celular+'</span>'
								}

								if(val.endereco != ''){
									list_representantes += '<span><strong>Endereço</strong>'+val.endereco+', '+val.numero+', '+val.bairro+'</span>'
								}

								if(val.cidade != ''){
									list_representantes += '<span><strong>Cidade</strong>'+val.cidade+', '+val.estado+'</span>'
								}

								list_representantes += '</div></li>';
							}
						});
					}

					if(val_tipo == 'lojas'){
						jQuery.each(lojas, function (key, val) {
							if((val.uf == val_estado) && (val.categoria.toLowerCase() == val_tipo)) {
								list_representantes += '<li>';
								list_representantes += '<h3>'+val.nome+'</h3><div class="content-txt">';

								if(val.email != ''){
									list_representantes += '<span class="email"><strong>E-mail</strong>'+val.email+'</span>'
								}

								if(val.telefone != ''){
									list_representantes += '<span><strong>Telefone</strong>'+val.telefone+'</span>'
								}

								if(val.celular != ''){
									list_representantes += '<span><strong>Celular</strong>'+val.celular+'</span>'
								}

								if(val.endereco != ''){
									list_representantes += '<span><strong>Endereço</strong>'+val.endereco+', '+val.numero+', '+val.bairro+'</span>'
								}

								if(val.cidade != ''){
									list_representantes += '<span><strong>Cidade</strong>'+val.cidade+', '+val.estado+'</span>'
								}

								list_representantes += '</div></li>';
							}
						});
					}
				}
				
				jQuery('.list-representantes').html(list_representantes);
			}

			jQuery('.list-representantes').html(list_representantes);
			jQuery('.map li a').removeClass('active');
			jQuery('.map li a.'+val_estado_map).addClass('active');
		});

		jQuery('input').change(function(){
			if(jQuery(this).parent().hasClass('erro')){
				jQuery(this).parent().removeClass('erro');
			}
		});

	})
</script>
*/ ?>