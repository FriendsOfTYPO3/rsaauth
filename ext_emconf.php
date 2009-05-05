<?php

########################################################################
# Extension Manager/Repository config file for ext: "rsaauth"
#
# Auto generated 05-05-2009 13:51
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'RSA authentication for TYPO3',
	'description' => 'Contains a service to authenticate TYPO3 BE and FE users using private/public key encryption of passwords',
	'category' => 'services',
	'author' => 'Dmitry Dulepov',
	'author_email' => 'dmitry@typo3.org',
	'shy' => '',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => '',
	'version' => '1.0.0',
	'constraints' => array(
		'depends' => array(
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:31:{s:9:"ChangeLog";s:4:"698c";s:21:"ext_conf_template.txt";s:4:"f6cd";s:12:"ext_icon.gif";s:4:"fa34";s:17:"ext_localconf.php";s:4:"b2f4";s:14:"ext_tables.php";s:4:"cc8e";s:14:"ext_tables.sql";s:4:"0cf1";s:14:"doc/manual.sxw";s:4:"bc75";s:42:"hooks/class.tx_rsaauth_backendwarnings.php";s:4:"bd1c";s:38:"hooks/class.tx_rsaauth_feloginhook.php";s:4:"b71d";s:40:"hooks/class.tx_rsaauth_loginformhook.php";s:4:"4f8b";s:19:"hooks/locallang.xml";s:4:"c455";s:20:"resources/rsaauth.js";s:4:"8e22";s:24:"resources/rsaauth_min.js";s:4:"0ba4";s:22:"resources/jsbn/LICENSE";s:4:"3205";s:24:"resources/jsbn/base64.js";s:4:"b2c3";s:22:"resources/jsbn/jsbn.js";s:4:"2a43";s:23:"resources/jsbn/jsbn2.js";s:4:"779b";s:23:"resources/jsbn/prng4.js";s:4:"e591";s:21:"resources/jsbn/rng.js";s:4:"670a";s:21:"resources/jsbn/rsa.js";s:4:"3d30";s:22:"resources/jsbn/rsa2.js";s:4:"c61a";s:28:"sv1/class.tx_rsaauth_sv1.php";s:4:"6120";s:50:"sv1/backends/class.tx_rsaauth_abstract_backend.php";s:4:"8964";s:48:"sv1/backends/class.tx_rsaauth_backendfactory.php";s:4:"9fd0";s:49:"sv1/backends/class.tx_rsaauth_cmdline_backend.php";s:4:"dce3";s:41:"sv1/backends/class.tx_rsaauth_keypair.php";s:4:"fb06";s:45:"sv1/backends/class.tx_rsaauth_php_backend.php";s:4:"f889";s:49:"sv1/storage/class.tx_rsaauth_abstract_storage.php";s:4:"4fa8";s:48:"sv1/storage/class.tx_rsaauth_session_storage.php";s:4:"bfa3";s:46:"sv1/storage/class.tx_rsaauth_split_storage.php";s:4:"f9d5";s:47:"sv1/storage/class.tx_rsaauth_storagefactory.php";s:4:"a114";}',
	'suggests' => array(
	),
);

?>