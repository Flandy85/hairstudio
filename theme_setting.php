<?php
add_action('admin_menu', 'setup_theme_admin_menus');
function setup_theme_admin_menus() {
	$menu_name = _x('Settings', 'icon_hairstudio');
	// _x Wp decides on its own if it should be written from context
	$page_title = _x('Theme settings', 'icon_hairstudio');
	add_menu_page($page_title, $menu_name, 'manage_options', 'icon_hairstudio', 'icon_hairstudio_page');
}
?>