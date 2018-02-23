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
				<?php if(get_field('versiculo','option')){ ?>
					<h2 class="center"><?php the_field('versiculo','option'); ?></h2>
				<?php } ?>
				<h4 class="center"><?php the_field('texto_versiculo','option'); ?></h4>
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

<section class="box-content no-height amarelo envolvase envolvase-home">
	<div class="container">
		
		<div class="row">
			<div class="col-12">
				<h2 class="center">Oferte</h2>
				<h4 class="center">Seja a diferença! Faça a sua doação</h4>

				<ul class="doacao">
					<li class="">
						<div class="cont">
							<div class="middle">
								<h2>quero doar</h2>
								<span>R$ 10</span>
							</div>
						</div>
					</li>
					<li class="active">
						<div class="cont">
							<div class="middle">
								<h2>quero doar</h2>
								<span>R$ 50</span>
							</div>
						</div>
					</li>
					<li class="">
						<div class="cont">
							<div class="middle">
								<h2>quero doar</h2>
								<span>R$ 100</span>
							</div>
						</div>
					</li>
					<li class="outro_valor">
						<div class="cont">
							<div class="middle">
								<h2>outra quantia</h2>
								<span><input type="text" class="real" id="outro_valor" name="outro_valor" placeholder="R$ 0"></span>
							</div>
						</div>
					</li>
					<li class="button-ofertar">
						<a href="javascript:" class="button enviar ofertar">Ofertar!</a>
					</li>
				</ul>

				<p class="center">
					<a href="javascript:" class="button enviar">Desejo ser um parceiro mensal</a>
					<span class="info-p">* Escolha uma quantia</span>
				</p>
			</div>
		</div>
	</div>
</section>

<section class="box-content projetos no-height" id="projetos">
	<div class="container">
		
		<div class="row list-projeto">
			<div class="col-12">
				<h2 class="center"><?php echo get_category_by_slug( 'projetos' )->name; ?></h2>
				<h4 class="center"><?php echo get_category_by_slug( 'projetos' )->category_description; ?></h4>
			</div>


			<?php
				query_posts(
					array(
						'post_type' => 'post',
						'cat' => get_category_by_slug( 'projetos' )->term_id
					)
				);

				while ( have_posts() ) : the_post(); ?>

					<div class="item-proj">
						<?php 
							if(get_field('video')){ 

								$val_video = explode('embed/', get_field('video'));
								$val_video = explode('?', $val_video[1])[0]; ?>

								<iframe class="col-6 img-projeto" src="https://www.youtube.com/embed/<?php echo $val_video; ?>" frameborder="0" encrypted-media" allowfullscreen></iframe>
								<div class="col-6 img-projeto" style="background-image: url('https://img.youtube.com/vi/<?php echo $val_video; ?>/maxresdefault.jpg');">
									<i class="fa fa-youtube-play" aria-hidden="true"></i>
								</div>

							<?php }else{

								$imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' );
								if($imagem[0]){ ?>
									<div class="col-6 img-projeto" style="background-image: url('<?php echo $imagem[0]; ?>');"></div>
								<?php }

							}					
						?>
						<div class="col-6 cont-proj">
							<div class="box-cont-proj">
								<h2 class=""><?php echo get_category_by_slug( 'projetos' )->name; ?></h2>
								<h4 class=""><?php the_title(); ?></h4>
								<?php the_excerpt(); ?>
								<a href="<?php the_permalink(); ?>" class="button">saiba mais <i class="fa fa-angle-right" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>

				<?php endwhile;
				wp_reset_query();
			?>
		</div>

	</div>
</section>

