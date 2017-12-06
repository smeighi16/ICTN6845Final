<?php
require_once('database.php');

// Get IDs

$Username = filter_input(INPUT_POST, 'username');
$Password = filter_input(INPUT_POST, 'password');
$Fname = filter_input(INPUT_POST, 'fName');
$Lname = filter_input(INPUT_POST, 'lName');
$Email = filter_input(INPUT_POST, 'email');
$Phone = filter_input(INPUT_POST, 'phone');
$Status = filter_input(INPUT_POST, 'status');

// Delete the product from the database
//if ($Name != false && $Address != false) {
    $query = 'INSERT INTO Users (username, password, fName, lName, email, phone, status)
                VALUES (:username, :password, :fName, :lName, :email, :phone, :status)';
    $statement = $db->prepare($query);
    
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