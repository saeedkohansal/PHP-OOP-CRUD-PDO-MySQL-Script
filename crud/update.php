<?php
// Import Database Connection And Class
require('../db-config.php');


/* ----------------- */
/* Update Single Row */
/* ----------------- */
if (isset($_GET['single-update'])) {
    // New Dummy Data To Update Database
    $new_data = [
        'brand'  => 'update brand',
        'model'  => 'update model',
        'type'   => 'update type',
        'engine' => 'update engine',
        'year'   => 2023,
        'id'     => 4
    ];

    // Update Database With Status
    try {
        // Update Database Data
        $db->Update(
            "UPDATE `cars_list`
                SET `brand`    = :brand,
                    `model`    = :model,
                    `type`     = :type,
                    `engine`   = :engine,
                    `year`     = :year
                        WHERE `id` = :id",
            [
                // Send And Update New Data From HTML Form Or Any App To Database
                'brand'  => $new_data['brand'],
                'model'  => $new_data['model'],
                'type'   => $new_data['type'],
                'engine' => $new_data['engine'],
                'year'   => $new_data['year'],
                'id'     => $new_data['id']
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












/* ------------------- */
/* Update Multiple Row */
/* ------------------- */
if (isset($_GET['multiple-update'])) {
    // New Dummy Data To Update Database (Multidimensional Array)
    $new_data[0] = [
        'brand'  => 'update brand 1',
        'model'  => 'update model 1',
        'type'   => 'update type 1',
        'engine' => 'update engine 1',
        'year'   => 2021,
        'id'     => 8
    ];
    $new_data[1] = [
        'brand'  => 'update brand 2',
        'model'  => 'update model 2',
        'type'   => 'update type 2',
        'engine' => 'update engine 2',
        'year'   => 2022,
        'id'     => 14
    ];
    $new_data[2] = [
        'brand'  => 'update brand 3',
        'model'  => 'update model 3',
        'type'   => 'update type 3',
        'engine' => 'update engine 3',
        'year'   => 2023,
        'id'     => 17
    ];

    // Update Database With Status
    try {
        // Update Database Data
        $db->Update(
            "UPDATE `cars_list`
                SET `brand`    = :brand,
                    `model`    = :model,
                    `type`     = :type,
                    `engine`   = :engine,
                    `year`     = :year
                        WHERE `id` = :id",
            [
                // Send And Update New Data From HTML Form Or Any App To Database
                'brand'  => $new_data[0]['brand'],
                'model'  => $new_data[0]['model'],
                'type'   => $new_data[0]['type'],
                'engine' => $new_data[0]['engine'],
                'year'   => $new_data[0]['year'],
                'id'     => $new_data[0]['id']
            ]
        );
        // Update Database Data
        $db->Update(
            "UPDATE `cars_list`
                SET `brand`    = :brand,
                    `model`    = :model,
                    `type`     = :type,
                    `engine`   = :engine,
                    `year`     = :year
                        WHERE `id` = :id",
            [
                // Send And Update New Data From HTML Form Or Any App To Database
                'brand'  => $new_data[1]['brand'],
                'model'  => $new_data[1]['model'],
                'type'   => $new_data[1]['type'],
                'engine' => $new_data[1]['engine'],
                'year'   => $new_data[1]['year'],
                'id'     => $new_data[1]['id']
            ]
        );
        // Update Database Data
        $db->Update(
            "UPDATE `cars_list`
                SET `brand`    = :brand,
                    `model`    = :model,
                    `type`     = :type,
                    `engine`   = :engine,
                    `year`     = :year
                        WHERE `id` = :id",
            [
                // Send And Update New Data From HTML Form Or Any App To Database
                'brand'  => $new_data[2]['brand'],
                'model'  => $new_data[2]['model'],
                'type'   => $new_data[2]['type'],
                'engine' => $new_data[2]['engine'],
                'year'   => $new_data[2]['year'],
                'id'     => $new_data[2]['id']
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
/* Auto Update Row/Rows By Multidimensional Array Loop */
/* --------------------------------------------------- */
if (isset($_GET['auto-update'])) {
    // New Dummy Data To Update Database (Multidimensional Array)
    $new_data = [
        0 => [
            'brand'  => 'update brand 1',
            'model'  => 'update model 1',
            'type'   => 'update type 1',
            'engine' => 'update engine 1',
            'year'   => 2021,
            'id'     => 9
        ],
        1 => [
            'brand'  => 'update brand 2',
            'model'  => 'update model 2',
            'type'   => 'update type 2',
            'engine' => 'update engine 2',
            'year'   => 2022,
            'id'     => 11
        ],
        3 => [
            'brand'  => 'update brand 3',
            'model'  => 'update model 3',
            'type'   => 'update type 3',
            'engine' => 'update engine 3',
            'year'   => 2023,
            'id'     => 20
        ]
    ];

    // Update Database With Status
    try {
        foreach ($new_data as $data) {
            // Update Database Data
            $db->Update(
                "UPDATE `cars_list`
                    SET `brand`    = :brand,
                        `model`    = :model,
                        `type`     = :type,
                        `engine`   = :engine,
                        `year`     = :year
                            WHERE `id` = :id",
                [
                    // Send And Update New Data From HTML Form Or Any App To Database
                    'brand'  => $data['brand'],
                    'model'  => $data['model'],
                    'type'   => $data['type'],
                    'engine' => $data['engine'],
                    'year'   => $data['year'],
                    'id'     => $data['id']
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
