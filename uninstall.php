<?php
if ( !defined( 'ABSPATH') && !defined('WP_UNINSTALL_PLUGIN') )
exit();

 delete_option('rbTPOcKey');
 delete_option('rbTPOCSecret');
 delete_option('rbTPOATSecret');
 delete_option('rbTPOAToken');
