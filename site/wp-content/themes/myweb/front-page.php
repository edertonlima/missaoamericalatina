<?php get_header(); ?>

<!-- slide -->
<section class="box-content box-slide no-height">
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
									<div class="box-slide-txt" style="display: none;">
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



<section class="box-content box-mensagem no-height">
	<div class="container">
		
		<div class="row list-projeto">
			<div class="col-12">
				<h2 class="center">Mateus 4:17</h2>
				<h4 class="center">Arrependei-vos porque é chegado o reino dos céus</h4>
			</div>
		</div>
	</div>
</section>

<section class="box-content no-padding sobre" style="background-image: url('<?php the_field('imagem_block',get_page_by_path('sobre')); ?>');">
	<div class="mask">
		<div class="container table">
			<div class="table-cell">

				<a href="javascript:" id="ancor-sobre"></a>

				<div class="sobre-home box-item-sobre item-mini row">

					<?php $imagem = wp_get_attachment_image_src( get_post_thumbnail_id(get_page_by_path('sobre')), 'large' ); ?>
					<div class="col-3 item-sobre item-sobre-h active" style="background-image: url('<?php if($imagem[0]){ echo $imagem[0]; } ?>');" rel="#sobre">
						<div class="mask-hover">
							<div class="box-hover">
								<h4 class="titulo"><?php echo get_the_title(get_page_by_path('sobre')); ?></h4>
								<span class="button">saiba mais <i class="fa fa-angle-right" aria-hidden="true"></i></span>
							</div>
						</div>
					</div>

					<?php if(have_rows('item_sobre',get_page_by_path('sobre'))): ?>
						<?php while ( have_rows('item_sobre',get_page_by_path('sobre')) ) : the_row(); ?>

							<?php $imagem = get_sub_field('imagem'); ?>

							<div class="col-3 item-sobre item-sobre-h" style="background-image: url('<?php echo $imagem['sizes']['large']; ?>');" rel="#<?php the_sub_field('titulo'); ?>">
								<div class="mask-hover">
									<div class="box-hover">
										<h4 class="titulo"><?php the_sub_field('titulo'); ?></h4>
										<span class="button">saiba mais <i class="fa fa-angle-right" aria-hidden="true"></i></span>
									</div>
								</div>
							</div>

						<?php endwhile; ?>
					<?php endif; ?>

				</div>
				
				<div class="sobre-home sobre-btn-det row active" id="sobre">
					<?php 
						$imagem = wp_get_attachment_image_src( get_post_thumbnail_id(get_page_by_path('sobre')), 'thumbnail' ); 
						if($imagem[0]){ ?>
							<div class="col-4">
								<img src="<?php echo $imagem[0]; ?>">
							</div>
						<?php }
					?>					
					<div class="<?php if($imagem[0]){ echo 'col-8'; }else{ echo 'col-12'; } ?> txt-sobre">
						<h2><?php echo get_the_title(get_page_by_path('sobre')); ?></h2>
						<?php if(get_field('subtitulo',get_page_by_path('sobre'))){ ?>
							<h4><?php the_field('subtitulo',get_page_by_path('sobre')); ?></h4>
						<?php } ?>
						<?php if(get_the_excerpt(get_page_by_path('sobre'))){ ?>
							<p><?php echo get_the_excerpt(get_page_by_path('sobre')); ?></p>
						<?php } ?>
						<a href="<?php echo get_permalink(get_page_by_path('sobre')); ?>" class="button">saiba mais <i class="fa fa-angle-right" aria-hidden="true"></i></a>
					</div>
				</div>

				<?php if(have_rows('item_sobre',get_page_by_path('sobre'))): ?>
					<?php while ( have_rows('item_sobre',get_page_by_path('sobre')) ) : the_row(); ?>

						<?php $imagem = get_sub_field('imagem'); ?>

						<div class="sobre-home sobre-btn-det row" id="<?php the_sub_field('titulo'); ?>">
							<div class="col-4">
								<img src="<?php echo $imagem['sizes']['thumbnail']; ?>">
							</div>
							
							<div class="col-8 txt-sobre">
								<h2><?php the_sub_field('titulo'); ?></h2>
								<h4><?php the_sub_field('subtitulo'); ?></h4>
								<p><?php the_sub_field('texto'); ?></p>
							</div>
						</div>

					<?php endwhile; ?>
				<?php endif; ?>

			</div>
		</div>
	</div>
