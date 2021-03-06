<?php
/**
 * The template for displaying archive product pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div class="product-grid-container">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<header class="page-header">
				<?php if ( have_posts() ) : ?>
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
				<p>We are a team of creative and talented individuals who love making delicious treats.</p>	
				<hr class="decorative"></hr>	

				<section class="product-info-container">
					<?php
					$terms = get_terms("product-type");
					if ($terms) : ?>
						<ul class="product-type-blocks">
							<?php foreach($terms as $term) : ?>
							<li class="product-type-block-wrapper">
								<a href="<?php echo get_term_link($term); ?>">
								<img src="<?php echo get_template_directory_uri() ?>/images/<?php echo $term->slug ?>.png"
								alt="<?php echo $term->slug ?>">
								<h3><?php echo $term->name ?></h3>
								</a>
							</li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>
				</section>
			</header><!-- .page-header -->

			<div class="product-grid">
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
			
				
				<div class="product-grid-item">
					<?php if ( has_post_thumbnail() ) : ?>
					<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark"><?php the_post_thumbnail( 'large' ); ?></a>
					<div class="product-grid-info">
						<span class="entry-title"><?php the_title(); ?></span>
						<?php endif; ?>
						<span class="product-grid-price"><?php echo esc_html( CFS()->get('price')); ?></span>
					</div>
				</div>
			<!-- .entry-content -->
	
				<?php endwhile; ?>
					<?php the_posts_navigation(); ?>

				<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>
			</div>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
