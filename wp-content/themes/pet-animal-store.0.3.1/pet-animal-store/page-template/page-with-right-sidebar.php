<?php
/**
 * Template Name:Page with Right Sidebar
 */

get_header(); ?>

<?php do_action( 'pet_animal_store_header_pageright' ); ?>

<div class="container">
    <div class="middle-align row">       
		<div class="col-lg-8 col-md-8" id="content-aa" >
			<?php while ( have_posts() ) : the_post(); ?>
                <div class="feature-box">   
                    <img src="<?php the_post_thumbnail_url('full'); ?>" width="100%">
                </div>
                <h1><?php the_title(); ?></h1>
                <?php the_content();
                wp_link_pages( array(
                    'before' => '<div class="page-links">' . __( 'Pages:', 'pet-animal-store' ),
                    'after'  => '</div>',
                ) );
                
                //If comments are open or we have at least one comment, load up the comment template
                    if ( comments_open() || '0' != get_comments_number() )
                        comments_template();
                ?>
            <?php endwhile; // end of the loop. ?>             
        </div>
        <div class="col-lg-4 col-md-4" id="sidebar">
			<?php dynamic_sidebar('sidebar-2'); ?>
		</div>
        <div class="clearfix"></div>
    </div>
</div>

<?php do_action( 'pet_animal_store_footer_pageright' ); ?>

<?php get_footer(); ?>