<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Fcseminars.' . $_EXTKEY,
	'Fcseminars',
	array(
		'Fcseminars' => 'list, show',
		
	),
	// non-cacheable actions
	array(
		'Fcseminars' => '',
		
	)
);
