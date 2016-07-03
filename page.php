<?php
/* Template Name: page.php */
get_header(); ?>
<!-- page mplate -->
<div class="l-cover verticalPadding-t-md verticalPadding-b-md">

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            <h1 class="text-center"><?php the_title(); ?></h1>
            </div>


        </div><!-- /.row -->
    </div>

</div><!-- /.l-cover -->

<article class="archiveArticle">
    <div class="container-fluid">
        <div class="row">
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <?php remove_filter ('the_content', 'wpautop'); ?>
            <?php the_content(); ?>
            <?php endwhile; endif; ?>
	</div><!-- /.row -->
    </div><!-- /.container -->
</article>

<?php
get_footer();
