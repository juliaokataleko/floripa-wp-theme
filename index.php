<?php get_header(); // Looks for a file called header.php 
?>

<div class="main">
    <div class="container ">
        <a href="<?= site_url('/blog'); ?>">
            <h2 class="section-heading">
                Publicações
            </h2>
        </a>

        <div class="row">
            <?php
            
            while (have_posts()) {
                the_post();

            ?>
                <div class="col-md-4 mb-2">

                    <div class="border">
                        <div class="card-image">
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?= get_the_post_thumbnail_url(get_the_ID()); ?>" alt="<?=the_title();?>">
                            </a>
                        </div>
                        <div class="card-body bg-white">
                            <a href="<?php the_permalink(); ?>">
                                <h3><?php the_title(); ?></h3>
                            </a>
                            <div class="card-meta">
                                Publicado por <?=the_author();?> 
                                em <?=the_time('F j, Y');?>
                                , <?=get_the_category_list(','); ?>
                            </div>
                            <p>
                                <?=wp_trim_words(get_the_excerpt(), 30); ?>
                            </p>
                            <a href="<?php the_permalink(); ?>" class="btn-readmore">Ler mais</a>
                        </div>
                    </div>

                </div>
            <?php
            }
            wp_reset_query();
            ?>

            <div class="col-md-12">
                <div class="pagination">
                    <?=paginate_links();?>
                </div>                
            </div>

        </div>
    </div>
</div>



<?php get_footer(); // Looks for a life called footer.php 
?>