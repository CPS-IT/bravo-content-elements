<?php
defined('TYPO3') or die();

(function ($extKey = 'bravo_content_elements') {

    //Custom config for RTE - fckeditor
    $rtePresets = ['FrDefault', 'FrMinimal'];

    foreach ($rtePresets as $rtePreset) {
        $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets'][$rtePreset] =
            'EXT:' . $extKey . '/Configuration/Tsconfig/Base/Rte/' . $rtePreset . '.yaml';
    }


})();