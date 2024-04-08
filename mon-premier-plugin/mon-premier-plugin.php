<?php

/**
 * Plugin Name: mon-premier-plugin
 * Plugin URI: https://wordpress.com
 * Description: Mon premier plugin à partir d'un tuto duplication article 
 * Version: 0.1
 * Author: Fred74
 * Author URI : https://fred74.com 
 * Licence: MIT
 */

use Fchaput\MonPremierPlugin\MonPremierPlugin;

if (!defined('ABSPATH'))
    exit;

require plugin_dir_path(__FILE__) . 'vendor/autoload.php';


$plugin = new MonPremierPlugin();
