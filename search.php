<?php
/* Template Name: search.php */
/* Update: 160324 14:00 */
get_header(); ?>
<!-- search template -->
<article class="archiveArticle">
<div class="l-cover verticalPadding-t-md verticalPadding-b-md">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="text-center" >検索結果</h1>
            </div>
        </div><!-- /.row -->
    </div>
</div><!-- /.l-cover -->


    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">


<?php $allsearch =& new WP_Query("s=$s&posts_per_page=-1");
$key = wp_specialchars($s, 1);
$count = $allsearch->post_count;
if (isset($_GET['s']) && empty($_GET['s'])) {
echo '<h2 class="h2 NotoSansJP-Thin text-center verticalMargin-t-sm verticalMargin-b-sm">検索条件が入力されていません。<a href="#searchBox">下の検索窓</a>から調べたいキーワードを入力してください。</h2>';
}
if($count!=0){
// 検索結果を表示:該当記事あり
    echo '<p>“<strong>'.$key.'</strong>”で検索した結果、<strong>'.$count.'</strong>件の記事が見つかりました。</p>';
}

else {
// 検索結果を表示:該当記事なし
    echo '<p class="text-center verticalMargin-t-md verticalMargin-b-md">“<strong>'.$key.'</strong>”で検索した結果、関連する記事は見つかりませんでした。</p>';
}
?>



<!-- 投稿情報 loop -->
<?php if(have_posts()) : ?>
    <?php while(have_posts()):the_post() ?>
        <h2 class="h2 NotoSansJP-Thin"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p><?php echo mb_substr(strip_tags($post-> post_content),0,100).'...'; ?></p>
    <?php endwhile; ?>
<?php endif; ?>





                </div><!--- /.col-sm-12 -->
            </div><!--- /.row -->
        </div><!--- /.container -->
    </section>
</article>


<?php
get_footer();