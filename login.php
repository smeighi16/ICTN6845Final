<?php
require_once('database.php');


// Get the login information
$Username = filter_input(INPUT_POST, 'username');
$Password = filter_input(INPUT_POST, 'password');




// Get all categories
$query = 'SELECT * 
            FROM Users
            WHERE userName = :username AND password = :password';
$statement = $db->prepare($query);
$statement->bindValue(':username', $Username);
$statement->bindValue(':password', $Password);
$statement->execute();
$success = $statement->fetchAll();
$statement->closeCursor();

foreach ($success as $succes)

if ($success){
    if ($succes['status'] == 'u'){
        include('userAccess.php');
    }
    else{
        include('adminAccess.php');
    }
}

if (!$success){
    include('incorrectLogin.php');
}

    
?>