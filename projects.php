<div class="projects">
    <h2>Projects</h2>

    <!-- CARD GRID -->
    <div class="projects-card-grid">

    <?php
        // The Query
        $the_query = new WP_Query( 'posts_per_page=10' );

        while ( $the_query->have_posts() ) {
                $the_query->the_post();
        ?>

            <div class="projects-card">

                <?php if(has_post_thumbnail()): ?>

                    <!-- IMG -->
                    <div class="projects-card-img">
                        <?php the_post_thumbnail(); ?>
                    </div>

                <?php endif; ?>

            <!-- CARD BODY -->
            <div class="projects-card-body">

                <!-- CARD HEADING -->
                <h4><?php the_title(); ?></h4>

                <!-- WHAT -->
                <div class="projects-card-what">
                    <h5>What: </h5>
                    <p><?php the_excerpt(__('(more…)')); ?></p>
                </div>
                <!-- END OF WHAT -->

                <!-- HOW -->
                <!-- <div class="projects-card-how">
                    <h5>How: </h5>
                    <div class="about-card-tags">
                        <span>MATLAB</span>
                    </div>
                </div> -->
                <!-- END OF HOW -->

                <!-- VIEW MORE -->
                <div class="projects-card-view-more">
                    <button onclick="location.href='<?php the_permalink() ?>'" type="button">See More</button>

                    <?php  ?>
                    <div class="projects-card-social-links">
                        <a href="" target="_blank"><img class="projects-cards-social" src="<?php echo get_bloginfo('template_url') ?>/assets/github.svg"></a>
                    </div>
                </div>
                <!-- END OF VIEW MORE -->

            </div>
            <!-- END OF CARD BODY -->

        </div>
        <!-- CARD END -->

        <?php
            };
            wp_reset_postdata();
        ?>

    </div>
    <!-- CARD GRID END -->

</div>