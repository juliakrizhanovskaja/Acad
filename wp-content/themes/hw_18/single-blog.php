<?php
/* Template Name: Page Post*/
?>


<?php get_header(); ?>

    <section class="about-section">
        <div class="wrapper">
            <div class="about-title">
                <h2 class="about-title">
                    POST
                </h2>
                <p class="about-subtitle">
                    home / blog / post
                </p>
            </div>
        </div>
    </section>

<?php while ( have_posts() ) : the_post(); ?>
    <?php
    $comments = get_comments(array(
        'post_id' => get_the_ID()
    ));
    ?>

<section id="post">
    <div class="container">
        <article>

           <?php the_post_thumbnail() ?>

            <h3>

                <?php the_title(); ?>

            </h3>
            <div class="blog_atribute">
                <i class="far fa-calendar"></i>
                <span class="blog_date">

                <?php the_date(); ?>

                </span>
                <i class="far fa-comment"></i>
                <span>
                    201
                </span>
                <i class="fas fa-heart"></i>
                <span>
                    400
                </span>
            </div>
            <p>
                <?php the_content(); ?>
            </p>
        </article>
    <div class="share">
        <span>
            SHARE
        </span>
        <i class="fab fa-facebook-f"></i>
        <i class="fab fa-twitter"></i>
        <i class="fab fa-pinterest-p"></i>
        <i class="fas fa-retweet"></i>
    </div>

    <div class="comments">
        <h5>
            <?php echo count($comments)?> Comments
        </h5>


        <?php
        get_template_part('comments', 'page');
        ?>
    </div>
    <?php
    add_filter( 'comment_form_logged_in', '__return_empty_string' );
    $comments_args = array(
        'must_log_in'=> false,
        'label_submit'=>'Send',
        'title_reply'=>'Leave a Comment',
        'comment_notes_after' => '',
        'comment_field' => '
                    <p class="comment-form-comment">
                    
                      <ul class="list-input">
                        <li class="list-input__item">
                          <input type="text" id="name" name="author" placeholder="Name" class="form__item">
                        </li>
                        <li class="list-input__item">
                          <input type="email" id="email" name="email" placeholder="E-mail" class="form__item">
                        </li>
                        <li class="list-input__item">
                          <input type="text" id="website" name="website" placeholder="Web site" class="form__item">
                        </li>
                        <li class="list-input__item">
                          <input type="text" id="job" name="job" placeholder="Job" class="form__item">
                        </li>
                        <li class="list-input__item">
                          <textarea rows="10" id="message" name="comment" placeholder="Comment" class="list-input__message list-input__message--focused"></textarea>
                        </li>
                      </ul>
                    </p>',
    );
    comment_form($comments_args, get_the_ID())
    ?>

</section>

    <?php get_footer(); ?>

    <?php endwhile ?>