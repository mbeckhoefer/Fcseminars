<?php
defined('TYPO3_MODE') or die('Access denied.');

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

unset($GLOBALS['TCA']['tx_seminars_seminars']['columns']['object_type']);
$GLOBALS['TCA']['tx_seminars_seminars']['columns']['title']['config']['type'] = 'text';
$GLOBALS['TCA']['tx_seminars_seminars']['columns']['accreditation_number']['config']['type'] = 'text';
$GLOBALS['TCA']['tx_seminars_seminars']['columns']['credit_points']['config']['size'] = 20;
$GLOBALS['TCA']['tx_seminars_seminars']['types']['0']['showitem'] = '--div--;LLL:EXT:fcseminars/Resources/Private/Language/locallang_db.xlf:tx_seminars_seminars.tab.data1, begin_date, end_date,
title;;;richtext[paste|bold|italic|formatblock|class|left|center|right|orderedlist|unorderedlist|outdent|indent|link|image]:rte_transform[mode=ts_css],
description;;;richtext[paste|bold|italic|formatblock|class|left|center|right|orderedlist|unorderedlist|outdent|indent|link|image]:rte_transform[mode=ts_css],
teaser;;;richtext[paste|bold|italic|formatblock|class|left|center|right|orderedlist|unorderedlist|outdent|indent|link|image]:rte_transform[mode=ts_css],
uses_terms_2,notes,more,steckbrief;;;richtext[paste|bold|italic|formatblock|class|left|center|right|orderedlist|unorderedlist|outdent|indent|link|image]:rte_transform[mode=ts_css],'.
	'--div--;LLL:EXT:fcseminars/Resources/Private/Language/locallang_db.xlf:tx_seminars_seminars.tab.data2,  additional_information,place, room,target_groups, organizers,categories,event_type, subtitle;;;;3-3-3,accreditation_number;;;richtext[paste|bold|italic|formatblock|class|left|center|right|orderedlist|unorderedlist|outdent|indent|link|image]:rte_transform[mode=ts_css],'.
	'--div--;LLL:EXT:fcseminars/Resources/Private/Language/locallang_db.xlf:tx_seminars_seminars.tab.images, image, attached_files,'.
	'--div--;LLL:EXT:seminars/locallang_db.xml:tx_seminars_seminars.divLabelAccess, hidden;;1;;1-1-1, owner_feuser, vips';
