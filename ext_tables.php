<?php
defined('TYPO3_MODE') or die('Access denied.');

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
$GLOBALS['TCA']['tx_seminars_seminars']['ctrl']['default_sortby'] = 'ORDER BY crdate DESC';
$GLOBALS['TCA']['tx_seminars_seminars']['columns']['title']['config']['type'] = 'text';
$GLOBALS['TCA']['tx_seminars_seminars']['columns']['accreditation_number']['config']['type'] = 'text';
$GLOBALS['TCA']['tx_seminars_seminars']['columns']['credit_points']['config']['size'] = 20;
$GLOBALS['TCA']['tx_seminars_seminars']['columns']['target_groups']['label'] = 'Rubriken:';
$GLOBALS['TCA']['tx_seminars_seminars']['types']['0']['showitem'] = '--div--;LLL:EXT:fcseminars/Resources/Private/Language/locallang_db.xlf:tx_seminars_seminars.tab.data1, begin_date, end_date,
title;;;richtext[paste|bold|italic|formatblock|class|left|center|right|orderedlist|unorderedlist|outdent|indent|link|image]:rte_transform[mode=ts_css],
description;;;richtext[paste|bold|italic|formatblock|class|left|center|right|orderedlist|unorderedlist|outdent|indent|link|image]:rte_transform[mode=ts_css],
teaser;;;richtext[paste|bold|italic|formatblock|class|left|center|right|orderedlist|unorderedlist|outdent|indent|link|image]:rte_transform[mode=ts_css],
uses_terms_2,notes,more,steckbrief;;;richtext[paste|bold|italic|formatblock|class|left|center|right|orderedlist|unorderedlist|outdent|indent|link|image]:rte_transform[mode=ts_css],'.
	'--div--;LLL:EXT:fcseminars/Resources/Private/Language/locallang_db.xlf:tx_seminars_seminars.tab.data2,  place, target_groups, organizers,categories, subtitle;;;;3-3-3,accreditation_number;;;richtext[paste|bold|italic|formatblock|class|left|center|right|orderedlist|unorderedlist|outdent|indent|link|image]:rte_transform[mode=ts_css],'.
	'--div--;LLL:EXT:fcseminars/Resources/Private/Language/locallang_db.xlf:tx_seminars_seminars.tab.images, image, attached_files,'.
	'--div--;LLL:EXT:seminars/locallang_db.xml:tx_seminars_seminars.divLabelAccess, hidden;;1;;1-1-1, owner_feuser, vips';
