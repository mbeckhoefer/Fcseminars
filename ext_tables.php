<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Fcseminars',
	'fcseminars'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'fcseminars');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_fcseminars_domain_model_fcseminars', 'EXT:fcseminars/Resources/Private/Language/locallang_csh_tx_fcseminars_domain_model_fcseminars.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_fcseminars_domain_model_fcseminars');
$GLOBALS['TCA']['tx_fcseminars_domain_model_fcseminars'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:fcseminars/Resources/Private/Language/locallang_db.xlf:tx_fcseminars_domain_model_fcseminars',
		'label' => 'steckbrief',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'sortby' => 'sorting',
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'steckbrief,mehr,zusatzfeld1,zusatzfeld2,zusatzfeld3,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Fcseminars.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_fcseminars_domain_model_fcseminars.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
	'tx_seminars_seminars',
	array(
		'more' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:fcseminars/Resources/Private/Language/locallang_db.xlf:tx_seminars_seminars.more',
			'config' => array(
				'type' => 'input',
				'size' => '20',
				'max' => '255',
				'eval' => 'trim',
			),
		),
		'steckbrief' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:fcseminars/Resources/Private/Language/locallang_db.xlf:tx_seminars_seminars.steckbrief',
			'config' => array(
				'type' => 'text',
				'size' => '20',
				'max' => '255',
				'eval' => 'trim',
			),
		),
	)
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
	'tx_seminars_seminars',
	'--div--;LLL:EXT:fcseminars/Resources/Private/Language/locallang_db.xlf:tab.fcseminars,' .
	'more,' .
	'steckbrief;;;richtext[paste|bold|italic|formatblock|class|left|center|right|orderedlist|unorderedlist|outdent|indent|link|image]:rte_transform[mode=ts_css]'
);
