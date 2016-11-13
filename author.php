<?php
/* Template Name: author.php */
get_header(); ?>
<!-- author template -->
<div class="l-cover">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="h2 text-center NotoSansJP-Thin verticalMargin-t-sm verticalMargin-b-md">
                  <?php
                  global $wp_query;
                  $curauth = $wp_query->get_queried_object();
                  ?>
                    <h1 class="h2 text-center NotoSansJP-Thin "><?php echo $curauth->display_name; ?></h1>
            </div>
        </div><!-- /.row -->
    </div>
</div><!-- /.l-cover -->


<article class="gryColor">

<div class="container">
	<div class="row">
<style>
.parent {
    position:relative;
    overflow:hidden;
}
figure {
  position:relative;
  left:50%;
  float:left;
  margin:0;
  padding:0;
    }

img.portraite {
        position:relative;
        left:-50%;
        float:left;
        margin:0;
        padding:0;
    }
</style>

       <section class="text-center">
<div class="parent verticalPadding-t-sm verticalPadding-b-sm verticalMargin-b-sm">
<figure class="verticalPadding-t-0">
<?php echo get_avatar( 1, 120, '', '', array('class'=>'img-circle portraite', 'extra_attr'=>'') ); ?>
</figure>

<div class="col-xs-12">
<p class="verticalMargin-t-sm text-left"><?php echo $curauth->description; ?></p>
</div>
</div>
       <section>

	</div><!-- /.row -->
</div><!-- /.container -->


</article>


<?php
get_footer();









get_footer();
