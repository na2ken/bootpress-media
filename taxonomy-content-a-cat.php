<?php
/* Template Name: taxonomy-content-a-cat.php */
/* Template ID: taxonomy-panel-1col-sidebar template */
/* v1.0 */
get_header(); ?>
<!-- taxonomy-content-a-cat template -->
<div class="l-cover">
</div><!-- /.l-cover -->


<article class="gryColor">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 wht wow fadeInUp verticalMargin-t-sm verticalMargin-b-sm" data-wow-duration="2.5s" data-wow-delay="1.0s">
                    <?php if(have_posts()): while(have_posts()):
                    the_post(); ?>

                    <section class="wht">
                    <!-- article <?php post_class(); ?> -->



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
                       <div class="wht verticalPadding-t-xs">
                    <?php if( is_single() ): ?>

                    <?php else: ?>

                       <h2 class="h2 verticalMargin-t-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php endif; ?>


                    <div class="excerpt gryColor">
                        <span class="small">
                            <i class="fa fa-clock-o horizontalPadding-r-xs horizontalPadding-l-xs text-subColor" aria-hidden="true"></i><time datetime="<?php echo get_the_date( 'Y-m-j' ) ?>"><?php the_time( get_option( 'date_format' ) ); ?>
                            </time><i class="fa fa-commenting-o horizontalPadding-r-xs horizontalPadding-l-sm text-subColor" aria-hidden="true"></i><?php comments_number( 'なし', 'あり', '%件' ); ?>
                        </span>
                    </div>



                    <?php if( is_single() ): ?>

                    <?php echo mb_substr(strip_tags($post-> post_content),0,200).'...'; ?>

                    <?php else: ?>




                       <div class="excerpt">





                       <?php the_excerpt(); ?>
                       <p class="more"><a href="<?php the_permalink(); ?>">続きを読む <i class="fa fa-chevron-right"></i></a></p><div class="clearfix"></div>
                       </div>

                    <?php endif; ?>


                    <?php if( is_single() ): ?>
                    <div class="pagenav">
                       <span class="old">
                       <?php previous_post_link(
                       '%link',
                       '<i class="fa fa-chevron-circle-left"></i> %title'
                       ); ?>
                       </span>

                       <span class="new">
                       <?php next_post_link(
                       '%link',
                       '%title <i class="fa fa-chevron-circle-right"></i>'
                       ); ?>
                       </span>
                    </div>
                    <?php endif; ?>


                    <?php comments_template(); ?>
                    <!-- /article -->
                        </div>
                    </section>

                    <?php endwhile; endif; ?>


                    <?php if( $wp_query->max_num_pages > 1 ): ?>
                    <div class="pagenav">
                       <span class="old">
                       <?php next_posts_link( '<i class="fa fa-chevron-circle-left"></i> 古い記事' ); ?>
                       </span>

                       <span class="new">
                       <?php previous_posts_link( '新しい記事 <i class="fa fa-chevron-circle-right"></i>' ); ?>
                       </span>
                    </div>
                    <?php endif; ?>

             </div><!-- col-8 -->


             <div class="col-sm-4 verticalMargin-t-sm verticalMargin-b-sm">
             <div class="col-xs-12 gryColor verticalPadding-t-0 verticalPadding-b-sm">
               <h3 class="h2 verticalMargin-t-0 headeigDec-Underline">アクセスランキング</h3>
<ul class="navListUnit">
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
             </div><!-- col-12 -->
             </div><!-- col-4 -->

        </div><!-- /.row -->
    </div>
</article>

<?php
get_footer();
