<?php

use B13\Container\Tca\ContainerConfiguration;
use B13\Container\Tca\Registry;
use Fr\KediSitepackage\Configuration\SettingsInterface as SI;
use TYPO3\CMS\Core\Utility\GeneralUtility;

(function () {
    // container_accordion begin
    GeneralUtility::makeInstance(Registry::class)->configureContainer(
        (
        new ContainerConfiguration(
            'container_accordion', // CType
            'LLL:EXT:kedi_sitepackage/Resources/Private/Base/Language/locallang_be.xlf:ctype.container_accordion.title',
            // label
            'LLL:EXT:kedi_sitepackage/Resources/Private/Base/Language/locallang_be.xlf:ctype.container_accordion.description',
            // description
            [
                [
                    [
                        'name' => 'LLL:EXT:kedi_sitepackage/Resources/Private/Base/Language/locallang_be.xlf:container.content',
                        'colPos' => 200,
                        'allowed' => ['CType' => 'accordion_item']
                    ]
                ]
            ] // grid configuration
        )
        )
            // set an optional icon configuration
            ->setIcon('content-accordion')
    );

    $GLOBALS['TCA']['tt_content']['types']['container_accordion']['showitem'] = '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
            --palette--;;headers,
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
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended';
    // container_accordion end

    // container_quickfacts begin
    GeneralUtility::makeInstance(Registry::class)->configureContainer(
        (
        new ContainerConfiguration(
            'container_quickfacts', // CType
            'LLL:EXT:kedi_sitepackage/Resources/Private/Base/Language/locallang_be.xlf:ctype.container_quickfacts.title',
            // label
            'LLL:EXT:kedi_sitepackage/Resources/Private/Base/Language/locallang_be.xlf:ctype.container_quickfacts.description',
            // description
            [
                [
                    [
                        'name' => 'LLL:EXT:kedi_sitepackage/Resources/Private/Base/Language/locallang_be.xlf:container.content.left',
                        'colPos' => 300,
                        'allowed' => ['CType' => 'quickfact']
                    ],
                    [
                        'name' => 'LLL:EXT:kedi_sitepackage/Resources/Private/Base/Language/locallang_be.xlf:container.content.right',
                        'colPos' => 301,
                        'allowed' => ['CType' => 'quickfact']
                    ]
                ]
            ] // grid configuration
        )
        )
            // set an optional icon configuration
            ->setIcon('content-timeline')
    );

    $GLOBALS['TCA']['tt_content']['types']['container_quickfacts']['showitem'] = '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
            --palette--;;headers,
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
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended
            ';
    // container_quickfacts end

    // container_col_66_33 begin
    GeneralUtility::makeInstance(Registry::class)->configureContainer(
        (
        new ContainerConfiguration(
            'container_col_66_33', // CType
            'LLL:EXT:kedi_sitepackage/Resources/Private/Base/Language/locallang_be.xlf:ctype.container_col_66_33.title',
            // label
            'LLL:EXT:kedi_sitepackage/Resources/Private/Base/Language/locallang_be.xlf:ctype.container_col_66_33.description',
            // description
            [
                [
                    [
                        'name' => 'LLL:EXT:kedi_sitepackage/Resources/Private/Base/Language/locallang_be.xlf:container.content.left',
                        'colPos' => 300,
                        'allowed' => ['CType' => 'text, textmedia, teaser, list, html, container_accordion, denacharts_chart_area, denacharts_chart_bar, denacharts_chart_column, denacharts_chart_line, denacharts_chart_pie, denacharts_chart_doughnut']
                    ],
                    [
                        'name' => 'LLL:EXT:kedi_sitepackage/Resources/Private/Base/Language/locallang_be.xlf:container.content.right',
                        'colPos' => 301,
                        'allowed' => [
                            'CType' => 'text, textmedia, teaser, list, html, denacharts_chart_area, denacharts_chart_bar, denacharts_chart_column, denacharts_chart_line, denacharts_chart_pie, denacharts_chart_doughnut',
                            'list_type' => 'cpsdownload_listselected'
                        ]
                    ]
                ]
            ] // grid configuration
        )
        )
            // set an optional icon configuration
            ->setIcon(SI::ICON_CONTENT_CONTAINER_COLUMNS_2_LEFT)
    );
    // container_col_66_33 end

    // container_col_33_66 begin
    GeneralUtility::makeInstance(Registry::class)->configureContainer(
        (
        new ContainerConfiguration(
            'container_col_33_66', // CType
            'LLL:EXT:kedi_sitepackage/Resources/Private/Base/Language/locallang_be.xlf:ctype.container_col_33_66.title',
            // label
            'LLL:EXT:kedi_sitepackage/Resources/Private/Base/Language/locallang_be.xlf:ctype.container_col_33_66.description',
            // description
            [
                [
                    [
                        'name' => 'LLL:EXT:kedi_sitepackage/Resources/Private/Base/Language/locallang_be.xlf:container.content.left',
                        'colPos' => 300,
                        'allowed' => [
                            'CType' => 'text, textmedia, teaser, list, html, denacharts_chart_area, denacharts_chart_bar, denacharts_chart_column, denacharts_chart_line, denacharts_chart_pie, denacharts_chart_doughnut',
                            'list_type' => 'cpsdownload_listselected'
                        ]
                    ],
                    [
                        'name' => 'LLL:EXT:kedi_sitepackage/Resources/Private/Base/Language/locallang_be.xlf:container.content.right',
                        'colPos' => 301,
                        'allowed' => ['CType' => 'text, textmedia, teaser, list, html, container_accordion, denacharts_chart_area, denacharts_chart_bar, denacharts_chart_column, denacharts_chart_line, denacharts_chart_pie, denacharts_chart_doughnut']
                    ]
                ]
            ] // grid configuration
        )
        )
            // set an optional icon configuration
            ->setIcon(SI::ICON_CONTENT_CONTAINER_COLUMNS_2_RIGHT)
    );
    // container_col_33_66 end

    // container_col_50_50 begin
    GeneralUtility::makeInstance(Registry::class)->configureContainer(
        (
        new ContainerConfiguration(
            'container_col_50_50', // CType
            'LLL:EXT:kedi_sitepackage/Resources/Private/Base/Language/locallang_be.xlf:ctype.container_col_50_50.title',
            // label
            'LLL:EXT:kedi_sitepackage/Resources/Private/Base/Language/locallang_be.xlf:ctype.container_col_50_50.description',
            // description
            [
                [
                    [
                        'name' => 'LLL:EXT:kedi_sitepackage/Resources/Private/Base/Language/locallang_be.xlf:container.content.left',
                        'colPos' => 300,
                        'allowed' => ['CType' => 'text, textmedia, teaser, contact, list, html, container_accordion, denacharts_chart_area, denacharts_chart_bar, denacharts_chart_column, denacharts_chart_line, denacharts_chart_pie, denacharts_chart_doughnut']
                    ],
                    [
                        'name' => 'LLL:EXT:kedi_sitepackage/Resources/Private/Base/Language/locallang_be.xlf:container.content.right',
                        'colPos' => 301,
                        'allowed' => ['CType' => 'text, textmedia, teaser, contact, list, html, container_accordion, denacharts_chart_area, denacharts_chart_bar, denacharts_chart_column, denacharts_chart_line, denacharts_chart_pie, denacharts_chart_doughnut']
                    ]
                ]
            ] // grid configuration
        )
        )
            // set an optional icon configuration
            ->setIcon(SI::ICON_CONTENT_CONTAINER_COLUMNS_2)
    );
    // container_col_50_50 begin

    // container_accordion_stepbystep begin
    GeneralUtility::makeInstance(Registry::class)->configureContainer(
        (
        new ContainerConfiguration(
            'container_accordion_stepbystep', // CType
            'LLL:EXT:kedi_sitepackage/Resources/Private/Base/Language/locallang_be.xlf:ctype.container_accordion_stepbystep.title',
            // label
            'LLL:EXT:kedi_sitepackage/Resources/Private/Base/Language/locallang_be.xlf:ctype.container_accordion_stepbystep.description',
            // description
            [
                [
                    [
                        'name' => 'LLL:EXT:kedi_sitepackage/Resources/Private/Base/Language/locallang_be.xlf:container.content',
                        'colPos' => 200,
                        'allowed' => ['CType' => 'accordion_stepbystep_item'],
                        'maxitems' => 12
                    ]
                ]
            ] // grid configuration
        )
        )
            // set an optional icon configuration
            ->setIcon(SI::ICON_CONTENT_ACCORDION_STEP_BY_STEP)
    );
    $GLOBALS['TCA']['tt_content']['types']['container_accordion_stepbystep']['showitem'] = '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
               --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.images,
                    image,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended';

    $GLOBALS['TCA']['tt_content']['types']['container_accordion_stepbystep']['columnsOverrides'] = [
        'image' => [
            'config' => [
                'minitems' => 1,
                'maxitems' => 1,
                'overrideChildTca' => [
                    'columns' => [
                        'crop' => [
                            'config' => [
                                'cropVariants' => \Fr\KediSitepackage\Configuration\Extension::getAccordionImageCropVariants()
                            ]
                        ]
                    ]
                ]
            ]
        ],
    ];
    // container_accordion_stepbystep end

    // container_topicteaser begin
    GeneralUtility::makeInstance(Registry::class)->configureContainer(
        (
        new ContainerConfiguration(
            'container_topicteaser', // CType
            'LLL:EXT:kedi_sitepackage/Resources/Private/Base/Language/locallang_be.xlf:ctype.container_topicteaser.title',
            // label
            'LLL:EXT:kedi_sitepackage/Resources/Private/Base/Language/locallang_be.xlf:ctype.container_topicteaser.description',
            // description
            [
                [
                    [
                        'name' => 'LLL:EXT:kedi_sitepackage/Resources/Private/Base/Language/locallang_be.xlf:container.content',
                        'colPos' => 200,
                        'allowed' => ['CType' => 'teaser_topic']
                    ]
                ]
            ] // grid configuration
        )
        )
            // set an optional icon configuration
            ->setIcon('content-card-group')
    );

    $GLOBALS['TCA']['tt_content']['types']['container_topicteaser']['showitem'] = '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
            --palette--;;headers,
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
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended';
    // container_topicteaser end

    // container_benefits begin
    GeneralUtility::makeInstance(Registry::class)->configureContainer(
        (
        new ContainerConfiguration(
            'container_benefits', // CType
            'LLL:EXT:kedi_sitepackage/Resources/Private/Base/Language/locallang_be.xlf:ctype.container_benefits.title',
            // label
            'LLL:EXT:kedi_sitepackage/Resources/Private/Base/Language/locallang_be.xlf:ctype.container_benefits.description',
            // description
            [
                [
                    [
                        'name' => 'LLL:EXT:kedi_sitepackage/Resources/Private/Base/Language/locallang_be.xlf:container.content.left',
                        'colPos' => 300,
                        'allowed' => ['CType' => 'textmedia']
                    ],
                    [
                        'name' => 'LLL:EXT:kedi_sitepackage/Resources/Private/Base/Language/locallang_be.xlf:container.content.right',
                        'colPos' => 301,
                        'allowed' => ['CType' => 'mission_statement']
                    ]
                ]

            ] // grid configuration
        )
        )
            // set an optional icon configuration
            ->setIcon('content-card-group')
    );

    $GLOBALS['TCA']['tt_content']['types']['container_benefits']['showitem'] = '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
            --palette--;;headers,
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
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended';
    // container_benefits end

    // container_teaserslider begin
    GeneralUtility::makeInstance(Registry::class)->configureContainer(
        (
        new ContainerConfiguration(
            'container_teaserslider', // CType
            'LLL:EXT:kedi_sitepackage/Resources/Private/Base/Language/locallang_be.xlf:ctype.container_teaserslider.title',
            // label
            'LLL:EXT:kedi_sitepackage/Resources/Private/Base/Language/locallang_be.xlf:ctype.container_teaserslider.description',
            // description
            [
                [
                    [
                        'name' => 'LLL:EXT:kedi_sitepackage/Resources/Private/Base/Language/locallang_be.xlf:container.content',
                        'colPos' => 200,
                        'allowed' => ['CType' => 'teaser']
                    ]
                ]
            ] // grid configuration
        )
        )
            // set an optional icon configuration
            ->setIcon('content-card-group')
    );

    $GLOBALS['TCA']['tt_content']['types']['container_teaserslider']['showitem'] = '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
            --palette--;;headers,
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
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended';
    // container_teaserslider end

    // container_contentteaser begin
    GeneralUtility::makeInstance(Registry::class)->configureContainer(
        (
        new ContainerConfiguration(
            'container_contentteaser', // CType
            'LLL:EXT:kedi_sitepackage/Resources/Private/Base/Language/locallang_be.xlf:ctype.container_contentteaser.title',
            // label
            'LLL:EXT:kedi_sitepackage/Resources/Private/Base/Language/locallang_be.xlf:ctype.container_contentteaser.description',
            // description
            [
                [
                    [
                        'name' => 'LLL:EXT:kedi_sitepackage/Resources/Private/Base/Language/locallang_be.xlf:container.content',
                        'colPos' => 200,
                        'allowed' => ['CType' => 'content_teaser']
                    ]
                ]
            ] // grid configuration
        )
        )
            // set an optional icon configuration
            ->setIcon('content-card-group')
    );

    $GLOBALS['TCA']['tt_content']['types']['container_contentteaser']['showitem'] = '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
            --palette--;;headers,
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
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended';
    // container_contentteaser end

    // container_tabs begin
    GeneralUtility::makeInstance(Registry::class)->configureContainer(
        (
        new ContainerConfiguration(
            'container_tabs', // CType
            'LLL:EXT:kedi_sitepackage/Resources/Private/Base/Language/locallang_be.xlf:ctype.container_tabs.title',
            // label
            'LLL:EXT:kedi_sitepackage/Resources/Private/Base/Language/locallang_be.xlf:ctype.container_tabs.description',
            // description
            [
                [
                    [
                        'name' => 'LLL:EXT:kedi_sitepackage/Resources/Private/Base/Language/locallang_be.xlf:container.content',
                        'colPos' => 200,
                        'allowed' => ['CType' => 'container_tab_item']
                    ]
                ]
            ] // grid configuration
        )
        )
            // set an optional icon configuration
            ->setIcon(SI::ICON_CONTENT_TABS)
    );

    $GLOBALS['TCA']['tt_content']['types']['container_tabs']['showitem'] = '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
            --palette--;;headers,
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
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended';
    // container_tabs end

    // container_tab_item begin
    GeneralUtility::makeInstance(Registry::class)->configureContainer(
        (
        new ContainerConfiguration(
            'container_tab_item', // CType
            'LLL:EXT:kedi_sitepackage/Resources/Private/Base/Language/locallang_be.xlf:ctype.container_tab_item.title',
            // label
            'LLL:EXT:kedi_sitepackage/Resources/Private/Base/Language/locallang_be.xlf:ctype.container_tab_item.description',
            // description
            [
                [
                    [
                        'name' => 'LLL:EXT:kedi_sitepackage/Resources/Private/Base/Language/locallang_be.xlf:container.content',
                        'colPos' => 200,
                        'allowed' => ['CType' => 'text, textmedia, denacharts_chart_area, denacharts_chart_bar, denacharts_chart_column, denacharts_chart_line, denacharts_chart_pie, denacharts_chart_doughnut']
                    ]
                ]
            ] // grid configuration
        )
        )
            // set an optional icon configuration
            ->setIcon(SI::ICON_CONTENT_TAB_ITEM)
    );

    $GLOBALS['TCA']['tt_content']['types']['container_tab_item']['showitem'] = '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,header,
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
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended';
    // container_tabs end

    // container_ctateaser begin
    GeneralUtility::makeInstance(Registry::class)->configureContainer(
        (
        new ContainerConfiguration(
            'container_ctateaser', // CType
            'LLL:EXT:kedi_sitepackage/Resources/Private/Base/Language/locallang_be.xlf:ctype.container_ctateaser.title',
            // label
            'LLL:EXT:kedi_sitepackage/Resources/Private/Base/Language/locallang_be.xlf:ctype.container_ctateaser.description',
            // description
            [
                [
                    [
                        'name' => 'LLL:EXT:kedi_sitepackage/Resources/Private/Base/Language/locallang_be.xlf:container.content',
                        'colPos' => 200,
                        'allowed' => ['CType' => 'cta_teaser']
                    ]
                ]
            ] // grid configuration
        )
        )
            // set an optional icon configuration
            ->setIcon('content-card-group')
    );

    $GLOBALS['TCA']['tt_content']['types']['container_ctateaser']['showitem'] = '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
            --palette--;;headers,
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
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended';
    // container_ctateaser end

    // container_news begin
    GeneralUtility::makeInstance(Registry::class)->configureContainer(
        (
        new ContainerConfiguration(
            'container_news', // CType
            'LLL:EXT:kedi_sitepackage/Resources/Private/Base/Language/locallang_be.xlf:ctype.container_news.title',
            // label
            'LLL:EXT:kedi_sitepackage/Resources/Private/Base/Language/locallang_be.xlf:ctype.container_news.description',
            // description
            [
                [
                    [
                        'name' => 'LLL:EXT:kedi_sitepackage/Resources/Private/Base/Language/locallang_be.xlf:container.content.left',
                        'colPos' => 300,
                        'allowed' => ['CType' => 'teaser_home_top_news']
                    ],
                    [
                        'name' => 'LLL:EXT:kedi_sitepackage/Resources/Private/Base/Language/locallang_be.xlf:container.content.right',
                        'colPos' => 301,
                        'allowed' => ['CType' => 'teaser_home_news']
                    ]
                ]

            ] // grid configuration
        )
        )
            // set an optional icon configuration
            ->setIcon('content-card-group')
    );

    $GLOBALS['TCA']['tt_content']['types']['container_news']['showitem'] = '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
            --palette--;;headers,
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
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended';
    // container_news end

})();
