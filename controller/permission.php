<?php

	$permission_admin = array("home", "product_add", "product_add_check", "product_list", "product_modify", "product_modify_check", "product_view", "product_delete", "logout", "user_add", "user_modify", "user_modify_check", "user_delete", "user_add_check", "user_list", "expense_add", "expense_add_check", "expense_view", "expense_modify", "expense_modify_check", "expense_list", "expense_delete", "sale_add", "sale_add_check", "sale_delete", "sale_list", "sale_modify", "sale_modify_check", "config_list", "config_modify", "error_display", "order_list", "order_cancel", "order_cancel_check", "order_accept", "menu_add", "menu_add_check", "menu_list", "menu_modify", "menu_modify_check", "menu_delete");
	$permission_gestion = array("home", "product_add", "product_add_check", "product_list", "product_modify", "product_modify_check", "product_view", "product_delete", "product_low_stock", "logout", "product_limit_stock", "expense_add", "expense_add_check", "expense_modify", "expense_modify_check", "expense_view", "expense_list", "expense_delete", "sale_add","sale_add_check", "sale_delete", "sale_list", "sale_modify", "sale_modify_check", "error_display", "order_list", "order_cancel", "order_cancel_check", "order_accept", "menu_add", "menu_add_check", "menu_list", "menu_modify", "menu_modify_check", "menu_delete");
	$permission_online = array("home", "logout", "error_display", "order_add", "order_add_check", "order_list_dates", "order_list", "order_cancel", "order_cancel_check");
	$permission_others = array("home", "loguearUsuario", "agregar_usuario", "login", "chequear_agregar_usuario", "login_user_check", "user_add", "user_add_check", "error_display");
	$permission_superuser = array("home", "product_add", "product_add_check", "product_list", "product_modify", "product_modify_check", "product_view", "product_delete", "logout", "user_add", "user_modify", "user_modify_check", "user_add_check", "user_delete", "user_list", "product_low_stock", "product_limit_stock", "expense_add", "expense_add_check", "expense_modify", "expense_modify_check", "expense_view", "expense_list", "expense_delete", "sale_add","sale_add_check" , "sale_delete", "sale_list", "sale_modify", "sale_modify_check", "config_list", "config_modify", "error_display", "order_list", "order_cancel", "order_cancel_check", "order_accept", "menu_add", "menu_add_check", "menu_list", "menu_modify", "menu_modify_check", "menu_delete");
	$permission_array = array( 0 => $permission_admin, 1 => $permission_gestion, 2 => $permission_online, 3 => $permission_others, 4 => $permission_superuser);

?>
