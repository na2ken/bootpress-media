<?php
/* Template Name: content-a.php */
get_header(); ?>
<!-- ◆content-a template◆ -->
<div class="l-cover verticalPadding-t-xs verticalPadding-b-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 wow fadeInUp" data-wow-duration="2.5s" data-wow-delay="1.0s">
                <h1 class="h2 text-center NotoSansJP-Thin ">single article</h1>
            </div>
        </div><!-- /.row -->
    </div>
</div><!-- /.l-cover -->

<article class="gryColorTone">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 gryColor verticalMargin-t-sm verticalMargin-b-sm">
                         <section class="">
	<?php
		// ループ開始
		while ( have_posts() ) : the_post(); ?>

<div class="eyeCatch">
<?php
// アイキャッチ画像を配置する
        if ( has_post_thumbnail() ) :
        the_post_thumbnail( 'medium img-responsive' );
        else : ?>
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/img/img-noimage.png" alt="<?php the_title(); ?>" class="img-responsive">
                <!-- アイキャッチ画像がないときに表示させる仮画像  -->
            </figure>
<?php endif; ?>
</div>
			<div class="verticalMargin-t-xs">
			    <h2 class="h2 NotoSansJP-Thin"><?php the_title(); ?></h2>
			</div>
            <div class="postinfo">
                <span class="postcat">
                    <i class="fa fa-folder-open"></i><?php the_taxonomies( $args ); ?>
                </span>
            </div>  
			<div class="verticalMargin-t-0">
			    <?php the_content(); ?>
			</div>

                                <div class="alert alert-warning alert-dismissible visible-xs">
                                    <button class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <p class"text-center">スマホで見にくい場合は、PCで見てね！</p>
                                </div>



<div class="row">
			<div class="col-xs-6">
			<?php
			/**
			 * 投稿ナビゲーション
			 */ ?>
				<span id="next"><?php next_post_link( '%link','&laquo; %title' ); ?></span>
			</div>
			<div class="col-xs-6 text-right">
				<span id="prev"><?php previous_post_link( '%link','%title &raquo;' ); ?></span>
			<?php
			// ループ終了
			endwhile; ?>
			</div>
</div>


                        </section>
                    </div><!-- col-8 -->
                    <div class="col-sm-4 verticalMargin-t-sm verticalMargin-b-sm">
                    <div class="col-xs-12 gryColor verticalPadding-t-sm verticalPadding-b-sm">
                    <aside class="" role="complementary">
                    <?php get_sidebar(); ?>
                    </aside>
                    </div>
                    </div><!-- col-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
</article>

<?php
get_footer();
