<?php
defined('TYPO3') or die('Access denied.');

/*
 * Enabled image field in Text and media content element.
 * used for the preview image in videos
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tt_content',
    'image',
    'textmedia',
    'after:assets'
);

/*
 * Crop variants for text and media content element
 */
$GLOBALS['TCA']['tt_content']['types']['textmedia']['columnsOverrides']['assets'] = [
    'label' => 'LLL:EXT:bravo_content_elements/Resources/Private/Language/locallang_db.xlf:tt_content.CType.textmedia.assets',
    'config' => [
        'maxitems' => 1,
        'overrideChildTca' => [
            'columns' => [
                'crop' => [
                    'config' => [
                        'cropVariants' => \Cpsit\BravoContentElements\Configuration\Extension::getTextMediaContentFreeCropVariants()
                    ]
                ]
            ]
        ]
    ]
];
$GLOBALS['TCA']['tt_content']['types']['textmedia']['columnsOverrides']['image'] = [
    'label' => 'LLL:EXT:bravo_content_elements/Resources/Private/Language/locallang_db.xlf:tt_content.CType.textmedia.video.preview.image',
    'config' => [
        'maxitems' => 1,
        'overrideChildTca' => [
            'columns' => [
                'crop' => [
                    'config' => [
                        'cropVariants' => \Cpsit\BravoContentElements\Configuration\Extension::getTextMediaContentCropVariants()
                    ]
                ]
            ]
        ]
    ]
];
