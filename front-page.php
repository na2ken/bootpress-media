<?php
/* Template Name: front-page.php */
/* Last update 1611015 */
get_header(); ?>
<!-- front-page template -->
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
<p class="blck-text"><?php echo mb_substr(strip_tags($post-> post_content),0,95).'...'; ?></p>
<?php endforeach; ?>

            </div><!-- /.col-sm-12 -->

        </div><!-- /.row -->
    </div>
</div><!-- /.l-cover -->

<article class="contents">


  <div class="container-liquid gryColor">
      <div class="row ">

    <div class="container">
        <div class="row ">

<div class="col-sm-8">
  <div class="row">

<div class="col-sm-12">
    <h2 class="h4 NotoSansJP-Thin">コンテンツA</h2>
</div>


<?php
     global $post;
     $my_posts= get_posts(array(
     'post_type' => array('content-a'),
     'numberposts' => 4
     ));
     foreach($my_posts as $post):setup_postdata($post);
?>
    <section class="">
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
<div class="col-xs-12 verticalMargin-b-sm wht">
<h3 class="h2 NotoSansJP-Thin verticalMargin-t-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
<p class="small"><?php echo mb_substr(strip_tags($post-> post_content),0,100).'...'; ?></p>
<div class="excerpt verticalMargin-t-xs verticalMargin-b-xs keyColor40pale">
    <span class="small">
        <i class="fa fa-folder-o horizontalPadding-r-xs horizontalPadding-l-xs text-subColor" aria-hidden="true"></i><?php the_taxonomies( $args ); ?>
    </span>
</div>
</div><!-- /.ccol-xs-12 -->

</div><!-- /.col-sm-6 -->
    </section>
<?php endforeach; ?>

<div class="col-sm-12 verticalMargin-t-0 verticalMargin-b-sm">
    <ul class="navListUnit">
        <li><i class="fa fa-list-ul horizontalMargin-r-xs" aria-hidden="true"></i>
           <a href="#">このコンテンツの一覧を見る</a>
       </li>
    </ul>
</div>


</div><!-- /.row -->
</div><!-- /.col-sm-8 -->


<div class="col-sm-4">


<div class="col-sm-12">
<div class="row">
    <h2 class="h4 NotoSansJP-Thin">コンテンツB</h2>
</div>
</div>


<?php
     global $post;
     $my_posts= get_posts(array(
     'post_type' => array('content-b'),
     'numberposts' => 4
     ));
     foreach($my_posts as $post):setup_postdata($post);
?>



<div class="col-sm-12 verticalPadding-b-xs">
      <div class="row no-gutter">

        <div class="col-xs-3">
    <?php
    // アイキャッチ画像を配置する
            if ( has_post_thumbnail() ) :
            the_post_thumbnail( 'thumbnail', array( 'class' => 'img-responsive' ) );
            else : ?>
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img-noimage-thumbnail.png" alt="<?php the_title(); ?>" class="img-responsive">
                    <!-- アイキャッチ画像がないときに表示させる仮画像  -->
                </figure>
    <?php endif; ?>
        </div>

        <div class="col-xs-9">
          <h3 class="h4 NotoSansJP-Thin verticalMargin-t-0 horizontalPadding-l-xs"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <div class="excerpt keyColor40pale horizontalPadding-l-xs">
              <span class="small">
                  <i class="fa fa-folder-o horizontalPadding-r-xs horizontalPadding-l-xs text-subColor" aria-hidden="true"></i><?php the_taxonomies( $args ); ?>
              </span>
          </div>
        </div><!-- /.col-xs-9 -->

      </div><!-- row -->
</div><!-- col-12 -->

          <?php endforeach; ?>

<div class="col-sm-12 verticalMargin-t-0 verticalMargin-b-sm">
    <div class="row">
              <ul class="navListUnit">
                  <li><i class="fa fa-list-ul horizontalMargin-r-xs" aria-hidden="true"></i>
                     <a href="#">このコンテンツの一覧を見る</a>
                 </li>
              </ul>
    </div>
</div>


<figure class="verticalMargin-b-sm">
    <a href="#">
        <img src="<?php bloginfo('template_url'); ?>/img/bnr01.png" class="img-responsive bnr" alt="<?php bloginfo('name'); ?>">
    </a>
</figure>

<figure class="verticalMargin-b-sm">
    <a href="#">
        <img src="<?php bloginfo('template_url'); ?>/img/bnr02.png" class="img-responsive bnr" alt="<?php bloginfo('name'); ?>">
    </a>
</figure>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <?php remove_filter ('the_content', 'wpautop'); ?>
  <?php the_content(); ?>
<?php endwhile; endif; ?>


</div><!-- /.col-sm-4 -->

        </div><d!-- /.row -->
    </div>

  </div><d!-- /.row -->
</div>


</article>

<?php
get_footer(); ?>
