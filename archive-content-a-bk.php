<?php
/* Template Name: archive-content-a.php
* l-cover = verticalMargin-t-xs verticalMargin-b-xs   date160809
*/
get_header(); ?>
<!-- ◆ archive-content-a template ◆ -->
<div class="l-cover">
  <div class="container">
      <div class="row">
                    <h1 class="text-center NotoSansJP-Thin verticalMargin-t-xs verticalMargin-b-xs"><?php echo esc_html(get_post_type_object(get_post_type())->label ); ?></h1>
            </div>
        </div><!-- /.row -->
    </div>
</div><!-- /.l-cover -->
<article class="gryColorTone">
            <div class="container">
                <div class="row verticalPadding-t-sm">

                    <?php if(have_posts()): while(have_posts()):
                    the_post(); ?>
                    <div class="col-sm-6 col-md-4 verticalPadding-b-sm wow fadeInUp" data-wow-duration="2.5s" data-wow-delay="0s">
                        <div class="col-xs-12">
                            <section>




                    <div class="">
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

                    <?php if( is_single() ): ?>

                    <?php else: ?>
                       <h2 class="h2 NotoSansJP-Thin"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                       <div class="postinfo">
                           <span class="postcat">
                               <i class="fa fa-folder-open"></i><?php the_taxonomies( $args ); ?>
                           </span>
                       </div>
                    <?php endif; ?>

                    <?php if( is_single() ): ?>

                    <?php echo mb_substr(strip_tags($post-> post_content),0,200).'...'; ?>

                    <?php else: ?>




                       <div class="excerpt">
                           <?php the_excerpt(); ?>
                          <p class="more"><a href="<?php the_permalink(); ?>">続きを読む <i class="fa fa-chevron-right"></i></a></p><div class="clearfix"></div>
                       </div>

                    <?php endif; ?>

                    </section>
                 </div><!-- col-12 -->
             </div><!-- col-sm-6 -->

                    <?php endwhile; endif; ?>


        </div><!-- /.row -->
    </div>
</article>
<?php
get_footer();
