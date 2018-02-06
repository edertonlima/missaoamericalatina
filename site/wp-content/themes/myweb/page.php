<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<section class="box-content no-padding img-destaque header-page no-height" style="background-image: url('<?php the_field('imagem_block') ?>');">
			<div class="mask"><div class="container"><div><span><?php the_title(); ?></span></div></div></div>
		</section>

		<section class="box-content no-height verde">
			<div class="container">
				
				<div class="content-post">

					<div class="row">
						<div class="col-4">
							<?php $imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' ); ?>
							<img src="<?php echo $imagem[0]; ?>" class="img-ico-cont">
						</div>

						<div class="col-8">
							<h2 class=""><?php the_title(); ?></h2>
							<h4 class=""><?php the_field('subtitulo'); ?></h4>
							<?php the_excerpt(); ?>
						</div>
					</div>
				</div>

			</div>
		</section>

		<section class="box-content no-height amarelo">
			<div class="container">
				
				<div class="content-post">
					<div class="row">
						<div class="col-12 justify">
							<?php the_content(); ?>
						</div>
					</div>
				</div>

			</div>
		</section>

		<?php //if(is_page('sobre')){
			if(have_rows('item_sobre')): ?>

				<section class="box-content no-height">
					<div class="container">
						
						<div class="content-post">
							<div class="row">

								<?php while ( have_rows('item_sobre') ) : the_row(); ?>

									<?php $imagem = get_sub_field('imagem'); ?>

									<div class="sobre-home row" id="<?php the_sub_field('titulo'); ?>">
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

							</div>
						</div>

					</div>
				</section>

			<?php endif;
		//} ?>

		<script type="text/javascript">
			jQuery(window).load(function(){

			});
		</script>

	<?php endwhile;	?>

<?php get_footer(); ?>
