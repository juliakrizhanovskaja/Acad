<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hw_18
 */

get_header();
?>

	<section class="about-section">
            <div class="wrapper">
                <div class="about-title">
                <h2 class="about-title">
                   blog posts
                </h2>
                <p class="about-subtitle">
                    home / blog
                </p>
            </div>
    </section>

    <div class="blog-box">
        <div class="wrapper">
            <?php
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                $args = array(
                'posts_per_page' => 3,
                'paged' => $paged,
                'post_type' => 'blog'
                 );
                 $custom_query = new WP_Query( $args );
            ?>

            <div class="container">
                <ul class="blog-list">

                    <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>

                    <li class="blog_item">

                        <?php the_post_thumbnail("large", array('class' => "blog-img")); ?>

                        <div class="blog_atribute">

                            <span class="blog_date">

                            <?php echo the_date(); ?>

                            </span>
                            <i class="far fa-comment"></i>
                            <span>
                              24
                            </span>
                            </div>
                        <div class="blog_item_elem">
                            <h3 class="blog-heading">

                                <?php the_title(); ?>

                            </h3>

                               <?php the_content(); ?>

                            <a href="<?php the_permalink(); ?>" class="post-link">

                                continue reading-->

                            </a>


                            <?php endwhile; ?>

                        </div>
                    </li>
                </ul>
            </div>

            <?php get_sidebar(); ?>

        </div>
    </div>

<?php
get_sidebar();
get_footer();
