<?php get_header(); // Looks for a file called header.php 
?>

<div class="container">
    <div id="post">
        <div class="row justify-content-md-center">

            <?php
            while (have_posts()) {
                the_post();
            ?>
            <div class="col-md-8">
                <div class="content">                   

                    <img src="<?= get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
                    <h1 class="mt-4"><?php the_title(); ?></h1>
                    Posted by <?php the_author(); ?>
                    <p>
                        <?php the_content(); ?>
                    </p>

                </div>
            </div>

            <?php
            }
            ?>

        </div>

    </div>
</div>


<?php get_footer(); // Looks for a life called footer.php ?>