</section>

<section class="box-content projetos" id="projetos">
	<div class="container">
		
		<div class="row list-projeto">
			<div class="col-12">
				<h2 class="center">Projetos</h2>
				<h4 class="center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Aenean gravida mattis fermentum.</h4>
			</div>

			<div class="item-proj">
				<iframe class="col-6 img-projeto" src="https://www.youtube.com/embed/7suPXnzQ770" frameborder="0" encrypted-media" allowfullscreen></iframe>
				<div class="col-6 img-projeto" style="background-image: url('https://img.youtube.com/vi/7suPXnzQ770/maxresdefault.jpg');">
					<i class="fa fa-youtube-play" aria-hidden="true"></i>
				</div>
				<div class="col-6 cont-proj">
					<div class="box-cont-proj">
						<h2 class="">Projetos</h2>
						<h4 class="">Lorem ipsum dolor sit amet</h4>
						<p>Phasellus sapien massa, efficitur id posuere at, aliquam nec nunc. Vestibulum ante ipsum primis in faucibus orci luctus.</p>
						<a href="javascript:" class="button">saiba mais <i class="fa fa-angle-right" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>

			<div class="item-proj">
				<div class="col-6 cont-proj">
					<div class="box-cont-proj">
						<h2 class="">Projetos</h2>
						<h4 class="">Lorem ipsum dolor sit amet</h4>
						<p>Phasellus sapien massa, efficitur id posuere at, aliquam nec nunc. Vestibulum ante ipsum primis in faucibus orci luctus.</p>
						<a href="javascript:" class="button">saiba mais <i class="fa fa-angle-right" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="col-6 img-projeto" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/proj-2.jpg');"></div>
			</div>

			<div class="item-proj">
				<div class="col-6 img-projeto" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/proj-3.jpg');"></div>
				<div class="col-6 cont-proj">
					<div class="box-cont-proj">
						<h2 class="">Projetos</h2>
						<h4 class="">Lorem ipsum dolor sit amet</h4>
						<p>Phasellus sapien massa, efficitur id posuere at, aliquam nec nunc. Vestibulum ante ipsum primis in faucibus orci luctus.</p>
						<a href="javascript:" class="button">saiba mais <i class="fa fa-angle-right" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>

<div class="owl-carousel owl-theme list-treinamentos" id="treinamentos">
	<div class="item">

		<section class="box-content no-padding treinamentos" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/img5.jpg');">
			<div class="box-treinamentos">
				<div class="">
					
					<div class="row">
						<div class="col-12" style="display: none;">
							<h2 class="center">Treinamentos</h2>
							<h4 class="center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Aenean gravida mattis fermentum.</h4>
						</div>

						<div class="slide-treinamento">
							<div class="middle-treinamento row">

									<div class="item-slide-treinamentos">
										<a href="javascript:" class="col-6 ">
											<iframe class="img-treinamentos" src="https://www.youtube.com/embed/7suPXnzQ770" frameborder="0" encrypted-media" allowfullscreen></iframe>
											<div class="img-treinamentos" style="background-image: url('https://img.youtube.com/vi/7suPXnzQ770/maxresdefault.jpg');">
												<i class="fa fa-youtube-play" aria-hidden="true"></i>
											</div>
										</a>

										<div class="col-6 cont-treinamentos">
											<div class="table">
												<div class="table-cell">
													<h2 class="">Treinamentos</h2>
													<a href="javascript:"><h4 class="">Lorem ipsum dolor sit amet</h4></a>
													<p>Phasellus sapien massa, efficitur id posuere at, aliquam nec nunc. Vestibulum ante ipsum primis in faucibus orci luctus.</p>
													<a href="javascript:" class="button">saiba mais <i class="fa fa-angle-right" aria-hidden="true"></i></a>
												</div>
											</div>
										</div>						
									</div>
								

							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

	</div>
