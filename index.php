<?php get_header(); ?>

        <div id="heading">
            <div class="heading-text">
                <h1><?php echo get_bloginfo('name'); ?></h1>
                <p><?php echo get_bloginfo('description'); ?></p>
            </div>
            <img src="<?php echo get_bloginfo('template_url') ?>/assets/chip-1.svg" class="chip-img">
        </div>
    </header>

    <main>

        <!-- ABOUT -->
        <?php include( 'about.php' ); ?>

        <img src="<?php echo get_bloginfo('template_url') ?>/assets/chip-2.svg" class="chip-img">

        <!-- PROJECTS -->
        <?php include( 'projects.php' ); ?>

        <img src="<?php echo get_bloginfo('template_url') ?>/assets/chip-3.svg" class="chip-img">

        <!-- CONTACT -->
        <?php include( 'contact.php' ); ?>

        <img src="<?php echo get_bloginfo('template_url') ?>/assets/chip-4.svg" class="chip-img">
        
    </main>

    </div> <!-- .container close -->
</body>
</html>