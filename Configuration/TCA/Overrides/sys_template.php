<?php
defined('TYPO3') or die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

call_user_func(function()
{
   $extensionKey = 'slavlee_charcount';

   ExtensionManagementUtility::addStaticFile($extensionKey, 'Configuration/TypoScript', 'CharacterCount');
});