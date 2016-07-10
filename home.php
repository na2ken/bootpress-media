<?php
/* Template Name: home.php */
/* update 160707 */
get_header(); ?>
<!-- home template update 160707 -->

<div class="l-cover verticalPadding-t-md verticalPadding-b-md">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">

                <h1 class="text-center wow fadeInDown" data-wow-duration="2.5s" data-wow-delay="0s" >ARTICLES</h1>

            </div>
        </div><!-- /.row -->
    </div>
</div><!-- /.l-cover -->


<article class="gryColorTone">
            <div class="container">
                <div class="row verticalPadding-t-sm">

<?php $posts = get_posts('numberposts=7&offset=0&category=0'); foreach ($posts as $post): ?>
                     <div class="col-sm-6 col-md-4 verticalPadding-b-sm">
                        <section>
                         <div class="m-iCatch">
                              <?php
                              // アイキャッチ画像
                              if ( has_post_thumbnail() ) :
                              the_post_thumbnail( 'medium img-responsive');
                              else : ?>
                              <img src="<?php echo get_template_directory_uri(); ?>/img/img-noimage.png" class="img-responsive" alt="" />
                              <?php endif; ?>
                         </div><!--/.m-iCatch-->
<div class="horizontalMargin-l-xs horizontalMargin-r-xs">
<h2 class="h2 NotoSansJP-Thin verticalMargin-t-xs verticalMargin-b-0">
 <a href="<?php the_permalink(); ?>">
 <?php the_title(); ?>
 </a></h2>
    <div class="verticalMargin-t-0 verticalPadding-b-xs">
        <span class="small">
            <?php the_time('Y年m月d日') ?>
        </span>

        <span class="small">[ <?php the_category(', ') ?> ]</span>
    </div>
</div><!-- /.horizontalMargin -->
                        </section>
                     </div><!-- /.col-sm-6 -->
<?php endforeach; ?>


                </div><!-- /.row -->
            </div><!-- /.container -->


    </article>


<?php
get_footer();
