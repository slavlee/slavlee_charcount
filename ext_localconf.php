<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Slavlee.SlavleeCharcount',
            'Pi1',
            [
                'CharacterCounter' => 'show'
            ],
            // non-cacheable actions
            [
                'CharacterCounter' => 'show'
            ]
        );

        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        pi1 {
                            iconIdentifier = slavlee_charcount-plugin-pi1
                            title = LLL:EXT:slavlee_charcount/Resources/Private/Language/locallang_db.xlf:tx_slavlee_charcount_pi1.name
                            description = LLL:EXT:slavlee_charcount/Resources/Private/Language/locallang_db.xlf:tx_slavlee_charcount_pi1.description
                            tt_content_defValues {
                                CType = list
                                list_type = slavleecharcount_pi1
                            }
                        }
                    }
                    show = *
                }
           }'
        );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'slavlee_charcount-plugin-pi1',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:slavlee_charcount/Resources/Public/Icons/user_plugin_pi1.svg']
			);
		
    }
);
