<?php
declare(strict_types=1);

/*
 * This file is part of the bravo content elements project.
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
    protected const ADD_RTE_PRESETS = [
        'CeDefault' => 'EXT:bravo_content_elements/Configuration/RTE/Default.yaml',
        'CeMinimal' => 'EXT:bravo_content_elements/Configuration/RTE/Minimal.yaml',
    ];

    protected const REGISTER_PAGE_TSCONFIG_FILES = [
        'Configuration/TsConfig/Default/Page.tsconfig' => 'Page TsConfig Default',
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

    /**
     * @return array
     */
    public static function getTextMediaContentFreeCropVariants(): array
    {
        return [
            'mobile' => [
                'title' => 'Mobile',
                'selectedRatio' => '16:9',
                'allowedAspectRatios' => [
                    '16:9' => [
                        'title' => '16:9',
                        'value' => 16 / 9
                    ],
                    'NaN' => [
                        'title' => 'Frei',
                        'value' => 0.0
                    ],
                    '1:1' => [
                        'title' => '1:1',
                        'value' => 1 / 1
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
                    ],
                    'NaN' => [
                        'title' => 'Frei',
                        'value' => 0.0
                    ],
                    '1:1' => [
                        'title' => '1:1',
                        'value' => 1 / 1
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
                    'NaN' => [
                        'title' => 'Frei',
                        'value' => 0.0
                    ],
                    '1:1' => [
                        'title' => '1:1',
                        'value' => 1 / 1
                    ]
                ]
            ],
        ];
    }

    /**
     * @return array
     */
    public static function getTextMediaContentCropVariants(): array
    {
        return self::get16x9CropVariants();
    }

    public static function getHerosliderCropVariants(): array
    {
        return [
            'mobile' => [
                'title' => 'Mobile',
                'selectedRatio' => '2:1',
                'allowedAspectRatios' => [
                    '2:1' => [
                        'title' => '2:1',
                        'value' => 2 / 1
                    ],
                ]
            ],
            'tablet' => [
                'title' => 'Tablet',
                'selectedRatio' => '2:1',
                'allowedAspectRatios' => [
                    '2:1' => [
                        'title' => '2:1',
                        'value' => 2 / 1
                    ],
                ]
            ],
            'desktop' => [
                'title' => 'Desktop',
                'selectedRatio' => '2:1',
                'allowedAspectRatios' => [
                    '2:1' => [
                        'title' => '2:1',
                        'value' => 2 / 1
                    ],
                ]
            ],
            'desktopl' => [
                'title' => 'Desktop large',
                'selectedRatio' => '2:1',
                'allowedAspectRatios' => [
                    '2:1' => [
                        'title' => '2:1',
                        'value' => 2 / 1
                    ],
                ]
            ],
            'desktopxl' => [
                'title' => 'Desktop extralarge',
                'selectedRatio' => '2:1',
                'allowedAspectRatios' => [
                    '2:1' => [
                        'title' => '2:1',
                        'value' => 2 / 1
                    ],
                ]
            ],
        ];
    }

    /**
     * @return array[]
     */
    public static function getTeaserCropVariants(): array
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
        ];
    }

}
