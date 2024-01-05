<?php

(function ($table = 'tt_content') {
    $ll = 'LLL:EXT:' . \Cpsit\BravoContentElements\Configuration\SettingsInterface::KEY . '/Resources/Private/Language/locallang_db.xlf:';

    /*
    * tt_content image gallery element
    */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
        'tt_content',
        'CType',
        [
            $ll .'tt_content.CType.image_gallery',
            'image_gallery',
            'content-gallery'
        ],
        'textmedia',
        'after'
    );

    $GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['image_gallery'] = 'content-gallery';


    $GLOBALS['TCA']['tt_content']['types']['image_gallery'] = [
        'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            --palette--;;header,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.images,
            image,
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
    ',
    ];

    $GLOBALS['TCA']['tt_content']['types']['image_gallery']['columnsOverrides'] = [
        'image' => [
            'description' => $ll .'tt_content.CType.image_gallery.image_description',
            'config' => [
                'minitems' => 2,
                'overrideChildTca' => [
                    'columns' => [
                        'crop' => [
                            'config' => [
                                'cropVariants' => \Cpsit\BravoContentElements\Configuration\Extension::getImageGalleryCropVariants()
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ];
})();
