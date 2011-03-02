<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

$TCA['tx_grbs3_domain_model_bucket'] = array(
	'ctrl' => $TCA['tx_grbs3_domain_model_bucket']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'aws_access_key,aws_secret_key'
	),
	'types' => array(
		'1' => array('showitem' => 'aws_access_key,aws_secret_key')
	),
	'palettes' => array(
		'1' => array('showitem' => '')
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.php:LGL.allLanguages',-1),
					array('LLL:EXT:lang/locallang_general.php:LGL.default_value',0)
				)
			)
		),
		'l18n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_grbs3_domain_model_bucket',
				'foreign_table_where' => 'AND tx_grbs3_domain_model_bucket.uid=###REC_FIELD_l18n_parent### AND tx_grbs3_domain_model_bucket.sys_language_uid IN (-1,0)',
			)
		),
		'l18n_diffsource' => array(
			'config'=>array(
				'type'=>'passthrough')
		),
		't3ver_label' => array(
			'displayCond' => 'FIELD:t3ver_label:REQ:true',
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.versionLabel',
			'config' => array(
				'type'=>'none',
				'cols' => 27
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array(
				'type' => 'check'
			)
		),
		'aws_access_key' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:grb_s3/Resources/Private/Language/locallang_db.xml:tx_grbs3_domain_model_bucket.aws_access_key',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'aws_secret_key' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:grb_s3/Resources/Private/Language/locallang_db.xml:tx_grbs3_domain_model_bucket.aws_secret_key',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
	),
);
?>