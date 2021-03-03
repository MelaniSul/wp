<?php
/**
 * Plugin name: first-plugin
 * Plugin url: http://melanisulengo.ikt.khk.ee/wordpress/
 * Desc : This is the  first plugin I have ever created
 * Version: 1.0
 * Author: Melani Sulengo
 * Author url:http://melanisulengo.ikt.khk.ee/wordpress/
**/

add_action( 'the_content', 'my_thank_you_text' );

function my_thank_you_text ( $content ) {
    return $content .= '<p>Thank you for reading!</p>';
}