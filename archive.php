<?php
/** 
	Template Name: archives
 *	@package WordPress
 *	@subpackage Giant Steps
 */
get_header();
?>
	<section>
		<?php if (have_posts()) : ?>
		<?php query_posts("showposts=-1"); ?>
			<?php while (have_posts()) : the_post(); ?> 
			<article id="post-<?php the_ID(); ?>" class="post post-archive">
				<?php if (get_post_meta($post->ID, 'secondary_image', true)): ?>
				<?php $image = get_post_meta($post->ID, 'secondary_image', true); ?>
				<div class="crop">
					<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><img width="220" src="<?php echo $image; ?>" alt="<?php the_title(); ?>" /></a>
				</div>
				<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title() ?></a>
				<?php endif; ?>
			</article>
			<?php endwhile; ?>
			<?php else : ?>
		<?php endif; ?>
		<div class="clear"></div>
		<nav>
			<?php previous_posts_link('Previous') ?>
			<?php next_posts_link('Next') ?>
    </nav>
	</section>
<?php get_footer(); ?>