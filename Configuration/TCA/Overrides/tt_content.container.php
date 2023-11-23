<?php
defined('TYPO3') or die('Access denied.');

use B13\Container\Tca\ContainerConfiguration;
use B13\Container\Tca\Registry;
use Cpsit\BravoContentElements\Configuration\SettingsInterface as SI;
use TYPO3\CMS\Core\Utility\GeneralUtility;

(function () {

    // container_col_33 begin
    GeneralUtility::makeInstance(Registry::class)->configureContainer(
        (
        new ContainerConfiguration(
            'container_col_33_33_33', // CType
            'LLL:EXT:bravo_content_elements/Resources/Private/Language/locallang_be.xlf:ctype.container_col_33_33_33.title',
            // label
            'LLL:EXT:bravo_content_elements/Resources/Private/Language/locallang_be.xlf:ctype.container_col_33_33_33.description',
            // description
            [
                [
                    [
                        'name' => 'LLL:EXT:bravo_content_elements/Resources/Private/Language/locallang_be.xlf:container.content.left',
                        'colPos' => 300
                    ],
                    [
                        'name' => 'LLL:EXT:bravo_content_elements/Resources/Private/Language/locallang_be.xlf:container.content.middle',
                        'colPos' => 301
                    ],
                    [
                        'name' => 'LLL:EXT:bravo_content_elements/Resources/Private/Language/locallang_be.xlf:container.content.right',
                        'colPos' => 302
                    ]
                ]
            ] // grid configuration
        )
        )
            // set an optional icon configuration
            ->setIcon('content-container-columns-3')
    );
    // container_col_33_33_33 end

    // container_col_66_33 begin
    GeneralUtility::makeInstance(Registry::class)->configureContainer(
        (
        new ContainerConfiguration(
            'container_col_66_33', // CType
            'LLL:EXT:bravo_content_elements/Resources/Private/Language/locallang_be.xlf:ctype.container_col_66_33.title',
            // label
            'LLL:EXT:bravo_content_elements/Resources/Private/Language/locallang_be.xlf:ctype.container_col_66_33.description',
            // description
            [
                [
                    [
                        'name' => 'LLL:EXT:bravo_content_elements/Resources/Private/Language/locallang_be.xlf:container.content.left',
                        'colPos' => 300
                    ],
                    [
                        'name' => 'LLL:EXT:bravo_content_elements/Resources/Private/Language/locallang_be.xlf:container.content.right',
                        'colPos' => 301
                    ]
                ]
            ] // grid configuration
        )
        )
            // set an optional icon configuration
            ->setIcon('content-container-columns-2-left')
    );
    // container_col_66_33 end

    // container_col_33_66 begin
    GeneralUtility::makeInstance(Registry::class)->configureContainer(
        (
        new ContainerConfiguration(
            'container_col_33_66', // CType
            'LLL:EXT:bravo_content_elements/Resources/Private/Language/locallang_be.xlf:ctype.container_col_33_66.title',
            // label
            'LLL:EXT:bravo_content_elements/Resources/Private/Language/locallang_be.xlf:ctype.container_col_33_66.description',
            // description
            [
                [
                    [
                        'name' => 'LLL:EXT:bravo_content_elements/Resources/Private/Language/locallang_be.xlf:container.content.left',
                        'colPos' => 300
                    ],
                    [
                        'name' => 'LLL:EXT:bravo_content_elements/Resources/Private/Language/locallang_be.xlf:container.content.right',
                        'colPos' => 301
                    ]
                ]
            ] // grid configuration
        )
        )
            // set an optional icon configuration
            ->setIcon('content-container-columns-2-right')
    );
    // container_col_33_66 end

    // container_col_50_50 begin
    GeneralUtility::makeInstance(Registry::class)->configureContainer(
        (
        new ContainerConfiguration(
            'container_col_50_50', // CType
            'LLL:EXT:bravo_content_elements/Resources/Private/Language/locallang_be.xlf:ctype.container_col_50_50.title',
            // label
            'LLL:EXT:bravo_content_elements/Resources/Private/Language/locallang_be.xlf:ctype.container_col_50_50.description',
            // description
            [
                [
                    [
                        'name' => 'LLL:EXT:bravo_content_elements/Resources/Private/Language/locallang_be.xlf:container.content.left',
                        'colPos' => 300
                    ],
                    [
                        'name' => 'LLL:EXT:bravo_content_elements/Resources/Private/Language/locallang_be.xlf:container.content.right',
                        'colPos' => 301
                    ]
                ]
            ] // grid configuration
        )
        )
            // set an optional icon configuration
            ->setIcon('content-container-columns-2')
    );
    // container_col_50_50 end

    // container_heroslider begin
    GeneralUtility::makeInstance(Registry::class)->configureContainer(
        (
        new ContainerConfiguration(
            'container_heroslider', // CType
            'LLL:EXT:bravo_content_elements/Resources/Private/Language/locallang_be.xlf:ctype.container_heroslider.title',
            // label
            'LLL:EXT:bravo_content_elements/Resources/Private/Language/locallang_be.xlf:ctype.container_heroslider.description',
            // description
            [
                [
                    [
                        'name' => 'LLL:EXT:bravo_content_elements/Resources/Private/Language/locallang_be.xlf:container.content.middle',
                        'colPos' => 300,
                        'allowed' => ['CType' => 'heroslider_item']
                    ]
                ]
            ] // grid configuration
        )
        )
            // set an optional icon configuration
            ->setIcon('content-container-columns-1')
    );
    // container_heroslider end

    // container_col_100 begin
    GeneralUtility::makeInstance(Registry::class)->configureContainer(
        (
        new ContainerConfiguration(
            'container_col_100', // CType
            'LLL:EXT:bravo_content_elements/Resources/Private/Language/locallang_be.xlf:ctype.container_col_100.title',
            // label
            'LLL:EXT:bravo_content_elements/Resources/Private/Language/locallang_be.xlf:ctype.container_col_100.description',
            // description
            [
                [
                    [
                        'name' => 'LLL:EXT:bravo_content_elements/Resources/Private/Language/locallang_be.xlf:container.content.middle',
                        'colPos' => 300
                    ]
                ]
            ] // grid configuration
        )
        )
            // set an optional icon configuration
            ->setIcon('content-container-columns-1')
    );
    // container_col_100 end
})();
