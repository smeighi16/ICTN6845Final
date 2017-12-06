<?php
require_once('database.php');

// Get IDs
$RmID = filter_input(INPUT_POST, 'rmID', FILTER_VALIDATE_INT);


// Delete the product from the database
//if ($Name != false && $Address != false && $Phone != false && $Email != false) {
    $query = 'DELETE FROM Rooms
              WHERE rmID = :rmID';
    $statement = $db->prepare($query);
    $statement->bindValue(':rmID', $RmID);
    $success = $statement->execute();
    $statement->closeCursor();    
//}

// Display the Product List page
include('adminRooms.php');