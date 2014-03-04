<?php
if (!defined('TYPO3_MODE')) die ('Access denied.');

// Add Frontend Plugin in Backend
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'TYPO3.' . $_EXTKEY,
	'Index',
	array('Foo' => 'index'),	// Cached
	array('Foo' => '')			// Uncached
);

?>