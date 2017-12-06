<?php
require_once('database.php');

// Get IDs
$UserID = filter_input(INPUT_POST, 'userID', FILTER_VALIDATE_INT);


// Delete the product from the database
//if ($Name != false && $Address != false && $Phone != false && $Email != false) {
    $query = 'DELETE FROM Users
              WHERE userID = :userID';
    $statement = $db->prepare($query);
    $statement->bindValue(':userID', $UserID);
    $success = $statement->execute();
    $statement->closeCursor();    
//}

// Display the Product List page
include('adminUsers.php');