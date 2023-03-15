<?php

# Copyright (C) 2010 John Reese
# Licensed under the MIT license

access_ensure_global_level( ADMINISTRATOR );

layout_page_header( plugin_lang_get( 'title' ) );

layout_page_begin( 'manage_overview_page.php' );
print_manage_menu( 'manage_plugin_page.php' );

$t_admin_threshald = plugin_config_get( 'admin_threshold' );
$t_track_admins = plugin_config_get( 'track_admins' );

?>
<br/>

<form action="<?php echo plugin_page( 'config_update' ) ?>" method="post">
<table class="width50" align="center" cellspacing="1">

<tr>
<td class="form-title" colspan="2"><?php echo plugin_lang_get( 'title' ) ?></td>
</tr>

<tr <?php echo helper_alternate_class() ?>>
<td class="category"><?php echo plugin_lang_get( 'owa_loc' ) ?></td>
<td><input name="owa_loc" value="<?php echo string_attribute( plugin_config_get( 'owa_loc' ) ) ?>"/></td>
</tr>

<tr <?php echo helper_alternate_class() ?>>
<td class="category"><?php echo plugin_lang_get( 'site_id' ) ?></td>
<td><input name="site_id" value="<?php echo string_attribute( plugin_config_get( 'site_id' ) ) ?>"/></td>
</tr>

<tr>
<td class="spacer"></td>
</tr>

<tr>
<td class="center" colspan="2"><input type="submit"/></td>
</tr>

</table>
</form>

<?php

layout_page_end();

