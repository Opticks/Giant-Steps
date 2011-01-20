<?php
/**
 *	@package WordPress
 *	@subpackage Giant Steps
 */
get_header();
?>
	<section>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" class="post">
		  <header>	
        <h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title() ?></a></h2>
      </header>
			<div class="entry">
				<?php the_content('Read the rest of this entry &raquo;'); ?>
				<p class="meta">
					Posted by <span class="author"><?php the_author_posts_link(); ?></span>
					on <span class="date"><?php the_time('M j, Y') ?></span>
					and filed in categorie(s) <span class="categories"><?php the_category( '/'); ?> </span>.
				</p>
			</div>
		</article>
		<?php endwhile; ?>
		<?php else : ?>
		<div class="post">
			<div class="meta">
				<span class="date">No Matches</span>
			</div>
		</div>
		<?php endif; ?>
		<nav>
			<?php previous_posts_link('Previous') ?>
			<?php next_posts_link('Next') ?>
		</nav>
	</section>
<?php get_footer(); ?>