<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<section class="box-content no-padding">
			<h2>
				<div class="container">
					<img src="<?php the_field('ico_preto',$post->post_parent); ?>">
					<span><?php echo get_the_title($post->post_parent); ?></span>
				</div>
			</h2>

			<div class="tit-page-child">
				<div class="container">
					<span><?php the_title(); ?></span>
				</div>
			</div>
		</section>

		<?php 
			$imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '' ); 
			if($imagem[0]){ ?>
				<section class="box-content img-destaque page-child" style="background-image: url('<?php echo $imagem[0]; ?>');"></section>
			<?php }
		?>

		<?php 
			if(get_the_content()){ ?>
				<section class="box-content cinza">
					<div class="container">
						
						<div class="content-post">
							<?php the_content(); ?>
						</div>

					</div>
				</section>
			<?php }
		?>

		<?php if(get_field('imagem_descricao')){ ?>
			<section class="box-content">
				<div class="container">
					
					<div class="content-post">
						<img src="<?php the_field('imagem_descricao'); ?>" class="img-content">
					</div>

				</div>
			</section>
		<?php } ?>

		<section class="box-content">
			<div class="container">

				<?php if( have_rows('itens_detalhes_distancia') ): ?>
					<?php while ( have_rows('itens_detalhes_distancia') ) : the_row(); ?>
									
						<h3><?php the_sub_field('titulo'); ?></h3>
						<div class="content-post cont-box ico-cont itens_detalhes">
							<?php if(get_sub_field('icone')){ ?>
								<img src="<?php the_sub_field('icone'); ?>" class="img-ico-cont">
							<?php } ?>
							
							<?php if((get_sub_field('tempo')) and (get_sub_field('distancia'))){ ?>
								<div class="box-distancia">
									<div class="col">
										<div class="tempo">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-relogio.png">
											<span><?php the_sub_field('tempo'); ?></span>
										</div>
										<div class="distancia">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-distancia.png">
											<span><?php the_sub_field('distancia'); ?></span>
										</div>
									</div>
									<div class="col">
										<p class="justify"><?php the_sub_field('texto'); ?>
									</div>
								</div>
							<?php } ?>

							<?php if( have_rows('itens_itens') ): ?>
								<ul class="distancia-bottom">
									<?php while (has_sub_field('itens_itens')) { ?>
										<li>
											<img src="<?php the_sub_field('imagem'); ?>" class="img-detalhe">
											<span><?php the_sub_field('titulo'); ?></span>
											<p class="justify"><?php the_sub_field('texto'); ?></p>
										</li>
									<?php } ?>
								</ul>
							<?php endif; ?>							
						</div>

					<?php endwhile; ?>
				<?php endif; ?>	

			</div>
		</section>

		<script type="text/javascript">
			jQuery(window).load(function(){

			});
		</script>

	<?php endwhile;	?>

<?php get_footer(); ?>