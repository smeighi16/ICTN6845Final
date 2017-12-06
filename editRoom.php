<?php
require_once('database.php');

// Get IDs
$RmID = filter_input(INPUT_POST, 'rmID', FILTER_VALIDATE_INT);
$Name = filter_input(INPUT_POST, 'name');
$Capacity = filter_input(INPUT_POST, 'capacity');

// Delete the product from the database
//if ($Name != false && $Address != false) {
    $query = 'UPDATE Rooms
				SET name = :name, capacity = :capacity
				WHERE rmID = :rmID';
    $statement = $db->prepare($query);
    $statement->bindValue(':rmID',$RmID);
    $statement->bindValue(':name', $Name);
    $statement->bindValue(':capacity', $Capacity);
    $success = $statement->execute();
    $statement->closeCursor();    
//}

// Display the Product List page
include('adminRooms.php');