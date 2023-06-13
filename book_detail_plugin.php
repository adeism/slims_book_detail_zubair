<?php
/**
 * Plugin Name: Book Detail Zubair
 * Plugin URI: - 
 * Description: -
 * Version: 0.1
 * Author: Ade Ismail Siregar
 * Author URI: https://github.com/adeism
 */

// get instance of plugin object
$plugin = \SLiMS\Plugins::getInstance();


// registering our plugin into bibliography module
$plugins->registerMenu('opac', 'detail book', __DIR__ . '/detail.inc.php');
