<?php
    $dsn = 'mysql:host=localhost;dbname=id618227_ozanreservations';
    $username = 'id618227_smeighi16';
    $password = 'pa55word';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>