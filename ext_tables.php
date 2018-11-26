<?php

defined('TYPO3_MODE') or die();

$_LLL_db = 'LLL:EXT:contacts/Resources/Private/Language/locallang_db.xlf:';

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'Extcode.contacts',
        'web',
        'contacts',
        '',
        [
            'Backend\Contact' => 'list, show, edit, update',
            'Backend\Company' => 'list, show, edit, update',
        ],
        [
            'access' => 'admin',
            'icon' => 'EXT:contacts/Resources/Public/Icons/module_contacts.svg',
            'labels' => $_LLL_db . 'tx_contacts.module.contacts',
        ]
    );
}
