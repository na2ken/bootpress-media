<?php
/* Template Name: home.php */
/* Last update 1611015 */
get_header(); ?>
<!-- home template -->
<div class="l-cover gryColorTone">

    <div class="row no-gutter wow fadeInUp verticalMargin-t-0" data-wow-duration="2.5s" data-wow-delay=".0s">
      <?php
           global $post;
           $my_posts= get_posts(array(
           'post_type' => array('post'),
           'numberposts' => 1
           ));
           foreach($my_posts as $post):setup_postdata($post);
           ?>
        <div class="col-sm-6">
    <?php
// アイキャッチ画像を配置する
if ( has_post_thumbnail() ) :
the_post_thumbnail( 'medium img-responsive' );
else : ?>
<figure>
    <img src="<?php bloginfo('template_url'); ?>/img/img-noimage.png" alt="<?php the_title(); ?>" class="img-responsive">
    <!-- アイキャッチ画像がないときに表示させる仮画像  -->
</figure>
    <?php endif; ?>
        </div>
        <div class="col-sm-6">
            <div class="horizontalMargin-l-sm horizontalMargin-r-sm text-left">
                <p class="textSize-xs"><span class="label label-primary">NEW</span></p>
                <h1 class="h1 NotoSansJP-Thin verticalMargin-b-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <p class="blck-text verticalMargin-t-0 verticalPadding-t-0"><?php echo mb_substr(strip_tags($post-> post_content),0,70).'・・・'; ?></p>
                <p class="small keyColor40dark-text">
                    <i class="fa fa-clock-o horizontalPadding-r-xs text-subColor" aria-hidden="true"></i><time datetime="<?php echo get_the_date( 'Y-m-j' ) ?>"><?php the_time( get_option( 'date_format' ) ); ?>
                    </time><i class="fa fa-commenting-o horizontalPadding-r-xs horizontalPadding-l-sm text-subColor" aria-hidden="true"></i><?php comments_number( 'なし', 'あり', '%件' ); ?>
                </p>

            </div><!-- /.horizontalMargin -->
        </div>
<?php endforeach; ?>
    </div><!-- /.row -->

</div><!-- /.l-cover -->


<article>
  <div class="container-fluid gryColor">
      <div class="row verticalPadding-t-sm">
  <div class="hidden-xs col-lg-3 col-sm-4 verticalPadding-b-sm wow fadeInUp" data-wow-duration="2.5s" data-wow-delay="0.5s">
      <section>

      <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
          <div id="secondary" class="widget-area" role="complementary">
              <?php dynamic_sidebar( 'sidebar-1' ); ?>
          </div><!-- #secondary -->
      <?php endif; ?>

    </section>


  </div><!-- /.col-lg-3 -->

  <div class="col-lg-3 col-sm-4 verticalPadding-b-sm wow fadeInUp" data-wow-duration="2.5s" data-wow-delay="1.0s">
      <section class="wht">
        <div class="verticalPadding-t-xs verticalPadding-b-xs verticalMargin-b-0 keyColor">
            <h2 class="horizontalMargin-l-xs horizontalMargin-r-xs textSize-xs NotoSansJP-Thin textColor-wht">ミニカテゴリー</h2>
        </div>
        <?php $posts = get_posts('numberposts=10&offset=0&category=2'); foreach ($posts as $post): ?>
<div class="col-xs-12 wht">
<div class="l-box verticalPadding-b-sm horizontalPadding-l-xs horizontalPadding-r-xs">
                    <h3 class="h2 NotoSansJP-Thin verticalMargin-t-xs verticalMargin-b-0 verticalPadding-b-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                    <p class="small verticalMargin-t-xs verticalPadding-t-0 verticalMargin-b-0 verticalPadding-b-0"><?php echo mb_substr(strip_tags($post-> post_content),0,100).'...'; ?></p>
                    <div class="excerpt verticalMargin-t-xs keyColor40pale">
                        <span class="small">
                            <i class="fa fa-clock-o horizontalPadding-r-xs horizontalPadding-l-xs text-subColor" aria-hidden="true"></i><time datetime="<?php echo get_the_date( 'Y-m-j' ) ?>"><?php the_time( get_option( 'date_format' ) ); ?>
                            </time><i class="fa fa-commenting-o horizontalPadding-r-xs horizontalPadding-l-sm text-subColor" aria-hidden="true"></i><?php comments_number( 'なし', 'あり', '%件' ); ?>
                        <br>

                            <i class="fa fa-folder-o horizontalPadding-r-xs horizontalPadding-l-xs text-subColor" aria-hidden="true"></i><?php the_category( ',' ); ?>
                        </span>
                    </div>

