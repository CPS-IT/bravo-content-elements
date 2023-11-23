<?php
(function () {
    $tableName = 'sys_file_metadata';
    $ll = 'LLL:EXT:bravo_content_elements/Resources/Private/Language/locallang_db.xlf:';

    // pages additional columns
    $tempColumns = [
        'accessibility' => [
            'exclude' => true,
            'label' => $ll . $tableName . '.accessibility',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                    ]
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ]
        ],
    ];

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns($tableName, $tempColumns);
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
        $tableName,
        20,
        'accessibility,--linebreak--',
        'before:caption'
    );
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
        $tableName,
        25,
        'accessibility,--linebreak--',
        'before:caption'
    );
})();
