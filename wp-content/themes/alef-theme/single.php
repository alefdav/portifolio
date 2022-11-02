<?php get_header(); ?>

<div class="container">
    <div class="row">
        <main class="col-12">
            
            <?php
            // Start the Loop.
            while ( have_posts() ) : the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


                <header class="entry-header">
                    <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                    <span class="entry-date">
                        <?php echo get_the_date('d.m.y'); ?></span>

                    <span>
                        <?php 
                        foreach((get_the_category()) as $category){
                            echo '<a class="category-link" href="' . esc_url( get_category_link( $category->term_id ) ) . '">' . esc_html( $category->name ) . '</a>';
                            }
                        ?>
                    </span>

                </header><!-- .entry-header -->

                <?php
                // Post thumbnail.
                echo get_the_post_thumbnail();
                ?>

                <div class="entry-content">
                    <?php
                        the_content();
                    ?>
                </div><!-- .entry-content -->

            </article><!-- #post-## -->


            <?php

            // End the loop.
            endwhile;

            ?>

        </main>
    </div>
</div>

<?php
get_footer();
?>