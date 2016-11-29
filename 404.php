<?php
/* Template Name: 404 */
get_header(); ?>
<article class="archiveArticle">
<div class="l-cover verticalPadding-t-md verticalPadding-b-md">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 wow fadeInUp" data-wow-duration="2.5s" data-wow-delay="1.0s">
                <h1 class="text-center NotoSansJP-Thin">お探しのページは見つかりませんでした。</h1>
            </div>
        </div><!-- /.row -->
    </div>
</div><!-- /.l-cover -->

    <section>
        <div class="container">
            <div class="row">
            <div class="col-sm-12">
            <p class="text-center">
<?php esc_html_e( '申し訳ありませんが、もともと存在しないか、あるいはこちらで移動・削除したかもしれません。お手数ですが、検索されるかトップページで必要な情報をお探ください。'); ?>
            </p>

<div class="col-xs-4 col-xs-offset-4 hidden-xs">
<div id="searchBox" class="col-xs-12">
<div id="searchBox" class="row no-gutter">
    <div class="col-xs-9">
<form method="get" id="searchBox" action="<?php echo home_url('/'); ?>" class="">
            <input placeholder="キーワードを入力" class="form-control" type="text" name="s" id="searchInput" value="<?php the_search_query(); ?>" >
    </div>
    <div class="col-xs-3"><input type="submit" value="検索" accesskey="f" class="btn btn-success"/>
</form>
    </div>
</div>
</div>

</div>
<div class="col-xs-12 visible-xs">
<div id="searchBox" class="col-xs-12">
<div id="searchBox" class="row no-gutter">
    <div class="col-xs-9">
<form method="get" id="searchBox" action="<?php echo home_url('/'); ?>" class="">
            <input placeholder="キーワードを入力" class="form-control" type="text" name="s" id="searchInput" value="<?php the_search_query(); ?>" >
    </div>
    <div class="col-xs-3"><input type="submit" value="検索" accesskey="f" class="btn btn-success"/>
</form>
    </div>
</div>
</div>

</div>




                        <div class="text-center verticalPadding-t-md verticalPadding-b-md">
<a href="<?php bloginfo('url'); ?>" class="btn btn-success textColor-wht">トップページへ戻る</a></div>

                        
            </div><!-- /.col-sm-12 -->


    
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.section -->

</article>




<?php
get_footer();
