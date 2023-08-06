<?php
declare(strict_types=1);

/*
 * This file is part of the kiiw_sitepackage project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 */

namespace Cpsit\BravoContentElements\Configuration;

use FilesystemIterator;
use Cpsit\BravoContentElements\Configuration\SettingsInterface as SI;
use RecursiveDirectoryIterator;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;


/**
 * Extension
 *
 * provides configuration for the extension t3faq
 */
final class Extension
{
    /**
     * SVG icons to register
     */
    protected const SVG_ICONS_TO_REGISTER = [];

    protected const ADD_PAGE_TSCONFIG = [];
    protected const ADD_RTE_PRESETS = [
        'Default' => 'EXT:bravo_content_elements/Configuration/RTE/Default.yaml'
    ];

    protected const REGISTER_PAGE_TSCONFIG_FILES = [
        'Configuration/TsConfig/Base/Page.tsconfig' => 'Page TsConfig Base',
        #'Configuration/TsConfig/Base/InternalPages.tsconfig' => 'Internal pages TsConfig',
    ];

    protected const ADD_USER_TSCONFIG = [];

    public static function registerRtePresets(): void
    {
        foreach (self::ADD_RTE_PRESETS as $preset => $path) {
            $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets'][$preset] = $path;
        }
    }

    public static function registerExtensionStaticTypoScriptFiles(): void
    {
        /* Static templates: For each directory in "ext_key/Configuration/TypoScript" a static template is added */
        $path = ExtensionManagementUtility::extPath(SI::KEY) . 'Configuration/TypoScript/';
        $directoryIterator = new RecursiveDirectoryIterator($path, FilesystemIterator::SKIP_DOTS);
        foreach ($directoryIterator as $directory) {
            $directoryName = $directory->getFilename();
            ExtensionManagementUtility::addStaticFile(
                SI::KEY,
                'Configuration/TypoScript/' . $directoryName,
                $directoryName
            );
        }
    }

    /**
     * Register TsConfig files
     */
    public static function registerPageTSConfigFiles(): void
    {
        foreach (self::REGISTER_PAGE_TSCONFIG_FILES as $TsConfigFile => $label) {
            ExtensionManagementUtility::registerPageTSConfigFile(SI::KEY, $TsConfigFile, $label);
        }
    }

    /**
     * Add page TSconfig content
     */
    public static function addPageTSconfig(): void
    {
        foreach (self::ADD_PAGE_TSCONFIG as $TSconfig) {
            ExtensionManagementUtility::addPageTSConfig($TSconfig);
        }
    }

    /**
     * Add user TSconfig content
     */
    public static function addUserTSconfig(): void
    {
        foreach (self::ADD_USER_TSCONFIG as $TSconfig) {
            ExtensionManagementUtility::addUserTSConfig($TSconfig);
        }
    }

    /**
     * @return array[]
     */
    public static function get16x9CropVariants(): array
    {
        return [
            'mobile' => [
                'title' => 'Mobile',
                'selectedRatio' => '16:9',
                'allowedAspectRatios' => [
                    '16:9' => [
                        'title' => '16:9',
                        'value' => 16 / 9
                    ]
                ]
            ],
            'tablet' => [
                'title' => 'Tablet',
                'selectedRatio' => '16:9',
                'allowedAspectRatios' => [
                    '16:9' => [
                        'title' => '16:9',
                        'value' => 16 / 9
                    ]
                ]
            ],
            'desktop' => [
                'title' => 'Desktop',
                'selectedRatio' => '16:9',
                'allowedAspectRatios' => [
                    '16:9' => [
                        'title' => '16:9',
                        'value' => 16 / 9
                    ],
                ]
            ],
        ];
    }

}
