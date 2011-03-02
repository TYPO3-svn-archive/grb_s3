<?php

########################################################################
# Extension Manager/Repository config file for ext "grb_s3".
#
# Auto generated 28-02-2011 08:34
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Simple Storage',
	'description' => '',
	'category' => 'plugin',
	'author' => '',
	'author_email' => '',
	'author_company' => '',
	'shy' => '',
	'dependencies' => 'cms,extbase,fluid',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '0.0.0',
	'constraints' => array(
		'depends' => array(
			'cms' => '',
			'extbase' => '',
			'fluid' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'suggests' => array(
	),
	'_md5_values_when_last_written' => 'a:21:{s:12:"ext_icon.gif";s:4:"e922";s:17:"ext_localconf.php";s:4:"7204";s:14:"ext_tables.php";s:4:"7db3";s:14:"ext_tables.sql";s:4:"e29f";s:16:"kickstarter.json";s:4:"0548";s:39:"Classes/Controller/BucketController.php";s:4:"9854";s:31:"Classes/Domain/Model/Bucket.php";s:4:"1a35";s:46:"Classes/Domain/Repository/BucketRepository.php";s:4:"2b96";s:35:"Classes/Domain/Service/FileTree.php";s:4:"ffd8";s:28:"Configuration/TCA/Bucket.php";s:4:"f8a6";s:34:"Configuration/TypoScript/setup.txt";s:4:"d894";s:40:"Resources/Private/Language/locallang.xml";s:4:"f70b";s:73:"Resources/Private/Language/locallang_csh_tx_grbs3_domain_model_bucket.xml";s:4:"851e";s:43:"Resources/Private/Language/locallang_db.xml";s:4:"d516";s:44:"Resources/Private/Language/locallang_mod.xml";s:4:"fb06";s:38:"Resources/Private/Layouts/backend.html";s:4:"b10b";s:44:"Resources/Private/Templates/Bucket/list.html";s:4:"1644";s:35:"Resources/Public/Icons/relation.gif";s:4:"e615";s:55:"Resources/Public/Icons/tx_grbs3_domain_model_bucket.gif";s:4:"905a";s:44:"Resources/Public/JavaScripts/backend-main.js";s:4:"a318";s:40:"Resources/Public/Styles/backend-main.css";s:4:"d41d";}',
);

?>