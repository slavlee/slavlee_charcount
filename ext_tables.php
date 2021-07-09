<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Slavlee.SlavleeCharcount',
            'Pi1',
            'Character Counter'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('slavlee_charcount', 'Configuration/TypoScript', 'CharacterCount');

    }
);
