<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage TemplateMela
 * @since TemplateMela 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php
		// Page thumbnail and title.
		templatemela_post_thumbnail();
		//the_title( '<header class="entry-header"><h1 class="entry-title">', '</h1></header><!-- .entry-header -->' );
	?>
  <div class="entry-content">
    <?php the_content(); ?>
    <div class="inner-container">
	<?php 
		wp_link_pages( array(
		'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'harvest' ) . '</span>',
		'after'       => '</div>',
		'link_before' => '<span>',
		'link_after'  => '</span>',
		) );		
		edit_post_link( esc_html__( 'Edit', 'harvest' ), '<span class="edit-link">', '</span>' );
	?>
    </div>
    <!-- .inner-container -->
  </div>
  <!-- .entry-content -->
</article>
<!-- #post-## -->