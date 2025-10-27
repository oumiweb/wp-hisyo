<?php get_header();
global $post;
?>
<div class="page-header">
	<div class="container">
		<h1 class="mm page-header__title">
			<?php echo get_the_title();?>
		</h1>
	</div>
</div>

<div class="sub-page-contents">
	<div class="breadarea">  
		<div class="container">
			<?php get_template_part( 'modules/breadcrumbs' ); ?>
		</div>
	</div>
	<main id="main" role="main">

					
					<article <?php post_class( array( 'article', 'article--page' ) ); ?>>
						
							<?php the_content(); ?>
						
					</article>
	
	</main>
</div>
<?php get_footer(); ?>
