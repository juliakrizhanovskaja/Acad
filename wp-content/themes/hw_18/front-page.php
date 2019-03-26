<?php get_header(); ?>

    <section class="welcome overlay">
        <div class="wrapper">
            <div class="welcome-content">
                <p class="welcome-subtitle">
                    we’re
                </p>
                <h2 class="welcome-title">
                    creative agency
                </h2>
                <p class="welcome-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                    ut labore et dolore magna aliqua.
                </p>
            </div>

            <div class="history">

                <?php $args = array('post_type' => 'history', 'history_per_page' => 1);
               $loop = new WP_Query($args);
               while ($loop->have_posts()) : $loop->the_post();
                   echo '<figure>';
                   the_post_thumbnail('', array('class' => 'history-img'));
                   echo '</figure>';
                   echo '<div class="history-content"><h3>';
                   the_title();
                   echo '</h3>';
                   echo '<div class="history-text">';
                   the_content();
                   echo '</div><a href="';
                   the_permalink();
                   echo '" class="btn"/>Read more</a></div>';

               endwhile;
               ?>
            </div>
        </div>
    </section>
    <section class="choose">
        <div class="wrapper">

            <?php $args = array('post_type' => 'choose', 'choose_per_page' => 1);
                                       $loop = new WP_Query($args);
                                       while ($loop->have_posts()) : $loop->the_post();
                                       echo '<div class="choose-title"><h3>';
                                       the_title();
                                       echo '</h3>';
                                       echo '<p class="choose-subtitle">';
                                       the_content();
                                       echo '</p></div>';
                                           echo '<div class="choose-item"><figure>';
                                           the_post_thumbnail('', array('class' => 'history-img'));
                                           echo '</figure>';

                                       endwhile;
                                      ?>

            <div class="choose__item">
                    <div class="choose__elem">
                        <i class="fas fa-infinity"></i>
                        <h4 class="choose__elem__title">UNLIMITED OPTIONS</h4>
                        <ul class="choose__elem__list">
                            <li>Branding</li>
                            <li>Design & Copywriting</li>
                            <li>Concept development</li>
                            <li>User Experience</li>
                        </ul>
                    </div>
                    <div class="choose__elem">
                        <i class="fas fa-random"></i>
                        <h4 class="choose__elem__title">DESIGN & DEVELOPMENT</h4>
                        <ul class="choose__elem__list">
                            <li>Information architecture</li>
                            <li>Interface design</li>
                            <li>Product Design</li>
                            <li>Integrated ad Companies</li>
                        </ul>
                    </div>
                    <div class="choose__elem">
                        <i class="fas fa-shopping-cart"></i>
                        <h4 class="choose__elem__title">E-COMMERCE</h4>
                        <ul class="choose__elem__list">
                            <li>Prototyping</li>
                            <li>Technical Consulting</li>
                            <li>Web applications</li>
                            <li>Quality testing</li>
                        </ul>
                    </div>
                    <div class="choose__elem">
                        <i class="fas fa-align-justify"></i>
                        <h4 class="choose__elem__title"> CUSTOMIZABLE DESIGN</h4>
                        <ul class="choose__elem__list">
                            <li>Information architecture</li>
                            <li>Interface design</li>
                            <li>Product Design</li>
                            <li>Integrated ad Companies</li>
                        </ul>
                    </div>
            </div>
        </div>
    </section>

<section class="portfolio">
    <div class="wrapper">
        <div class="portfolio-title">
                <?php $args = array('post_type' => 'portfolio', 'portfolio_per_page' => 1);
                $loop = new WP_Query($args);
                while ($loop->have_posts()) : $loop->the_post();

                    echo '<h3>';
                    the_title();
                    echo '</h3>';
                    echo '<p class="portfolio-subtitle">';
                    the_content();
                    echo '</p>';

                endwhile;
                ?>
        </div>
        <div class="portfolio-box">
            <div class="porfolio-category">
                <h4>
                    choose category
                </h4>
                <ul class="portfolio-category-item">
                    <li>All</li>
                    <li>webdesign</li>
                    <li>graphic design</li>
                    <li>fashion</li>
                    <li>logo design</li>
                    <li>advertising</li>
                </ul>
            </div>
            <div id="ms-container" class="js-masonry"
                 data-masonry-options='{ "columnWidth": 260, "itemSelector": ".ms-item" }'>


                <div class="ms-item ">
                    <?php $args = array('post_type' => 'photo', 'photo_per_page' => 9);
                    $loop = new WP_Query($args);
                    while ($loop->have_posts()) : $loop->the_post();
                        echo '<figure>';
                        the_post_thumbnail('', array('class' => 'ms-item'));
                        echo '</figure>';

                    endwhile;
                    ?>
                </div>
            </div>
        </div>


    </div>
</section>

<script type="text/javascript">

    jQuery(window).load(function() {
        var container = document.querySelector('#ms-container');
        var msnry = new Masonry( container, {
            itemSelector: '.ms-item',
            columnWidth: '.ms-item',
        });

    });
</script>
<?php get_footer(); ?>
