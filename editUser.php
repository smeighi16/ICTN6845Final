<?php
require_once('database.php');

// Get IDs
$UserID = filter_input(INPUT_POST, 'userID', FILTER_VALIDATE_INT);
$Username = filter_input(INPUT_POST, 'username');
$Password = filter_input(INPUT_POST, 'password');
$Fname = filter_input(INPUT_POST, 'fName');
$Lname = filter_input(INPUT_POST, 'lName');
$Email = filter_input(INPUT_POST, 'email');
$Phone = filter_input(INPUT_POST, 'phone');
$Status = filter_input(INPUT_POST, 'status');

// Delete the product from the database
//if ($Name != false && $Address != false) {
    $query = 'UPDATE Users
                SET username = :username, password = :password, fName = :fName, lName = :lName, email = :email, phone = :phone, status = :status
				WHERE userID = :userID';
    $statement = $db->prepare($query);
    $statement->bindValue(':userID', $UserID);
    $statement->bindValue(':username', $Username);
    $statement->bindValue(':password', $Password);
    $statement->bindValue(':fName', $Fname);
    $statement->bindValue(':lName', $Lname);
    $statement->bindValue(':email', $Email);
    $statement->bindValue(':phone', $Phone);
    $statement->bindValue(':status', $Status);
    $success = $statement->execute();
    $statement->closeCursor();    
//}

// Display the Product List page
include('adminUsers.php');