<?php
defined('TYPO3') or die('Access denied.');

use Cpsit\BravoContentElements\Configuration\Extension;

call_user_func(function () {
    Extension::registerPageTSConfigFiles();
});
