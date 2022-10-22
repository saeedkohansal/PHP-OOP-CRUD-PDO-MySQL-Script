<?php
// Import Database Connection And Class
require('../db-config.php');


/* ----------------- */
/* Insert Single Row */
/* ----------------- */
if (isset($_GET['single-insert'])) {
    // Insert New Dummy Data To Database
    $new_data = [
        'brand'  => 'single brand',
        'model'  => 'single model',
        'type'   => 'single type',
        'engine' => 'single engine',
        'year'   => 2023
    ];

    // Insert Data To Database With Status
    try {
        // Insert New Data To Database
        $id = $db->Insert(
            "INSERT INTO `cars_list`
                (`brand`, `model`, `type`, `engine`, `year`)
                    values (:brand, :model, :type, :engine, :year)",
            [
                // Insert New Data From HTML Form Or Any App To Database
                'brand'  => $new_data['brand'],
                'model'  => $new_data['model'],
                'type'   => $new_data['type'],
                'engine' => $new_data['engine'],
                'year'   => $new_data['year']
            ]
        );

        // Display Custom Successful Message
        die('<pre><h1 style="font-size: 100px;">Successful!</h1></pre>');
    } catch (Exception $e) {
        // Display Real Errors
        throw new Exception($e->getMessage());

        // Display Custom Error Message
        die('<pre><h1 style="font-size: 100px;">Error!</h1></pre>');
    }
}












/* -------------------- */
/* Insert Multiple Rows */
/* -------------------- */
if (isset($_GET['multiple-insert'])) {
    // Insert New Dummy Data To Database (Multidimensional Array)
    $new_data[0] = [
        'brand'  => 'multi brand 1',
        'model'  => 'multi model 1',
        'type'   => 'multi type 1',
        'engine' => 'multi engine 1',
        'year'   => 2021
    ];
    $new_data[1] = [
        'brand'  => 'multi brand 2',
        'model'  => 'multi model 2',
        'type'   => 'multi type 2',
        'engine' => 'multi engine 2',
        'year'   => 2022
    ];
    $new_data[2] = [
        'brand'  => 'multi brand 3',
        'model'  => 'multi model 3',
        'type'   => 'multi type 3',
        'engine' => 'multi engine 3',
        'year'   => 2023
    ];

    // Insert Data To Database With Status
    try {
        // Insert New Data To Database
        $id = $db->Insert(
            "INSERT INTO `cars_list`
                (`brand`, `model`, `type`, `engine`, `year`)
                    values (:brand, :model, :type, :engine, :year)",
            [
                // Insert New Data From HTML Form Or Any App To Database
                'brand'  => $new_data[0]['brand'],
                'model'  => $new_data[0]['model'],
                'type'   => $new_data[0]['type'],
                'engine' => $new_data[0]['engine'],
                'year'   => $new_data[0]['year']
            ]
        );
        // Insert New Data To Database
        $id = $db->Insert(
            "INSERT INTO `cars_list`
                (`brand`, `model`, `type`, `engine`, `year`)
                    values (:brand, :model, :type, :engine, :year)",
            [
                // Insert New Data From HTML Form Or Any App To Database
                'brand'  => $new_data[1]['brand'],
                'model'  => $new_data[1]['model'],
                'type'   => $new_data[1]['type'],
                'engine' => $new_data[1]['engine'],
                'year'   => $new_data[1]['year']
            ]
        );
        // Insert New Data To Database
        $id = $db->Insert(
            "INSERT INTO `cars_list`
                (`brand`, `model`, `type`, `engine`, `year`)
                    values (:brand, :model, :type, :engine, :year)",
            [
                // Insert New Data From HTML Form Or Any App To Database
                'brand'  => $new_data[2]['brand'],
                'model'  => $new_data[2]['model'],
                'type'   => $new_data[2]['type'],
                'engine' => $new_data[2]['engine'],
                'year'   => $new_data[2]['year']
            ]
        );

        // Display Custom Successful Message
        die('<pre><h1 style="font-size: 100px;">Successful!</h1></pre>');
    } catch (Exception $e) {
        // Display Real Errors
        throw new Exception($e->getMessage());

        // Display Custom Error Message
        die('<pre><h1 style="font-size: 100px;">Error!</h1></pre>');
    }
}












/* --------------------------------------------------- */
/* Auto Insert Row/Rows By Multidimensional Array Loop */
/* --------------------------------------------------- */
if (isset($_GET['auto-insert'])) {
    // Insert New Dummy Data To Database (Multidimensional Array)
    $new_data = [
        0 => [
            'brand'  => 'auto brand 1',
            'model'  => 'auto model 1',
            'type'   => 'auto type 1',
            'engine' => 'auto engine 1',
            'year'   => 2021
        ],
        1 => [
            'brand'  => 'auto brand 2',
            'model'  => 'auto model 2',
            'type'   => 'auto type 2',
            'engine' => 'auto engine 2',
            'year'   => 2022
        ],
        3 => [
            'brand'  => 'auto brand 3',
            'model'  => 'auto model 3',
            'type'   => 'auto type 3',
            'engine' => 'auto engine 3',
            'year'   => 2023
        ]
    ];

    // Insert Data To Database With Status
    try {
        foreach ($new_data as $data) {
            // Insert New Data To Database
            $id = $db->Insert(
                "INSERT INTO `cars_list`
                    (`brand`, `model`, `type`, `engine`, `year`)
                        values (:brand, :model, :type, :engine, :year)",
                [
                    // Insert New Data From HTML Form Or Any App To Database
                    'brand'  => $data['brand'],
                    'model'  => $data['model'],
                    'type'   => $data['type'],
                    'engine' => $data['engine'],
                    'year'   => $data['year']
                ]
            );
        }

        // Display Custom Successful Message
        die('<pre><h1 style="font-size: 100px;">Successful!</h1></pre>');
    } catch (Exception $e) {
        // Display Real Errors
        throw new Exception($e->getMessage());

        // Display Custom Error Message
        die('<pre><h1 style="font-size: 100px;">Error!</h1></pre>');
    }
}
