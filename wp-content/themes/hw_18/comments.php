
<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 */
?>

<?php
$comments = get_comments(array(
    'post_id' => get_the_ID()
));
?>

<?php foreach ($comments as $comment): ?>

    <div class="comments1">
        <div class="comment-title">
            <h6>
                <?php echo $comment->comment_author ?>
            </h6>
            <p class="comment-date">
                <?php echo $comment->comment_date; ?>
            </p>
            <p class="subtitle reply">
                <i class="fas fa-reply"></i>
                Reply
            </p>
        </div>
    </div>
    <div class="text-comment">
        <i class="fas fa-user"></i>
        <p>
            <?php echo $comment->comment_content; ?>
        </p>
    </div>
<?php endforeach; ?>