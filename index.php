<?php
/**
 *	@package WordPress
 *	@subpackage Giant Steps
 */
get_header();
?>
	<div id="body">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" class="post">
			<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title() ?></a></h2>
			<div class="entry">
				<?php the_content('Read the rest of this entry &raquo;'); ?>
				<p class="meta">
					Posted by <span class="author"><?php the_author_posts_link(); ?></span>
					on <span class="date"><?php the_time('M j, Y') ?></span>
					and filed in categorie(s) <span class="categories"><?php the_category( '/'); ?> </span>.
				</p>
			</div>
		</div>
		<?php endwhile; ?>
		<?php else : ?>
		<div class="post">
			<div class="meta">
				<span class="date">No Matches</span>
			</div>
		</div>
		<?php endif; ?>
		<ul id="pager">
			<li id="prev-link"><?php previous_posts_link('Previous') ?></li>
			<li id="next-link"><?php next_posts_link('Next') ?></li>
		</ul>
	</div><!--BODY-->
<?php get_footer(); ?>