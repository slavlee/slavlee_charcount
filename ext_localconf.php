<?php
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use Slavlee\SlavleeCharcount\Controller\CharacterCounterController;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Imaging\IconRegistry;
use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;
use TYPO3\CMS\Core\Information\Typo3Version;

defined('TYPO3') || die('Access denied.');

call_user_func(
    function()
    {
        $versionInformation = GeneralUtility::makeInstance(Typo3Version::class);
        // Only include page.tsconfig if TYPO3 version is below 12 so that it is not imported twice.
        if ($versionInformation->getMajorVersion() < 12) {
        ExtensionManagementUtility::addPageTSConfig('
            @import "EXT:slavlee_charcount/Configuration/page.tsconfig"
        ');
        }

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

        // Icons
		$iconRegistry = GeneralUtility::makeInstance(IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'slavlee_charcount-plugin-pi1',
				SvgIconProvider::class,
				['source' => 'EXT:slavlee_charcount/Resources/Public/Icons/user_plugin_pi1.svg']
			);
		
    }
);
