<?php
/*
* Plugin Name: WordPress Newsletter Plugin
* Plugin URI: http://truestory.sofiemosegaard.dk/
* Description: This is a WordPress Newsletter Plugin based on HTML5, CSS, JS and PHP
* Version: 1.6
* Author: Signe Juel, Sofie Holm & Signe Krøner
* Author: http://truestory.sofiemosegaard.dk/
* License: GPL2
*/

function newsletter_form()
{

    $content = '';
    $content .= '<div class="login-form">';
    $content .= '<div class="popupCloseButton">X</div>';
    $content .= '<div class="login-face">';
    $content .= '<img src=" '.plugins_url("newsletterplugin/img/bog-billede.png").' " ';
    $content .= 'alt="login-face"></div>';
    $content .= '<div id="promotion-header">';
    $content .= '<h1 id="promotion-header-title"> Få 10% ved tilmelding af nyhedsbrev</h1></div>';
    $content .= '<section class="form">';
    $content .= '<form action="#">';
    $content .= '<div id="promotion-body">';
    $content .= '<p id="promotion-body-text">Tilmeld dig vores nyhedsbrev og få 10%, samt en masse gode og ekslusive tilbud.</p>';
    $content .= '</div>';
    $content .= '<div class="input">';
    $content .= '<input type="text" id="username" placeholder="Skriv dit fulde navn...." name="username" required><i class="fa fa-user fa-1x"></i>';
    $content .= '</div>';
    $content .= '<div class="input">';
    $content .= '<input type="email" id="email" placeholder="Skriv din mail her..." name="email" required><i class="fa fa-envelope fa-1x"></i>';
    $content .= '</div>';
    $content .= '<div id="submitForm">';
    $content .= '<input type="submit" id="submitBtn" name="submitBtn" value="Subscribe Newsletter!">';
    $content .= '</div>';
    $content .= '<div id="promotion-footer">';
    $content .= '<p id="promotion-footer-text">Ja, jeg vil gerne modtage nyhedsbreve fra Truestory. Husk du kan altid afmelde dig vores nyhedsbreve!</p>';
    $content .= '</div>';
    $content .= '</form>';
    $content .= '</section>';
    $content .= '</div>';
    
    return $content;
    
}
    #First parameter is a self choosen name for a unique short-code. Second parameter is the name of the function that creates the newsletter
    add_shortcode('show_newsletter','newsletter_form');

    # Take action - activate it
    add_action('wp_enqueue_scripts','register_styles_and_scripts_for_plugin');

    function register_styles_and_scripts_for_plugin() 
    {
        wp_enqueue_style('fontAwesomCDN', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
        
        wp_enqueue_style('CustomFontMontserrat','https://fonts.googleapis.com/css?family=Montserrat:300,400,800&display=swap');
        
        wp_enqueue_style('CustomFontRoboto','https://fonts.googleapis.com/css?family=Roboto:400,500&display=swap');
        
        wp_enqueue_style('CustomStylesheet', plugins_url('newsletterplugin/css/style.css'));
        
        wp_deregister_script('jquery');
        
        wp_enqueue_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
        
        wp_enqueue_script('CustomScript', plugins_url('newsletterplugin/js/script.js'), array('jquery'), null, true);
    }






