<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Pi1',
	array(
		'Bucket' => 'index, show, new, create, edit, update, delete',
	),
	array(
		'Bucket' => 'create, update, delete',
	)
);

?>