<?php
/* Template Name: page-styleguide */
get_header(); ?>
<!-- page styleguide template -->
<div class="l-cover verticalPadding-t-md verticalPadding-b-md">

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            <h1 class="text-center"><?php the_title(); ?></h1>
<ul class="nav nav-pills">
    <li class=""><a href="<?php bloginfo('url'); ?>/_styleguide/">Stylegude Home</a></li>
    <li><a href="<?php bloginfo('url'); ?>/_styleguide/displaytest/">表示テスト</a></li>
    <li><a href="<?php bloginfo('url'); ?>/_styleguide/styleguide/">スタイルガイド</a></li>
    <li><a href="<?php bloginfo('url'); ?>/_styleguide/codingguide/">コーディングガイドライン</a></li>
    <li><a href="<?php bloginfo('url'); ?>/_styleguide/imgguide/">画像作成ガイドライン</a></li>
    <li><a href="<?php bloginfo('url'); ?>/_styleguide/layoutpattern/">レイアウトパターン</a></li>
</ul>
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
