<?php

get_header();
?>

	<main id="primary" role="main" class="site-main">

		<div class="regular-content section--the-content" id="the-content">
            <div class="regular-content__wrap">
                <div class="regular-content__main">
                    <div class="container">
                        <div class="row">
                            <div class="col col-12 col--the-content p-0">
                                <div class="col__wrap">
                                    <?php
                                        while ( have_posts() ) :
                                            the_post();

                                            get_template_part( 'template-parts/content', 'page' );

                                            // If comments are open or we have at least one comment, load up the comment template.
                                            if ( comments_open() || get_comments_number() ) :
                                                comments_template();
                                            endif;

                                        endwhile; // End of the loop.
                                        ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

	</main><!-- #main -->

<?php
get_footer();
