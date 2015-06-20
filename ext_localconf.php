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

$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['tx_seminars_seminar'] = array(
	'className' => 'Fcseminars\\Fcseminars\\OldModel\\Seminar',
);
