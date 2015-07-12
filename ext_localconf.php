<?php
defined('TYPO3_MODE') or die('Access denied.');

$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['tx_seminars_FrontEnd_DefaultController'] = array(
	'className' => 'Fcseminars\\Fcseminars\\Controller\\DefaultController',
);
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['tx_seminars_seminar'] = array(
	'className' => 'Fcseminars\\Fcseminars\\OldModel\\Seminar',
);
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['tx_seminars_Model_Event'] = array(
	'className' => 'Fcseminars\\Fcseminars\\Model\\Event',
);

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['seminars']['listView'][] = 'Fcseminars\\Fcseminars\\Hooks\\SeminarListView';
