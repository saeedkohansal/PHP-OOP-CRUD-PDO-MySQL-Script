<?php
// Import Database Connection And Class
require('../db-config.php');


/* ------------------------------------------------- */
/* Delete Data From Database (Single Row From Table) */
/* ------------------------------------------------- */
if (isset($_GET['delete-by-id'])) {
    // Delete Row By ID
    $db->Remove(
        "DELETE FROM `cars_list` WHERE `id` = :id",
        [
            'id' => htmlspecialchars($_GET['delete-by-id'])
        ]
    );

    // Display Custom Successful Message
    die('<pre><h1 style="font-size: 100px;">Successful!</h1></pre>');
}




/* ---------------------------------------------------------- */
/* Delete Data From Database (Multiple Rows By ID From Table) */
/* ---------------------------------------------------------- */
if (
    isset($_GET['id-1']) &&
    isset($_GET['id-2']) &&
    isset($_GET['id-3'])
) {
    // Delete Rows By IDs
    $db->Remove(
        "DELETE FROM `cars_list`
            WHERE `id` = :id_1
                OR `id` = :id_2
                    OR `id` = :id_3",
        [
            'id_1' => htmlspecialchars($_GET['id-1']),
            'id_2' => htmlspecialchars($_GET['id-2']),
            'id_3' => htmlspecialchars($_GET['id-3'])
        ]
    );

    // Display Custom Successful Message
    die('<pre><h1 style="font-size: 100px;">Successful!</h1></pre>');
}




/* ---------------------------- */
/* Delete All Data From A Table */
/* ---------------------------- */
if (isset($_GET['delete-all'])) {
    // Delete All Rows
    $db->Remove("DELETE FROM `cars_list`");

    // Display Custom Successful Message
    die('<pre><h1 style="font-size: 100px;">Successful!</h1></pre>');
}




/* -------------------------- */
/* Drop A Table From Database */
/* -------------------------- */
if (isset($_GET['drop-table'])) {
    // Drop Table
    $db->Remove("DROP TABLE `cars_list`");

    // Display Custom Successful Message
    die('<pre><h1 style="font-size: 100px;">Successful!</h1></pre>');
}




/* ------------------------------------------- */
/* Auto Delete Row/Rows By GET Parameters Loop */
/* ------------------------------------------- */
if (isset($_GET['auto-delete'])) {
    /*
    Delete Multiple Data From Database By GET Parameter
    Add Parameter Like This:

    ?auto-delete&key-1=value-1&key-2=value-2&key-3=value-3

    ?auto-delete&key_1=value_1&key_2=value_2&key_3=value_3

    ?auto-delete&id-1=20&id-2=15&id-3=13&id-4=11&id-5=9&id-6=8

    ?auto-delete&id_1=20&id_2=15&id_3=13&id_4=11&id_5=9&id_6=8

    ?auto-delete&one=20&two=15&three=13&four=11&five=9&six=8

    And More...
    */
    try {
        foreach ($_GET as $id) {
            // Delete Rows By ID
            $db->Remove(
                "DELETE FROM `cars_list` WHERE `id` = :id",
                [
                    'id' => $id
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
