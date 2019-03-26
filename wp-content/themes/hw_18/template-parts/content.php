<?php
/**
 * Template name: Template About Page
 *
 */

?>

<?php get_header();
      ?>

<section class="about-section">
        <div class="wrapper">
            <div class="about-title">
            <h2 class="about-title">
               about us
            </h2>
            <p class="about-subtitle">
                home / about
            </p>
        </div>
</section>

<section class="about-box">
        <div class="wrapper">
            <div class="about_us">
                <h3>
                    about us
                </h3>
                <p class="about-box-subtitle">
                    We are awesome
                </p>
                <p class="about-box-text">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                    sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                    magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                    quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                    ut aliquip ex ea commodo consequat. Duis autem vel eum iriure
                    dolor in hendrerit in vulputate velit esse molestie consequat,
                    vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan
                    et iusto odio dignissim qui blandit praesent luptatum zzril delenit
                    augue duis dolore te feugait nulla facilisi.
                </p>
            </div>
            <div class="we_do">
                <h3>
                    What We Do
                </h3>
                <p class="about-box-subtitle">
                    Creative & Digital
                </p>
                <p class="about-box-text">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                    sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                    magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                    quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                    ut aliquip ex ea commodo consequat. Duis autem vel eum iriure
                    dolor in hendrerit in vulputate velit esse molestie consequat,
                    vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan
                    et iusto odio dignissim qui blandit praesent luptatum zzril delenit
                    augue duis dolore te feugait nulla facilisi.
                </p>
            </div>
        </div>
</section>

<section class="benefit">
    <div class="wrapper">
        <div class="benefit-title">
            <h3>
                some benefits
            </h3>
            <p class="about-box-text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.
            </p>
        </div>
        <div class="benefit_item">
            <div class="benefit__elem">
                <div class="benefit__elem_heading">
                    <i class="fas fa-mobile-alt"></i>
                    <h4 class="benefit__elem__title">FULLY RESPONSIVE</h4>
                </div>
                <p class="about-box-text">
                    Cum sociis natoque penatibus et magnis dis parturient montes,
                    nascetur ridiculus mus. In eleifend suscipit enim, eu commodo
                    neque molestie vitae.
                </p>
            </div>
            <div class="benefit__elem">
                <div class="benefit__elem_heading">
                    <i class="fas fa-infinity"></i>
                    <h4 class="benefit__elem__title">UNLIMITED OPTIONS</h4>
                </div>
                <p class="about-box-text">
                    Cum sociis natoque penatibus et magnis dis parturient montes,
                    nascetur ridiculus mus. In eleifend suscipit enim, eu commodo
                    neque molestie vitae.
                </p>
            </div>
            <div class="benefit__elem">
                <div class="benefit__elem_heading">
                    <i class="fab fa-wordpress"></i>
                    <h4 class="benefit__elem__title">WORDPRESS</h4>
                </div>
                <p class="about-box-text">
                    Cum sociis natoque penatibus et magnis dis parturient montes,
                    nascetur ridiculus mus. In eleifend suscipit enim, eu commodo
                    neque molestie vitae.
                </p>
            </div>
            <div class="benefit__elem">
                <div class="benefit__elem_heading">
                    <i class="fas fa-shopping-cart"></i>
                    <h4 class="benefit__elem__title">E-COMMERCE</h4>
                </div>
                <p class="about-box-text">
                    Cum sociis natoque penatibus et magnis dis parturient montes,
                    nascetur ridiculus mus. In eleifend suscipit enim, eu commodo
                    neque molestie vitae.
                </p>
            </div>
            <div class="benefit__elem">
                <div class="benefit__elem_heading">
                    <i class="fas fa-align-justify"></i>
                    <h4 class="benefit__elem__title">CUSTOMIZABLE DESIGN</h4>
                </div>
                <p class="about-box-text">
                    Cum sociis natoque penatibus et magnis dis parturient montes,
                    nascetur ridiculus mus. In eleifend suscipit enim, eu commodo
                    neque molestie vitae.
                </p>
            </div>
            <div class="benefit__elem">
                <div class="benefit__elem_heading">
                    <i class="fas fa-tools"></i>
                    <h4 class="benefit__elem__title">SUPPORT</h4>
                </div>
                <p class="about-box-text">
                    Cum sociis natoque penatibus et magnis dis parturient montes,
                    nascetur ridiculus mus. In eleifend suscipit enim, eu commodo
                    neque molestie vitae.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="team">
        <div class="wrapper">

        <?php $args = array('post_type' => 'team', 'team_per_page' => 1);
                       $loop = new WP_Query($args);
                       while ($loop->have_posts()) : $loop->the_post();

                           echo '<div class="team-title"><h3>';
                           the_title();
                           echo '</h3>';
                           echo '<p class="team-subtitle">';
                           the_content();
                           echo '</p></div>';

                       endwhile;
                       ?>

        </div>
</section>

<div class="unknown">
    <div class="wrapper">

        <?php $args = array('post_type' => 'unknown', 'team_per_page' => 1);
        $loop = new WP_Query($args);
        while ($loop->have_posts()) : $loop->the_post();

            echo '<p class="unknown-text">';
            the_content();
            echo '</p>';

        endwhile;
        ?>

    </div>
</div>

<div class="last-section">
    <div class="wrapper">
        <div class="carusel">

        </div>
        <div class="logos">
<!--            <div class="logo">-->
                <?php $args = array('post_type' => 'logos', 'team_per_page' => 1);
                $loop = new WP_Query($args);
                while ($loop->have_posts()) : $loop->the_post();

                    echo '<div class="logo">';
                    the_post_thumbnail();
                    echo '</div>';

                endwhile;
                ?>

<!--            </div>-->
        </div>
    </div>
</div>
<?php get_footer();?>