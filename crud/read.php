<?php
// Import Database Connection And Class
require('../db-config.php');


/* ----------------------------------------------- */
/* Select Data From Database (All Rows From Table) */
/* ----------------------------------------------- */
$all_posts = $db->Select("SELECT * FROM `cars_list` ORDER BY `added` DESC");




/* ---------------------------------------------------- */
/* Select Data From Database (By ID From GET Parameter) */
/* ---------------------------------------------------- */
if (isset($_GET['id'])) {
    $target_post = $db->Select(
        "SELECT *
            FROM `cars_list`
                WHERE `id` = :id",
        [
            'id' => htmlspecialchars($_GET['id'])
        ]
    );
}




/* ---------------------------------------------------------- */
/* Select Data From Database (Multiple Rows By ID From Table) */
/* ---------------------------------------------------------- */
$multiple_posts = $db->Select(
    "SELECT `id`, `brand`, `model`, `type`, `engine`, `year`
        FROM `cars_list`
            WHERE `id` = :id_1
                OR `id` = :id_2
                    OR `id` = :id_3",
    [
        'id_1' => 10,
        'id_2' => 14,
        'id_3' => 5
    ]
);




/* ------------------------------------------- */
/* Auto Select Row/Rows By GET Parameters Loop */
/* ------------------------------------------- */
if (isset($_GET['auto-select'])) {
    /*
    Select Multiple Data From Database By GET Parameter
    Add Parameter Like This:

    ?auto-select&key-1=value-1&key-2=value-2&key-3=value-3

    ?auto-select&key_1=value_1&key_2=value_2&key_3=value_3

    ?auto-select&id-1=20&id-2=15&id-3=13&id-4=11&id-5=9&id-6=8

    ?auto-select&id_1=20&id_2=15&id_3=13&id_4=11&id_5=9&id_6=8

    ?auto-select&one=20&two=15&three=13&four=11&five=9&six=8

    And More...
    */
    foreach ($_GET as $id) {
        // Select Rows By ID
        $auto_select[] = $db->Select(
            "SELECT *
                FROM `cars_list`
                    WHERE `id` = :id",
            [
                'id' => $id
            ]
        );
    }
}


// Display Result
echo '<pre>', print_r($all_posts, TRUE), '</pre>';
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fira+Code">
<link rel="stylesheet" href="../style.css">