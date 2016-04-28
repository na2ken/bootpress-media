<?php
/* Template Name: home.php */
get_header(); ?>
<!-- home template -->
<article class="archiveArticle">
<div class="l-cover verticalPadding-t-md verticalPadding-b-md">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">

                <h1 class="text-center wow fadeInDown" data-wow-duration="2.5s" data-wow-delay="0s" >ARTICLES</h1>

            </div>
        </div><!-- /.row -->
    </div>
</div><!-- /.l-cover -->



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
<h2 class="h2 NotoSansJP-Thin">
 <a href="<?php the_permalink(); ?>">
 <?php the_title(); ?>
 </a></h2>

<span class="small">
<?php the_time('Y年m月d日') ?>
</span>

<span class="small">[ <?php the_category(', ') ?> ]</span>
                        </section>
                     </div><!-- /.col-sm-6 -->
<?php endforeach; ?>


                </div><!-- /.row -->
            </div><!-- /.container -->


    </article>


<?php
get_footer();
