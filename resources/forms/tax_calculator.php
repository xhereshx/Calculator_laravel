<?php

/**
 * configuration for the entire tax-calculator form
 */
return [
    'pages' => [
        'page1' => [
            'bg_image' => 'http://www.securetax.eu/00BootCamp/18usaFDNRM01b.png',
            'width' => 793,
            // ... other properties about a page
            'fields' => [
                'FDamdC4' => [
                    'left' => 125,
                    'top' => 108,
                    'font-size' => 13,
                    'width' => 227,
                    'text-align' => 'left',
                    'color' => '#000',
                    'placeholder' => '0.00'
                ],
                'FDamdC3' => [
                    'left' => 651,
                    'top' => 382,
                    'font-size' => 13,
                    'width' => 83,
                    'text-align' => 'right',
                    'color' => '#000',
                    'placeholder' => 'whatever'
                ],
                'FDamdC2' => [
                    'left' => 651,
                    'top' => 400,
                    'font-size' => 13,
                    'width' => 83,
                    'text-align' => 'right',
                    'color' => '#000',
                    'placeholder' => 'whatever else'
                ]
            ]
        ]
    ]
];