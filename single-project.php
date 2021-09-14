<?php
    /* Template Name: Project Page */ 
    /* Template Post Type: post, page, product */ 
?>

<?php get_header(); ?>

    <div class="projects-page-header">

        <img src="<?php echo get_bloginfo('template_url') ?>/assets/chip-4.svg" class="chip-img">

        <h1><?php the_title(); ?></h1>

        <!-- <?php the_post_thumbnail(); ?> -->

    </div>
    </header>

    <main class="projects-content">

        <?php the_content(); ?>

    </main>

    </div> <!-- .container close -->
</body>
</html>