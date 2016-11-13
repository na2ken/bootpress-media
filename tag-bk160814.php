<?php
/* Template Name: tag.php */
/* Template ID: archive-panel-3col template */
/* v1.0 */
get_header(); ?>
<!-- ◆ tag ◆ -->
<div class="l-cover">
</div><!-- /.l-cover -->

<article class="gryColor">

            <div class="container">
                <div class="row">

                  <?php if(have_posts()): while(have_posts()):
                  the_post(); ?>
                  <div class="col-xs-12 col-sm-6 col-md-4 verticalMargin-t-sm verticalMargin-b-sm wow fadeInUp" data-wow-duration="2.5s" data-wow-delay="0s">

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

                  <div class="l-box horizontalPadding-l-xs horizontalPadding-r-xs">
                  <?php if( is_single() ): ?>

                  <?php else: ?>
                     <h2 class="h2 NotoSansJP-Thin verticalMargin-t-xs verticalMargin-b-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                     <div class="verticalMargin-t-0">
                         <span class="small">
                             <i class="fa fa-folder"></i><?php the_taxonomies( $args ); ?>
                         </span>
                     </div>
                  <?php endif; ?>

                  <?php if( is_single() ): ?>

                  <?php echo mb_substr(strip_tags($post-> post_content),0,100).'...'; ?>

                  <?php else: ?>

                     <div class="verticalPadding-b-xs">

                     <?php the_excerpt(); ?>

                     </div>

                  <?php endif; ?>
                  </div><!-- LR Paddinf -->

                          </section>

           </div><!-- col-12 & col-sm-6 -->

                  <?php endwhile; endif; ?>






      </div><!-- /.row -->
  </div>
</article>

<?php
get_footer();
