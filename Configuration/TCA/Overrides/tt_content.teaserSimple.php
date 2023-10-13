<?php

(function ($table = 'tt_content') {
    $ll = 'LLL:EXT:' . \Cpsit\BravoContentElements\Configuration\SettingsInterface::KEY . '/Resources/Private/Language/locallang_db.xlf:';
    /*
     * tt_content teaserx element
     * Content element to be used alone or within a teaser container element
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
        $table,
        'CType',
        [
            'LLL:EXT:bravo_content_elements/Resources/Private/Language/locallang_db.xlf:tt_content.CType.teaser_simple',
            'teaser_simple',
            'content-text-teaser',
            'teaser_simple',
        ],
        'textmedia',
        'after'
    );

    $GLOBALS['TCA'][$table]['ctrl']['typeicon_classes']['teaser_simple'] = 'content-text-teaser';

    $GLOBALS['TCA'][$table]['types']['teaser_simple']['showitem'] = '
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
    --palette--;;general,header,
    bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,
    --palette--;;teaser_link,
    --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.media, image,
     --palette--;;mediaAdjustments,
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
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,';


    $GLOBALS['TCA'][$table]['types']['teaser_simple']['columnsOverrides'] = [

        'image' => [
            'label' => 'LLL:EXT:bravo_content_elements/Resources/Private/Language/locallang_db.xlf:tt_content.CType.teaser.image',
            'config' => [
                'minitems' => 0,
                'maxitems' => 1,
                'overrideChildTca' => [
                    'columns' => [
                        'crop' => [
                            'config' => [
                                'cropVariants' => \Cpsit\BravoContentElements\Configuration\Extension::getTeaserCropVariants()
                            ],
                        ],
                    ],
                ],
            ],
        ],
//        'teaser_link' => [
//            'config' => [
//                'eval' => 'trim,required',
//            ],
//        ],
        'bodytext' => [
            'config' => [
                'cols' => 30,
                'rows' => 5,
                'max' => 255,
                'eval' => 'trim',

            ],
        ],
    ];

    $GLOBALS['TCA'][$table]['types']['teaser']['previewRenderer' ] = \TYPO3\CMS\Frontend\Preview\TextmediaPreviewRenderer::class;

})();
