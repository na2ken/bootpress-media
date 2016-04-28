<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package UNDERSCORES
 */

?>
<footer class="l-footer">
    <!-- Scroll to Top Button -->
    <div class="scroll-top page-scroll">
      <a class="btn" href="#pageTop"><i class="fa fa-chevron-up"></i></a>
    </div>
       <div class="l-footerAbove">
             <div class="container">
                   <div class="row">
                       <div class="col-md-4">
                           <h3 class="textColor-gryColorTone2nd">Link</h3>
                           <div class="l-utilityNav-main">
                <?php wp_nav_menu( array( 'theme_location' => 'footer-left-column', 'items_wrap' => '<ul class="navListUnit">%3$s</ul>' ) ); ?>
                           </div>
                       </div>
                       <div class="col-md-4">
                           <h3 class="textColor-gryColorTone2nd">Category</h3>
                           <div class="l-utilityNav-main">
                <?php wp_nav_menu( array( 'theme_location' => 'footer-center-column', 'items_wrap' => '<ul class="navListUnit">%3$s</ul>' ) ); ?>
                           </div>
                       </div>
                       <div class="col-md-4">
                           <h3 class="textColor-gryColorTone2nd">Search</h3>

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
                   </div><!-- /.row -->
              </div><!-- /.container -->
        </div><!-- /.l-footerAbove -->

        <div class="l-footeBelow">
              <div class="container">
                      <div class="row">
                          <div class="col-lg-12">
                              <p class="text-center textColor-gryColorTone2nd verticalPadding-t-0 verticalPadding-b-0">
                                  <span class="small"><i class="fa fa-copyright horizontalMargin-r-xs"></i><?php bloginfo('name'); ?> Allrights Reserved.<span>
                              </p>
                          </div>
                      </div><!-- /.row -->
              </div><!-- /.container -->
        </div><!-- /.lay-footeBelow -->
</footer><!-- /.footer -->


<!-- Bootstrap js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<!-- WOW -->
<script src="http://cdn.bootpress.co/assets/js/wow.js"></script>

<script src="http://cdn.bootpress.co/assets/js/jquery.bootstrap-autohidingnavbar.js"></script>

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<script src="http://cdn.bootpress.co/assets/js/cbpAnimatedHeader.js"></script>

<script src="http://cdn.bootpress.co/assets/js/bps.js"></script>

<script>
  wow = new WOW(
    {
      animateClass: 'animated',
      offset:       100,
      callback:     function(box) {
        console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
      }
    }
  );
  wow.init();
  document.getElementById('moar').onclick = function() {
    var section = document.createElement('section');
    section.className = 'section--purple wow fadeInDown';
    this.parentNode.insertBefore(section, this);
  };
</script>
</body>
</html>