</div>


<section class="box-content no-padding sobre-home item-sobre-content active" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/img5.jpg');" id="igrejas-parceiras">

	<div class="mask-content-item">
		

			<div class="table">
				<div class="table-cell">
					
					<div class="container">
					<div class= "row">
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
			</div>

		
	</div>
</section>


<section class="box-content no-padding envolva-se">

			<div class="table">
				<div class="table-cell" id="envolva-se">

	<div class="container">
		<div class="sobre-home box-item-sobre row">
			<div class="col-5 item-sobre active">
				<div class="mask-hover">
					<div class="box-hover">
						<h4 class="titulo">Envolva-se</h4>
						<p>Phasellus sapien massa, efficitur id posuere at, aliquam nec nunc. Vestibulum ante ipsum primis in faucibus orci luctus.
					</div>
				</div>
			</div>
			<div class="col-7">
				<div class="col-6 item-sobre" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/img1.jpg');">
					<div class="mask-hover">
						<div class="box-hover">
							<h4 class="titulo">Ore</h4>
							<span class="button">saiba mais <i class="fa fa-angle-right" aria-hidden="true"></i></span>
						</div>
					</div>
				</div>
				<div class="col-6 item-sobre" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/img1.jpg');">
					<div class="mask-hover">
						<div class="box-hover">
							<h4 class="titulo">Oferte</h4>
							<span class="button">saiba mais <i class="fa fa-angle-right" aria-hidden="true"></i></span>
						</div>
					</div>
				</div>

				<div class="col-6 item-sobre" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/img1.jpg');">
					<div class="mask-hover">
						<div class="box-hover">
							<h4 class="titulo">Ide</h4>
							<span class="button">saiba mais <i class="fa fa-angle-right" aria-hidden="true"></i></span>
						</div>
					</div>
				</div>
				<div class="col-6 item-sobre" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/img1.jpg');">
					<div class="mask-hover">
						<div class="box-hover">
							<h4 class="titulo">Mobilize</h4>
							<span class="button">saiba mais <i class="fa fa-angle-right" aria-hidden="true"></i></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
</div>

</section>



<?php get_footer(); ?>

<script type="text/javascript">
	jQuery(document).ready(function(){	
		jQuery('.item-sobre-h').each(function(){
			jQuery(this).height(jQuery(this).width());
		});

		jQuery('.item-sobre-h').click(function(){
			jQuery('.item-sobre-h').removeClass('active');
			jQuery(this).addClass('active');
			jQuery('.sobre-btn-det').removeClass('active');
			jQuery(jQuery(this).attr('rel')).addClass('active');

			//jQuery('html, body').animate({scrollTop:jQuery(jQuery(this).attr('rel')).position().top}, 'slow');
			//jQuery('html, body').animate({scrollTop:jQuery('#ancor-sobre').position().top}, 'slow');
		});

		jQuery('.fa-youtube-play').click(function(){
			jQuery('.item-sobre-h').removeClass('active');
			jQuery(this).parent().hide();
			jQuery(this).parent().siblings().show().attr('src', jQuery(this).parent().siblings().attr('src') + '?autoplay=1');
		});
	});

	jQuery(window).resize(function(){
		jQuery('.item-sobre-h').each(function(){
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
	});

	jQuery('#treinamentos').owlCarousel({
		loop: false,
		center: false,
		nav: true,
		margin: 20,
		navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
		responsive: {
			0: {
				items: 1
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