<?php
if (!defined('TYPO3_MODE')) { die ('Access denied.'); }

$arrConf = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['{{EXTENSIONKEY}}']);
$extensionName = strtolower(str_replace('_','',$_EXTKEY));

// Add Typoscript Setup and Constants
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Extension Title');

// Add Frontend Plugins
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Index',
	'Extension Plugin Title'
);

// TCA Configuration
$TCA['tx_{{EXTENSIONKEY}}_domain_model_foo'] = array(
	'ctrl' => array(
		'title' => 'LLL:EXT:{{EXTENSIONKEY}}/Resources/Private/Language/locallang_db.xml:tx_{{EXTENSIONKEY}}_domain_model_foo',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => 'ORDER BY title',
		'sortby' => 'sorting',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Foo.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_{{EXTENSIONKEY}}_domain_model_foo.gif'
	),
);

?>