</div><!-- /.l-box -->
</div><!-- /.xs-12 -->

        <?php endforeach; ?>

      </section>
      <ul class="navbarNavUnit-local"><li><i class="fa fa-list-ul horizontalMargin-r-xs" aria-hidden="true"></i>
          <a href="">このコテゴリの一覧</a></li>
      </ul>
  </div><!-- /.col-lg-3 -->




  <div class="col-lg-3 col-sm-4 verticalPadding-b-sm wow fadeInUp" data-wow-duration="2.5s" data-wow-delay="1.0s">
      <section class="wht">
        <div class="verticalPadding-t-xs verticalPadding-b-xs verticalMargin-b-0 keyColor">
            <h2 class="horizontalMargin-l-xs horizontalMargin-r-xs textSize-xs NotoSansJP-Thin textColor-wht">新規カテゴリー</h2>
        </div>
        <?php $posts = get_posts('numberposts=10&offset=0&category=3'); foreach ($posts as $post): ?>
<div class="col-xs-12 wht">
  <div class="l-box verticalPadding-b-sm horizontalPadding-l-xs horizontalPadding-r-xs">
                    <h3 class="h2 NotoSansJP-Thin verticalMargin-t-xs verticalMargin-b-0 verticalPadding-b-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                    <p class="small verticalMargin-t-xs verticalPadding-t-0 verticalMargin-b-0 verticalPadding-b-0"><?php echo mb_substr(strip_tags($post-> post_content),0,100).'...'; ?></p>
                    <div class="excerpt verticalMargin-t-xs keyColor40pale">
                        <span class="small">
                            <i class="fa fa-clock-o horizontalPadding-r-xs horizontalPadding-l-xs text-subColor" aria-hidden="true"></i><time datetime="<?php echo get_the_date( 'Y-m-j' ) ?>"><?php the_time( get_option( 'date_format' ) ); ?>
                            </time><i class="fa fa-commenting-o horizontalPadding-r-xs horizontalPadding-l-sm text-subColor" aria-hidden="true"></i><?php comments_number( 'なし', 'あり', '%件' ); ?>
                        <br>

                            <i class="fa fa-folder-o horizontalPadding-r-xs horizontalPadding-l-xs text-subColor" aria-hidden="true"></i><?php the_category( ',' ); ?>
                        </span>
                    </div>

  </div><!-- /.l-box -->
</div><!-- /.xs-12 -->
        <?php endforeach; ?>

      </section>
      <ul class="navbarNavUnit-local"><li><i class="fa fa-list-ul horizontalMargin-r-xs" aria-hidden="true"></i>
          <a href="">このコテゴリの一覧</a></li>
      </ul>
  </div><!-- /.col-lg-3 -->



  <div class="col-lg-3 col-sm-4 verticalPadding-b-sm wow fadeInUp" data-wow-duration="2.5s" data-wow-delay="1.0s">
      <section class="wht">
        <div class="verticalPadding-t-xs verticalPadding-b-xs verticalMargin-b-0 keyColor">
            <h2 class="horizontalMargin-l-xs horizontalMargin-r-xs textSize-xs NotoSansJP-Thin textColor-wht">その他</h2>
        </div>
        <?php $posts = get_posts('numberposts=10&offset=0&category=1'); foreach ($posts as $post): ?>
<div class="col-xs-12 wht">
  <div class="l-box verticalPadding-b-sm horizontalPadding-l-xs horizontalPadding-r-xs">
                    <h3 class="h2 NotoSansJP-Thin verticalMargin-t-xs verticalMargin-b-0 verticalPadding-b-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                    <p class="small verticalMargin-t-xs verticalPadding-t-0 verticalMargin-b-0 verticalPadding-b-0"><?php echo mb_substr(strip_tags($post-> post_content),0,100).'...'; ?></p>
                    <div class="excerpt verticalMargin-t-xs keyColor40pale">
                        <span class="small">
                            <i class="fa fa-clock-o horizontalPadding-r-xs horizontalPadding-l-xs text-subColor" aria-hidden="true"></i><time datetime="<?php echo get_the_date( 'Y-m-j' ) ?>"><?php the_time( get_option( 'date_format' ) ); ?>
                            </time><i class="fa fa-commenting-o horizontalPadding-r-xs horizontalPadding-l-sm text-subColor" aria-hidden="true"></i><?php comments_number( 'なし', 'あり', '%件' ); ?>
                        <br>

                            <i class="fa fa-folder-o horizontalPadding-r-xs horizontalPadding-l-xs text-subColor" aria-hidden="true"></i><?php the_category( ',' ); ?>
                        </span>
                    </div>

  </div><!-- /.l-box -->
</div><!-- /.xs-12 -->
        <?php endforeach; ?>

      </section>
      <ul class="navbarNavUnit-local"><li><i class="fa fa-list-ul horizontalMargin-r-xs" aria-hidden="true"></i>
          <a href="">このコテゴリの一覧</a></li>
      </ul>
  </div><!-- /.col-lg-3 -->



      </div><!-- /.row -->
  </div><!-- /.container-liquid -->


</article>

<?php
get_footer();
