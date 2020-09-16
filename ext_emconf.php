<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'RSA authentication for TYPO3',
    'description' => 'Contains a service to authenticate TYPO3 BE and FE users using private/public key encryption of passwords. The extension is deprecated. Please use https://',
    'category' => 'services',
    'author' => 'Friends of TYPO3',
    'author_email' => 'friendsof@typo3.org',
    'author_company' => '',
    'state' => 'deprecated',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '10.0.2',
    'constraints' => [
        'depends' => [
            'typo3' => '10.0.0-10.9.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