<div class="owl-carousel owl-theme list-treinamentos" id="treinamentos">

	<?php
		query_posts(
			array(
				'post_type' => 'post',
				'cat' => get_category_by_slug( 'treinamentos' )->term_id
			)
		);

		while ( have_posts() ) : the_post(); ?>

			<section class="item box-content no-padding treinamentos" style="background-image: url('<?php the_field('imagem_block'); ?>');">
				<div class="box-treinamentos">
					<div class="">
						
						<div class="row">
							<div class="slide-treinamento">
								<div class="middle-treinamento row">

										<div class="item-slide-treinamentos">

						<?php 
							if(get_field('video')){ 

								$val_video = explode('embed/', get_field('video'));
								$val_video = explode('?', $val_video[1])[0]; ?>

								<iframe class="col-6 img-treinamentos" src="https://www.youtube.com/embed/<?php echo $val_video; ?>" frameborder="0" encrypted-media" allowfullscreen></iframe>
								<div class="col-6 img-treinamentos" style="background-image: url('https://img.youtube.com/vi/<?php echo $val_video; ?>/maxresdefault.jpg');">
									<i class="fa fa-youtube-play" aria-hidden="true"></i>
								</div>

							<?php }else{

								$imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' );
								if($imagem[0]){ ?>
									<div class="col-6 img-treinamentos" style="background-image: url('<?php echo $imagem[0]; ?>');"></div>
								<?php }

							}					
						?>

											<div class="col-6 cont-treinamentos">
												<div class="table">
													<div class="table-cell">
														<h2 class=""><?php echo get_category_by_slug( 'treinamentos' )->name; ?></h2>
														<a href="javascript:"><h4 class=""><?php the_title(); ?></h4></a>
														<?php the_excerpt(); ?>
														<a href="<?php the_permalink(); ?>" class="button">saiba mais <i class="fa fa-angle-right" aria-hidden="true"></i></a>
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

		<?php endwhile; 
		wp_reset_query();
	?>

</div>

<?php if(have_rows('igrejas','option')): ?>
	<section class="box-content no-padding sobre-home item-sobre-content active" style="background-image: url('<?php the_field('imagem_bloco_igrejas','option'); ?>');" id="igrejas-parceiras">
		<div class="mask-content-item">		

			<div class="table">
				<div class="table-cell">
					
					<div class="container">
					<div class= "row">
						<div class="col-12 txt-sobre igrejas-parceiras">
							<h4 class="titulo">Igrejas Parceiras</h4>

							<div class="owl-carousel owl-theme list-igrejas">

								<?php while ( have_rows('igrejas','option') ) : the_row(); ?>

									<div class="item">
										<a href="<?php the_sub_field('url'); ?>" target="_blank">
											<img src="<?php the_sub_field('imagem'); ?>" alt="">
										</a>
									</div>

								<?php endwhile; ?>

							</div>

							<a href="javascript:" class="button modal-igrejas-parceiras">seja uma igreja parceira <i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>

						</div>
						</div>
					</div>

				</div>
			</div>

		</div>
	</section>
<?php endif; ?>

<section class="box-content no-padding envolva-se">

	<div class="table">
		<div class="table-cell" id="envolva-se">

			<div class="container">
				<div class="sobre-home box-item-sobre row">
					<div class="col-5 item-sobre active">
						<div class="mask-hover">
							<div class="box-hover">
								<h4 class="titulo">Envolva-se</h4>
								<p><?php the_field('texto_envolva-se','option'); ?>
							</div>
						</div>
					</div>
					<div class="col-7">
						<a href="<?php echo get_permalink(get_page_by_path('ore')); ?>" class="col-6 item-sobre" style="background-image: url('<?php the_field('imagem_block',get_page_by_path('ore')); ?>');">
							<div class="mask-hover">
								<div class="box-hover">
									<h4 class="titulo"><?php echo get_the_title(get_page_by_path('ore')); ?></h4>
									<span class="button">saiba mais <i class="fa fa-angle-right" aria-hidden="true"></i></span>
								</div>
							</div>
						</a>
						<a href="<?php echo get_permalink(get_page_by_path('oferte')); ?>" class="col-6 item-sobre" style="background-image: url('<?php the_field('imagem_block',get_page_by_path('oferte')); ?>');">
							<div class="mask-hover">
								<div class="box-hover">
									<h4 class="titulo"><?php echo get_the_title(get_page_by_path('oferte')); ?></h4>
									<span class="button">saiba mais <i class="fa fa-angle-right" aria-hidden="true"></i></span>
								</div>
							</div>
						</a>

						<a href="<?php echo get_permalink(get_page_by_path('ide')); ?>" class="col-6 item-sobre" style="background-image: url('<?php the_field('imagem_block',get_page_by_path('ide')); ?>');">
							<div class="mask-hover">
								<div class="box-hover">
									<h4 class="titulo"><?php echo get_the_title(get_page_by_path('ide')); ?></h4>
									<span class="button">saiba mais <i class="fa fa-angle-right" aria-hidden="true"></i></span>
								</div>
							</div>
						</a>
						<a href="<?php echo get_permalink(get_page_by_path('mobilize')); ?>" class="col-6 item-sobre" style="background-image: url('<?php the_field('imagem_block',get_page_by_path('mobilize')); ?>');">
							<div class="mask-hover">
								<div class="box-hover">
									<h4 class="titulo"><?php echo get_the_title(get_page_by_path('mobilize')); ?></h4>
									<span class="button">saiba mais <i class="fa fa-angle-right" aria-hidden="true"></i></span>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>

		</div>
	</div>

