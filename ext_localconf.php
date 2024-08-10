<?php
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use Slavlee\SlavleeCharcount\Controller\CharacterCounterController;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Imaging\IconRegistry;
use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;

defined('TYPO3') || die('Access denied.');

call_user_func(
    function()
    {
        ExtensionUtility::configurePlugin(
            'SlavleeCharcount',
            'Pi1',
            [
                CharacterCounterController::class => 'show'
            ],
            // non-cacheable actions
            [
                CharacterCounterController::class => 'show'
            ]
        );
    }
);
