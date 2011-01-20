<?php
/** 
 *	@package WordPress
 *	@subpackage Giant Steps
 */
get_header();
?>
	<section>
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" class="post-archive">
			<?php if (get_post_meta($post->ID, 'secondary_image', true)): ?>
				<?php $image = get_post_meta($post->ID, 'secondary_image', true); ?>
				<div class="crop"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><img width="220" src="<?php echo $image; ?>" alt="<?php the_title(); ?>" /></a></div>
				<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title() ?></a>
				<?php else: ?><br/>
				<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title() ?></a>
			<?php endif; ?>
		</article>
		<?php endwhile; ?>
		<?php else : ?>
		<?php endif; ?>
		<div class="clear"></div>
		
	</section>
<?php get_footer(); ?>