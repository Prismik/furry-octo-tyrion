<?php

	if ( ! defined('EXT')){
	exit('Invalid file request');
	}

        $conf['root'] = $_SERVER['DOCUMENT_ROOT'] . 'Portfolio';
	$conf['app_version'] = "167";
	$conf['license_number'] = "";
	$conf['debug'] = "1";
	$conf['install_lock'] = "1";
	$conf['db_hostname'] = "localhost";
	$conf['db_username'] = "username";
	$conf['db_password'] = "password";
	$conf['db_name'] = "sample";
	$conf['db_type'] = "mysql";
	$conf['db_prefix'] = "exp";
	$conf['db_conntype'] = "0";
	$conf['system_folder'] = "system";
	$conf['cp_url'] = "http://sample:8888/system/index.php";
	$conf['doc_url'] = "http://expressionengine.com/docs/";
	$conf['cookie_prefix'] = "";
	$conf['is_system_on'] = "y";
	$conf['allow_extensions'] = "n";
	$conf['multiple_sites_enabled'] = "n";
	?>