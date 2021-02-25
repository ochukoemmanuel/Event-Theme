<?php
 /*  Main Header Template */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>
    <meta charset="<?php bloginfo('charset');?>" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <a href="#" id="menu-icon">Menu</a>
        <a href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_url') ?>/images/glass-eye-logo.png" alt="" class="logo"></a>        
            <nav class="clearfix main-navigation-container mobile-menu">

           <?php
                wp_nav_menu( $arg = array (
                    'menu_class' => 'main-navigation',
                    'theme_location' => 'primary'
                ));
            ?>
        </nav>
    </header>