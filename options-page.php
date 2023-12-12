<?php
/**
 * Plugin Name: Options Page
 * Plugin URI: https://github.com/sanchezanxo/
 * Description: Show hidden WordPress configuration options and add access from the Settings administration option
 * Version: 1.0.0
 * Author: Anxo Sánchez
 * Author URI: https://anxosanchez.com
 * Text Domain: options_page
 * License: GPL3
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
*/

// Agrega el elemento de menú
function op_create_options_page() {
    add_submenu_page(
        'options-general.php',   
        'Options',             // Título menú
        'WordPress Options',   // Título páxina
        'manage_options',       
        'options.php'          // Slug 
    );
}
add_action('admin_menu', 'op_create_options_page');


