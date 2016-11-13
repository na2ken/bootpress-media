<?php
/* Template Name: single-content-a.php
 * date160809
 * Template ID: single-panel-1col-sidebar
 */
get_header(); ?>
<!-- single-panel-1col-sidebar -->
<div class="l-cover">
</div><!-- /.l-cover -->

<article class="gryColor">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 wht verticalMargin-t-sm verticalMargin-b-sm">
                         <section class="wht">
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

        <div class="">
            <h2 class="h2 NotoSansJP-Thin verticalMargin-t-xs"><?php the_title(); ?></h2>


            <div class="verticalMargin-t-sm">
                <?php the_content(); ?>
            </div>
            <p>なるほど！と思ったら、すぐシェア♪</p>
            <div class="verticalMargin-t-sm">
                <figure>
                    <?php echo get_avatar( 1, 32, '', '', array('class'=>'img-circle', 'extra_attr'=>'style="margin: 0 5px 0 0;"') ); ?>
                </figure>
                    <p><span class="small"><?php the_author_posts_link(); ?>(<?php the_author_posts(); ?> )</span></p>
            </div>

            <div class="col-full verticalMargin-t-xs verticalMargin-b-xs">
                <div class="wrap-col">
                    <?php comments_template(); ?>
            </div><!-- /.wrap-col -->
        </div><!-- /.col-full -->

        <div class="row verticalMargin-t-sm verticalMargin-b-sm">
            <div class="horizontalPadding-l-xs horizontalPadding-r-xs">
                <h4 class="h4 NotoSansJP-Thin text-center keyColor40pale verticalPadding-t-xs verticalPadding-b-xs">関連記事まとめ</h4>
                <ul class="navbarNavUnit-local">
                    <?php
                      $args = array(
                        'posts_per_page' => 7,
                        'post_type' => get_post_type(),  //表示中の記事と同じ投稿タイプの記事を取得
                      );
                      $my_query = new WP_Query($args);
                      ?>
                      <?php if($my_query->have_posts()): while($my_query->have_posts()): $my_query->the_post(); ?>
                        <li class="list-unstyled"><a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?></a></li>
                      <?php endwhile; endif; ?>
                      <?php wp_reset_postdata(); ?>
                      </ul>
              </div>
          </div><!-- /.row -->
          <?php get_template_part('offer'); ?>
            <?php
            // ループ終了
            endwhile; ?>
      </section>
  </div><!-- col-8 -->
                      <div class="col-sm-4 verticalMargin-t-sm verticalMargin-b-sm">
                      <div class="col-xs-12 gryColor verticalPadding-t-0 verticalPadding-b-sm">

                        <h3 class="h2 verticalMargin-t-0 headeigDec-Underline">アクセスランキング</h3>
  <ul class="navbarNavUnit-local">
  <?php
    $args = array(
      'posts_per_page' => 10,
      'post_type' => get_post_type(),  //表示中の記事と同じ投稿タイプの記事を取得
    );
    $my_query = new WP_Query($args);
  ?>
  <?php if($my_query->have_posts()): while($my_query->have_posts()): $my_query->the_post(); ?>
  <li class="list-unstyled"><a href="<?php the_permalink(); ?>">
    <?php the_title(); ?></a></li>
  <?php endwhile; endif; ?>
  <?php wp_reset_postdata(); ?>
  </ul>


                      </div>
                      </div><!-- col-4 -->
              </div><!-- /.row -->
          </div><!-- /.container -->
  </article>

  <?php
get_footer();
