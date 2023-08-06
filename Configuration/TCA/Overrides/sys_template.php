<?php


use Cpsit\BravoContentElements\Configuration\Extension;

defined('TYPO3') or die('Access denied.');
call_user_func(function () {
    Extension::registerExtensionStaticTypoScriptFiles();
});
