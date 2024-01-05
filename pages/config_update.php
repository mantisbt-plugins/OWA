<?php

# Copyright (C) 2010 John Reese
# Licensed under the MIT license

access_ensure_global_level( ADMINISTRATOR );

$f_owa_loc = gpc_get_string( 'owa_loc', '' );
$f_site_id = gpc_get_string( 'site_id', '' );

$owa_file = $f_owa_loc.'owa_php.php'; 
if (!file_exists($owa_file))  {
	trigger_error( ERROR_CONFIG_OWA, ERROR );
}

plugin_config_set( 'owa_loc', $f_owa_loc );
plugin_config_set( 'site_id', $f_site_id );

print_header_redirect('manage_plugin_page.php');
