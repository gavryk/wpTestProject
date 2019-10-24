<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp-test-theme
 */

?>
<!doctype html>
<html lang="en">
<head>
    <title>KnowledgeLake</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <?php wp_head(); ?>
</head>
<body>

<header>
    <div class="row">
        <div class="logo">
            <a href="<?php echo home_url(); ?>">
                <?php if ( get_field( 'logo_image', 'options' ) ): ?>
                    <img src="<?php the_field('logo_image', 'options'); ?>" alt="logo">
                <?php endif; ?>
            </a>
        </div>
        <div class="main_menu">

                <?php wp_nav_menu( [
                    'theme_location'  => 'main_menu',
                ]);?>
<!--            <ul>-->
<!--                <li>-->
<!--                    <a href="#">Platform</a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="#">Solution</a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="#">Services</a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="#">Company</a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="#">Resources</a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="#">Contact</a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="tel: ">-->
<!--                        <img src="img/phone_icon.png" alt="phone">-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="#"><i class="fas fa-search search_btn"></i></a>-->
<!--                </li>-->
<!--            </ul>-->
            <label class="search_panel">
                <input type="text" placeholder="Search...">
            </label>
        </div>


        <div class="burger">
            <span></span>
        </div>
    </div>
</header>

