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
      </header
			<div class="entry">
				<?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>
				<p class="meta">
					Posted by <span class="author"><?php the_author_posts_link(); ?></span>
					on <span class="date"><?php the_time('M j, Y') ?></span>
					and filed in categorie(s) <span class="categories"><?php the_category( '/'); ?> </span>.
				</p>
	    </div>
	  </article>
	  <section id="comments">
		  <?php comments_template(); ?>
	  </section>
	  <?php endwhile; else: ?>
	  <div class="post">
		  <h2>No matching results</h2>
		  <div class="entry">
			  <p>You seem to have found a mis-linked page or search query with no associated results. Please trying your search again. If you feel that you should be staring at something a little more concrete, feel free to email the author of this site or browse the archives.</p>
		  </div>
	  </div>
	  <?php endif; ?>
  </section>
<?php get_footer(); ?>