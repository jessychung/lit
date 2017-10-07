<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
    return;
}

function custom_comments( $comment, $args, $depth ) {
$GLOBALS['comment'] = $comment;
switch( $comment->comment_type ) :
case 'pingback' :
case 'trackback' : ?>
<li <?php comment_class(); ?> id="comment<?php comment_ID(); ?>">
    <div class="back-link">< ?php comment_author_link(); ?></div>
    <?php break;
    default : ?>
<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
    <article <?php comment_class(); ?> class="comment">

        <div class="comment-body">
            <div class="author vcard">
                <?php $name = get_comment_meta( $comment->comment_ID, 'displayname', true );?>
                <span class="author-name"><?php echo $name; ?></span>
                <time <?php comment_time( 'c' ); ?> class="comment-time">
				<span class="date">
				<?php comment_date(); ?>
				</span>
                    <span class="time">
				<?php comment_time(); ?>
				</span>
                </time>
                <div class="commenttext"><?php comment_text(); ?></div>
            </div>
        </div>

        <footer class="comment-footer">
            <div class="reply"><?php
                comment_reply_link( array_merge( $args, array(
                    'reply_text' => 'Reply',
                    'after' => '',
                    'depth' => $depth,
                    'max_depth' => $args['max_depth']
                ) ) ); ?>
            </div><!-- .reply -->
        </footer><!-- .comment-footer -->

    </article><!-- #comment-<?php comment_ID(); ?> -->
    <?php // End the default styling of comment
    break;
    endswitch;
    }


    ?>

    <?php $comment_args = array( 'title_reply'=>'Feedback Form',

        'fields' => apply_filters( 'comment_form_default_fields', array(

            'author' => '<p class="comment-form-author">' . '<label for="author">' . __( 'Name' ) . '</label> ' . ( $req ? '<span>*</span>' : '' ) .

                '<input id="author" name="author" class="form-control" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" /></p>',

            'email'  => '<p class="comment-form-email">' .

                '<label for="email">' . __( 'Email' ) . '</label> ' .

                ( $req ? '<span>*</span>' : '' ) .

                '<input id="email" name="email" class="form-control" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"/>'.'</p>',

            'url'    => '' ) ),

        'comment_field' => '<p>' .

            '<label for="comment">' . __( 'Comment' ) . '</label>' .

            '<textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" class="form-control"></textarea>' .

            '</p>',

        'comment_notes_after' => ' ',

    );

    comment_form($comment_args); ?>



    <div id="comments" class="comments-area">
        <!--	--><?php //comment_form(array('title_reply'=>'Got Something To Say:')); ?>

        <!--	--><?php
        //	comment_form( array(
        //		'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
        //		'title_reply' => 'Public Consultation',
        //		'title_reply_after'  => '</h2>',
        //	) );
        //	?>

        <?php if ( have_comments() ) : ?>
            <h2 class="comments-title">
                <?php
                $comments_number = get_comments_number();
                if ( 1 === $comments_number ) {
                    /* translators: %s: post title */
                    printf( _x( 'One thought on &ldquo;%s&rdquo;', 'comments title', 'twentysixteen' ), get_the_title() );
                } else {
                    printf(
                    /* translators: 1: number of comments, 2: post title */
                        _nx(
                            'All Feedback',
                            'All Feedback',
                            $comments_number,
                            'comments title',
                            'twentysixteen'
                        ),
                        number_format_i18n( $comments_number ),
                        get_the_title()
                    );
                }
                ?>
            </h2>


            <ol class="comment-list">
                <?php
                wp_list_comments( array(
                    'style'       => 'ol',
                    'short_ping'  => true,
                    'avatar_size' => 42,
                    'callback' => 'custom_comments'
                ) );
                ?>
            </ol><!-- .comment-list -->

            <div class="pagination">
                <?php paginate_comments_links(); ?>
            </div>

        <?php endif; // Check for have_comments(). ?>

        <?php
        // If comments are closed and there are comments, let's leave a little note, shall we?
        if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
            ?>
            <p class="no-comments"><?php _e( 'Comments are closed.', 'twentysixteen' ); ?></p>
        <?php endif; ?>

    </div><!-- .comments-area -->