<?php mesmerize_get_header(); ?>

    <script>
      $(function(){
        // #?????????????????????
        $('a[href^="#"]').click(function() {
          // ????????
          var speed = 400; // ??????
          var href= $(this).attr("href");
          var target = $(href == "#" || href == "" ? 'html' : href);
          var position = target.offset().top;
          $('body,html').animate({scrollTop:position}, speed, 'swing');
          return false;
        });
      });
    </script>

    <div id='page-content' class="content post-page">
        <div class="gridContainer">
            <div class="row">
                <div class="col-xs-12 <?php mesmerize_posts_wrapper_class(); ?>">
                    <div class="post-item">
						<?php
						if ( have_posts() ):
							while ( have_posts() ):
								the_post();
								get_template_part( 'template-parts/content', 'single' );
							endwhile;
						else :
							get_template_part( 'template-parts/content', 'none' );
						endif;
						?>
                    </div>
                </div>
				<?php get_sidebar(); ?>
            </div>
        </div>

    </div>
<?php get_footer(); ?>
