<?php
defined('TYPO3') or die();

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

call_user_func(function()
{
   $extensionKey = 'slavlee_charcount';

   ExtensionUtility::registerPlugin(
      'SlavleeCharcount',
      'Pi1',
      'Character Counter'
  );   
});