<?php
/*
Plugin Name: Nazoma integration
Plugin URI: http://nazoma.com
Description: Nazoma child sites integration.
Author: Richard Denton
Version: 1.0
Author URI: http://richarddenton.com

Nazoma integration
Purely adds functionality to all nazoma.com subsites.

*/

require_once 'plugins/advanced-custom-fields/acf.php';
require_once 'plugins/simple-page-ordering/simple-page-ordering.php';
require_once 'plugins/wp-paginate/wp-paginate.php';
require_once 'lib/post-types.php';
require_once 'lib/custom-fields-pre.php';
require_once 'lib/settings.php';
require_once 'lib/hooks.php';
require_once 'lib/helpers.php';
require_once 'lib/shortcodes.php';