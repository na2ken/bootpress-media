<?php
/* Template Name: archive.php */
get_header(); ?>
<!-- ◆ archive template ◆ -->
<article class="archiveArticle">
<div class="l-cover verticalPadding-t-xs verticalPadding-b-sm">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">

                <h1 class="text-center">カテゴリー名</h1>

            </div>
        </div><!-- /.row -->
    </div>
</div><!-- /.l-cover -->



            <div class="container">
                <div class="row verticalPadding-t-sm">

                    <?php if(have_posts()): while(have_posts()):
                    the_post(); ?>
                    <div class="col-sm-6 col-md-4 verticalPadding-b-sm wow fadeInUp" data-wow-duration="2.5s" data-wow-delay="0s">
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
                    </section>
             </div><!-- col-12 -->

                    <?php endwhile; endif; ?>


                    <?php if( $wp_query->max_num_pages > 1 ): ?>
                    <div class="col-xs-12 pagenav">
                    <div class="col-xs-6 text-left">
                       <span class="new">
                       <?php next_posts_link( '<i class="fa fa-chevron-circle-left horizontalMargin-r-xs"></i>新しい記事' ); ?>
                       </span>
                    </div>
                    <div class="col-xs-6 text-right">
                       <span class="old">
                       <?php previous_posts_link( '古い記事<i class="fa fa-chevron-circle-right horizontalMargin-l-xs"></i>' ); ?>
                       </span>
                    </div>

                    </div>
                    <?php endif; ?>






        </div><!-- /.row -->
    </div>

</article>

<?php
get_footer();
