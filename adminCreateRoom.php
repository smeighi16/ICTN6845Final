<?php
require_once('database.php');

// Get IDs

$Name = filter_input(INPUT_POST, 'name');
$Capacity = filter_input(INPUT_POST, 'capacity');


// Delete the product from the database
//if ($Name != false && $Address != false) {
    $query = 'INSERT INTO Rooms (name, capacity)
                VALUES (:name, :capacity)';
    $statement = $db->prepare($query);
    
    $statement->bindValue(':name', $Name);
    $statement->bindValue(':capacity', $Capacity);
    $success = $statement->execute();
    $statement->closeCursor();    
//}

// Display the Product List page
include('adminRooms.php');