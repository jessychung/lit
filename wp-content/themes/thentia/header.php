<?php
/* Origami theme
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <title>Thentia</title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel='shortcut icon' href='<?php echo content_url (); ?>/uploads/2017/07/thentia_fav.ico'>

    <!--Typekit-->
    <script src="https://use.typekit.net/lfv1qcr.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

    <!--Scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <script src="https://use.fontawesome.com/ca8e0550f7.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r83/three.js"></script>
    <script src="<?php echo content_url (); ?>/themes/thentia/js/Projector.js"></script>
    <script src="<?php echo content_url (); ?>/themes/thentia/js/CanvasRenderer.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    <script type="text/javascript" src="<?php echo content_url (); ?>/themes/thentia/js/thentia.js"></script>

    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
</head>

<body>

<div class="loading">
    <div class='uil-rolling-css' style='transform:scale(0.36);'><div><div></div><div></div></div></div>
</div>

<div class="side-menu">

    <div class="full-screen-hide">
        <div class="bars animated-bars">
            <div></div>
            <div></div>
            <div></div>
        </div>

        <h1>menu</h1>

        <div class="thentia-menu preload">
            <?php
            $defaults = array(
                'menu'            => 'side-menu',
                'container'       => '',
                'menu_class'      => 'menu',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'depth'           => 0
            );

            wp_nav_menu( $defaults );

            ?>
        </div>
    </div>
</div>

<div class="main-menu">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-sm-4">
                <a href="#">
                    <img src="<?php echo content_url (); ?>/uploads/2017/07/thentia_logo_c.svg" class="thentia-logo-w" width="150px">
                </a>
            </div>
            <div class="col-md-9 col-sm-8" style="text-align: right">
                <ul>
                    <a href="">
                        <li>Contact</li>
                    </a>
                </ul>
            </div>
        </div>
    </div>
</div>
