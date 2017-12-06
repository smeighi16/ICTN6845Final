
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>NLCC Admin</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<top>
    <a href="index.php"><img src="images/newlight_logo.jpg" alt="New Light Logo" width="100" height="100"></a>
</top>

<!-- the body section -->
<body>
    <header>
        
    <h1>Admin Access</h1></header>

    <main>
        <fieldset>
            <legend>Options</legend>
            <a href="adminReservations.php">Reservations</a><br>
            <a href="adminUsers.php">Users</a><br>
            <a href="adminRooms.php">Rooms</a>
        </fieldset>
        
    </main>
    <logout>
    <br>
    <a href="index.php">Log Out</a>
    </logout>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> New Light Community Center</p>
    </footer>
</body>
</html>