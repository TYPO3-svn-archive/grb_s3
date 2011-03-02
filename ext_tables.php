<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Simple Storage');

If (TYPO3_MODE === 'BE') {
	Tx_Extbase_Utility_Extension::registerModule(
		$_EXTKEY, # Extension-Key
		'tools', # Kategorie
		'tx_grbs3_m1', # Modulname
		'', # Position
		Array ( 
			'Bucket' => 'list,fileUpload' 
		), # Controller
		
		Array ( 'access' => 'user,group', # Konfiguration
			'icon' => 'EXT:'.$_EXTKEY.'/ext_icon.gif',
			'labels' => 'LLL:EXT:'.$_EXTKEY.'/Resources/Private/Language/locallang_mod.xml'
		)
	);
}

?>