<?php
require_once('database.php');

// Get IDs
$ReservationID = filter_input(INPUT_POST, 'reservationID', FILTER_VALIDATE_INT);
$Username = filter_input(INPUT_POST, 'username');


// Delete the product from the database
//if ($Name != false && $Address != false && $Phone != false && $Email != false) {
    $query = 'DELETE FROM Reservations
              WHERE reservationID = :reservationID';
    $statement = $db->prepare($query);
    $statement->bindValue(':reservationID', $ReservationID);
    $success = $statement->execute();
    $statement->closeCursor();    
//}

// Display the Product List page
include('userAccess.php');