</section>


<div class="bg-modal" id="modal-igrejas-parceiras">
	<div class="box-modal">
		<div class="modal-conteudo">

			<i class="fa fa-times close-modal" aria-hidden="true"></i>
			<h2>Desejo ser uma igreja parceira!</h2>

			<form id="form-igrejas-parceiras">
				<fieldset>
					<input type="text" name="nome_igrejas" id="nome_igrejas" placeholder="Nome *">
				</fieldset>

				<fieldset>
					<input type="text" name="email_igrejas" id="email_igrejas" placeholder="E-mail *">
				</fieldset>

				<fieldset>
					<input type="text" class="telefone" name="telefone_igrejas" id="telefone_igrejas" placeholder="DDD + telefone *">
				</fieldset>

				<fieldset>
					<p class="msg msg-form center erro"></p>
					<button class="button btn-igreja">ENVIAR</button>
				</fieldset>
			</form>

		</div>
	</div>
</div>


<?php get_footer(); ?>

<script type="text/javascript">
	jQuery(document).ready(function(){	

		jQuery('.doacao li').click(function(){
			jQuery('.doacao li').removeClass('active');
			jQuery(this).addClass('active');

			if(jQuery(this).hasClass('outro_valor')){
				jQuery('#outro_valor').focus();
			}
		});

		jQuery('.modal-igrejas-parceiras').click(function(){
			jQuery('#modal-igrejas-parceiras').css('display','table');
		});

		jQuery('.close-modal').click(function(){
			jQuery(this).parents('.bg-modal').hide();
			jQuery('.msg').html('');
		});

		jQuery('#form-igrejas-parceiras').submit(function(event){
			jQuery('form#form-igrejas-parceiras .btn-igreja').html('ENVIANDO').prop( "disabled", true );
			jQuery('#modal-orcamento .msg').removeClass('erro ok').html('');
			var nome = jQuery('#nome_igrejas').val();
			var email = jQuery('#email_igrejas').val();
			var telefone = jQuery('#telefone_igrejas').val();
			var para = '<?php the_field('email', 'option'); ?>';
			var nome_site = '<?php the_field('titulo', 'option'); ?>';

			var enviar = true;
			if(nome == ''){
				jQuery('#nome_igrejas').parent().addClass('erro');
				enviar = false;
			}

			if(email == ''){
				jQuery('#email_igrejas').parent().addClass('erro');
				enviar = false;
			}

			if(telefone == ''){
				jQuery('#telefone_igrejas').parent().addClass('erro');
				enviar = false;
			}

			if(enviar){
				jQuery.getJSON("<?php echo get_template_directory_uri(); ?>/mail-igrejas.php", { nome:nome, email:email, telefone:telefone,para:para, nome_site:nome_site }, function(result){		
					if(result=='ok'){
						resultado = 'Pedido de cadastro enviado com sucesso! Obrigado.';
						classe = 'ok';
					}else{
						resultado = result;
						classe = 'erro';
					}
					jQuery('#modal-igrejas-parceiras .msg').addClass(classe).html(resultado);
					jQuery('form#form-igrejas-parceiras').trigger("reset");
					jQuery('form#form-igrejas-parceiras .btn-igreja').html('ENVIAR').prop( "disabled", false );
				});
			}else{
				jQuery('#modal-igrejas-parceiras .msg').addClass('erro').html('Todos os campos são obrigatórios.');
				jQuery('form#form-igrejas-parceiras .btn-igreja').html('ENVIAR').prop( "disabled", false );
			}

			return false;
		});

		jQuery('input').change(function(){
			if(jQuery(this).parent().hasClass('erro')){
				jQuery(this).parent().removeClass('erro');
			}
		});

		jQuery('textarea').change(function(){
			if(jQuery(this).parent().hasClass('erro')){
				jQuery(this).parent().removeClass('erro');
			}
		});

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
				items: 1
			},
			400: {
				items: 1
			},
			600: {
				items: 2
			},
			800: {
				items: 3
			},
			1200: {
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

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/maskedinput.js"></script>
<script type="text/javascript">
	jQuery(function($){
	   jQuery(".telefone").mask("(99) 9999-9999?9");

	   jQuery.mask.definitions['d'] = '[0-9.]';
	   jQuery('.real').mask('R$ 9?ddddd', ' ');
	});
</script>