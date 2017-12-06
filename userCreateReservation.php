<?php
require_once('database.php');

// Get IDs


$RmID = filter_input(INPUT_POST, 'rmID');
$Username = filter_input(INPUT_POST, 'username');
$Date = filter_input(INPUT_POST, 'date');
$Time = filter_input(INPUT_POST, 'time');
$Length = filter_input(INPUT_POST, 'length');



// Delete the product from the database
//if ($Name != false && $Address != false) {
    $query = 'INSERT INTO Reservations (rmID, username, date, time, length)
                VALUES (:rmID, :username, :date, :time, :length)';
    $statement = $db->prepare($query);
    
    $statement->bindValue(':rmID', $RmID);
    $statement->bindValue(':username', $Username);
    $statement->bindValue(':date', $Date);
    $statement->bindValue(':time', $Time);
    $statement->bindValue(':length', $Length);
    $success = $statement->execute();
    $statement->closeCursor();    
//}

// Display the Product List page
include('userAccess.php');