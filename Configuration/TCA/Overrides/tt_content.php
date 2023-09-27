<?php

(function ($extKey = 'bravo_content_elements', $table = 'tt_content') {

    $tempColumns = [
        'teaser_link_label' => [
            'exclude' => true,
            'label' => 'LLL:EXT:bravo_content_elements/Resources/Private/Language/locallang_db.xlf:tt_content.teaser_link_label',
            'config' => [
                'type' => 'input',
                'size' => 50,
                'max' => 100,
                'eval' => 'trim',
            ]
        ],

        'teaser_link' => [
            'exclude' => true,
            'label' => 'LLL:EXT:bravo_content_elements/Resources/Private/Language/locallang_db.xlf:tt_content.teaser_link',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputLink',
                'size' => 50,
                'max' => 1024,
                'eval' => 'trim',
                'fieldControl' => [
                    'linkPopup' => [
                        'options' => [
                            'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel',
                        ],
                    ],
                ],
                'softref' => 'typolink'
            ]
        ],
    ];
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns($table, $tempColumns);

    // palette Teaser content from page
    $GLOBALS['TCA'][$table]['palettes']['teaser_link'] = [
        'label' => 'LLL:EXT:bravo_content_elements/Resources/Private/Language/locallang_db.xlf:tt_content.teaser_link_palette',
        'showitem' => '
        teaser_link,
        --linebreak--,
        teaser_link_label
    ',
    ];

    // Restrict file image file types
    $GLOBALS['TCA']['tt_content']['columns']['image']['config']['overrideChildTca']['columns']['uid_local']['config']['appearance']['elementBrowserAllowed'] = 'gif,jpg,jpeg,tif,tiff,png';
})();

