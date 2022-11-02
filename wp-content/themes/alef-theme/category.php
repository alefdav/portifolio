<?php get_header(); ?>

<div class="container">
    <div class="row">
        <main class="col-12 col-lg-9">
            <?php if ( have_posts() ) : ?>
            
            <?php
            // Start the Loop.
            while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php get_the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                        <span class="entry-date">
                            
                            <?php echo get_the_date('d.m.y'); ?>
                        </span>

                        <span>
                            <?php 
                                foreach((get_the_category()) as $category){
                                    echo '<a class="category-link" href="' . esc_url( get_category_link( $category->term_id ) ) . '">' . esc_html( $category->name ) . '</a>';
                                }
                            ?>
                        </span>
                    </header>

                    <!-- Post Thumbnail -->
                    <?php echo wp_get_attachment_image(get_field('post_thumbnail', get_the_ID()), 'medium'); ?>

                    <div class="entry-content">
                        <?php echo get_first_paragraph(get_the_content()); ?>
                    </div>

                </article>


            <?php endwhile; ?>

            <?php
            // Previous/next page navigation.
            the_posts_pagination( array(
                'prev_text'          => __( 'Anterior' ),
                'next_text'          => __( 'Próximo' ),
                'screen_reader_text'=> '&nbsp;'
                
            ) );

            // If no content, include the "No posts found" template.
            else :
                get_template_part( 'content', 'none' );

            endif;
            ?>

        </main>
        <aside class="col-12 col-lg-3" id="sidebar">
            <?php //get_template_part( 'partials/sidebar'); ?>
        </aside>
    </div>
</div>

<?php get_footer(); ?>
