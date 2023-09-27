<?php

(function ($table = 'tt_content') {
    $ll = 'LLL:EXT:' . \Cpsit\BravoContentElements\Configuration\SettingsInterface::KEY . '/Resources/Private/Language/locallang_db.xlf:';
    /*
     * tt_content hero slider item element
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
        $table,
        'CType',
        [
            $ll .'tt_content.CType.heroslider_item',
            'heroslider_item',
            'content-image'
        ],
        'textmedia',
        'after'
    );

    $GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['heroslider_item'] = 'content-image';

    $GLOBALS['TCA']['tt_content']['types']['heroslider_item'] = [
        'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,header,
                bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,
                    --palette--;;teaser_link,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.images,
                    image;LLL:EXT:bravo_content_elements/Resources/Private/Base/Language/locallang_db.xlf:tt_content.CType.heroslider_item.image,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            '
    ];
    $GLOBALS['TCA']['tt_content']['types']['heroslider_item']['columnsOverrides'] = [
        'image' => [
            'config' => [
                'minitems' => 1,
                'maxitems' => 1,
                'overrideChildTca' => [
                    'columns' => [
                        'crop' => [
                            'config' => [
                                'cropVariants' => \Cpsit\BravoContentElements\Configuration\Extension::getHerosliderCropVariants()
                            ]
                        ]
                    ]
                ]
            ]
        ],
        'bodytext' => [
            'config' => [
                'cols' => 30,
                'rows' => 5,
                'max' => 255,
                'eval' => 'trim',
                'enableRichtext' => false,
                'richtextConfiguration' => 'default'
            ]
        ],
        'header' => [
            'config' => [
                'eval' => 'trim',
            ]
        ],
        'teaser_link' => [
            'config' => [
                'eval' => 'trim',
            ]
        ],
        'teaser_link_label' => [
            'config' => [
                'eval' => 'trim',
            ]
        ],
    ];
})();
