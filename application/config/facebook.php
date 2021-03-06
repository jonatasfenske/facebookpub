<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
|  Facebook App details
| -------------------------------------------------------------------
|
| To get an facebook app details you have to be a registered developer
| at http://developer.facebook.com and create an app for your project.
|
|  facebook_login_type           string   Set login type. (web, js, canvas)
|  facebook_login_redirect_url   string   URL tor redirect back to after login. Do not include domain.
|  facebook_logout_redirect_url  string   URL tor redirect back to after login. Do not include domain.
|  facebook_permissions          array    The permissions you need.
|  facebook_graph_version        string   Set Facebook Graph version to be used. Eg v2.6
|  facebook_auth_on_load         boolean  Set to TRUE to have the library to check for valid access token on every page load.
*/

$config['facebook_login_type']          = 'web';
$config['facebook_login_redirect_url']  = 'conta';
$config['facebook_logout_redirect_url'] = 'sair';
$config['facebook_permissions']         = array('publish_actions', 'manage_pages', 'publish_pages', 'pages_show_list', 'public_profile', 'email', 'user_managed_groups');
$config['facebook_graph_version']       = 'v2.8';
$config['facebook_auth_on_load']        = TRUE;
