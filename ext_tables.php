<?php
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
defined('TYPO3') || die('Access denied.');

call_user_func(
    function()
    {
        ExtensionUtility::registerPlugin(
            'SlavleeCharcount',
            'Pi1',
            'Character Counter'
        );    
    }
);
