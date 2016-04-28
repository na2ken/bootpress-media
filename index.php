<?php
/* Template Name: index.php */
get_header(); ?>
<!-- index template -->
<article class="archiveArticle">
<div class="l-cover verticalPadding-t-md verticalPadding-b-md">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">

                <h1 class="text-center"></h1>

            </div>
        </div><!-- /.row -->
    </div>
</div><!-- /.l-cover -->


<div class="container">
	<div class="row verticalPadding-t-sm">
		 <div class="col-sm-6 col-md-4 verticalPadding-b-sm">
			<section>
			 <div class="m-iCatch">
				  <?php
				  // アイキャッチ画像
				  if ( has_post_thumbnail() ) :
				  the_post_thumbnail( 'medium img-responsive');
				  else : ?>
				  <img src="<?php echo get_template_directory_uri(); ?>/img/img-noimage.png" class="img-responsive" alt="" />
				  <?php endif; ?>
			 </div><!--/.m-iCatch-->



             <?php if ( have_posts() ) : ?>

     			<?php if ( is_home() && ! is_front_page() ) : ?>
     				<header>
     					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
     				</header>
     			<?php endif; ?>

     			<?php
     			// Start the loop.
     			while ( have_posts() ) : the_post();

     				/*
     				 * Include the Post-Format-specific template for the content.
     				 * If you want to override this in a child theme, then include a file
     				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
     				 */
     				get_template_part( 'content', get_post_format() );

     			// End the loop.
     			endwhile;

     			// Previous/next page navigation.
     			the_posts_pagination( array(
     				'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
     				'next_text'          => __( 'Next page', 'twentyfifteen' ),
     				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
     			) );

     		// If no content, include the "No posts found" template.
     		else :
     			get_template_part( 'content', 'none' );

     		endif;
     		?>

            <section>
        </div><!-- /.col-sm-6 -->
	</div><!-- /.row -->
</div><!-- /.container -->


</article>


<?php
get_footer();









get_footer();
