<?php

use B13\Container\Tca\ContainerConfiguration;
use B13\Container\Tca\Registry;
use Cpsit\BravoContentElements\Configuration\SettingsInterface as SI;
use TYPO3\CMS\Core\Utility\GeneralUtility;

(function () {

    // container_col_66_33 begin
    GeneralUtility::makeInstance(Registry::class)->configureContainer(
        (
        new ContainerConfiguration(
            'container_col_66_33', // CType
            'LLL:EXT:bravo_content_elements/Resources/Private/Base/Language/locallang_be.xlf:ctype.container_col_66_33.title',
            // label
            'LLL:EXT:bravo_content_elements/Resources/Private/Base/Language/locallang_be.xlf:ctype.container_col_66_33.description',
            // description
            [
                [
                    [
                        'name' => 'LLL:EXT:bravo_content_elements/Resources/Private/Base/Language/locallang_be.xlf:container.content.left',
                        'colPos' => 300,
                        'allowed' => ['CType' => 'text, textmedia, teaser, list, html, container_accordion, denacharts_chart_area, denacharts_chart_bar, denacharts_chart_column, denacharts_chart_line, denacharts_chart_pie, denacharts_chart_doughnut']
                    ],
                    [
                        'name' => 'LLL:EXT:bravo_content_elements/Resources/Private/Base/Language/locallang_be.xlf:container.content.right',
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
            'LLL:EXT:bravo_content_elements/Resources/Private/Base/Language/locallang_be.xlf:ctype.container_col_33_66.title',
            // label
            'LLL:EXT:bravo_content_elements/Resources/Private/Base/Language/locallang_be.xlf:ctype.container_col_33_66.description',
            // description
            [
                [
                    [
                        'name' => 'LLL:EXT:bravo_content_elements/Resources/Private/Base/Language/locallang_be.xlf:container.content.left',
                        'colPos' => 300,
                        'allowed' => [
                            'CType' => 'text, textmedia, teaser, list, html, denacharts_chart_area, denacharts_chart_bar, denacharts_chart_column, denacharts_chart_line, denacharts_chart_pie, denacharts_chart_doughnut',
                            'list_type' => 'cpsdownload_listselected'
                        ]
                    ],
                    [
                        'name' => 'LLL:EXT:bravo_content_elements/Resources/Private/Base/Language/locallang_be.xlf:container.content.right',
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
            'LLL:EXT:bravo_content_elements/Resources/Private/Base/Language/locallang_be.xlf:ctype.container_col_50_50.title',
            // label
            'LLL:EXT:bravo_content_elements/Resources/Private/Base/Language/locallang_be.xlf:ctype.container_col_50_50.description',
            // description
            [
                [
                    [
                        'name' => 'LLL:EXT:bravo_content_elements/Resources/Private/Base/Language/locallang_be.xlf:container.content.left',
                        'colPos' => 300,
                        'allowed' => ['CType' => 'text, textmedia, teaser, contact, list, html, container_accordion, denacharts_chart_area, denacharts_chart_bar, denacharts_chart_column, denacharts_chart_line, denacharts_chart_pie, denacharts_chart_doughnut']
                    ],
                    [
                        'name' => 'LLL:EXT:bravo_content_elements/Resources/Private/Base/Language/locallang_be.xlf:container.content.right',
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
    // container_col_50_50 end


})();
