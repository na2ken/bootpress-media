<?php
/* Template Name: front-page.php */
get_header(); ?>
<!-- front-page template -->
<article class="contents">
<div class="l-cover verticalPadding-t-sm verticalPadding-b-sm">
    <div class="container">
        <div class="row">

            <div class="col-sm-12 wow fadeInUp" data-wow-duration="2.5s" data-wow-delay="1.0s">
<?php
     global $post;
     $my_posts= get_posts(array(
     'post_type' => array('post'),
     'numberposts' => 1
     ));
     foreach($my_posts as $post):setup_postdata($post);
?>
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
<p class="text-center"><small><span class="label label-warning horizontalMargin-r-xs">NEW!</span><?php the_time('Y.m.d'); ?></small></p>
<h1 class="h1 text-center NotoSansJP-Thin"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
<?php echo mb_substr(strip_tags($post-> post_content),0,95).'...'; ?>             
<?php endforeach; ?>

            </div><!-- /.col-sm-12 -->

        </div><!-- /.row -->
    </div>
</div><!-- /.l-cover -->


<section>
    <div class="container">
        <div class="row">

<div class="col-sm-4 verticalMargin-t-sm verticalMargin-b-xs">
<h2 class="h3 NotoSansJP-Thin">WordPressテーマ関連</h2>
<?php
     global $post;
     $my_posts= get_posts(array(
     'post_type' => array('wordpress'),
     'numberposts' => 2
     ));
     foreach($my_posts as $post):setup_postdata($post);
?>
<h3 class="h2 NotoSansJP-Thin"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
<p><?php echo mb_substr(strip_tags($post-> post_content),0,100).'...'; ?></p>               
<?php endforeach; ?>
</div><!-- /.col-sm-4 -->


<div class="col-sm-4 verticalMargin-t-sm verticalMargin-b-xs">
<h2 class="h3 NotoSansJP-Thin">Bootstrapテンプレート関連</h2>
<?php
     global $post;
     $my_posts= get_posts(array(
     'post_type' => array('bootstrap'),
     'numberposts' => 2
     ));
     foreach($my_posts as $post):setup_postdata($post);
?>
<h3 class="h2 NotoSansJP-Thin"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
<p><?php echo mb_substr(strip_tags($post-> post_content),0,100).'...'; ?></p>
<?php endforeach; ?>
</div><!-- /.col-sm-4 -->

<div class="col-sm-4 verticalMargin-t-sm verticalMargin-b-xs">
<h2 class="h3 NotoSansJP-Thin">その他の情報</h2>
                    <figure>
                        <img src="http://bootpress.co/wp-content/themes/bootpress-single/img/bnr04-1280x527.png" class="img-responsive" alt="WordPress X Bootstrap Seminar2016 夏本健司 Kenji Natsumoto">
                    </figure>

<p　class="verticalPadding-t-sm">近日中に「SEO・検索エンジン」のコーナーも開設します！</p>
</div><!-- /.col-sm-4 -->

        </div><d!-- /.row -->
    </div>
</section>


</article>

<?php 
get_footer(); ?>