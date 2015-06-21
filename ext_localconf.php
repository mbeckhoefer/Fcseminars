<?php
defined('TYPO3_MODE') or die('Access denied.');

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
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['tx_seminars_Model_Event'] = array(
	'className' => 'Fcseminars\\Fcseminars\\Model\\Event',
);
