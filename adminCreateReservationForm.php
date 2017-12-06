<?php
require_once('database.php');




// Get rooms
$queryRooms = 'SELECT * FROM Rooms
                  ORDER BY rmID';
$statement3 = $db->prepare($queryRooms);
$statement3->execute();
$rooms = $statement3->fetchAll();
$statement3->closeCursor();

// Get users
$queryUsers = 'SELECT * FROM Users
                  ORDER BY userID';
$statement4 = $db->prepare($queryUsers);
$statement4->execute();
$users = $statement4->fetchAll();
$statement4->closeCursor();
?>

<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>NLCC Admin: Create Reservation</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<top>
    <a href="index.php"><img src="images/newlight_logo.jpg" alt="New Light Logo" width="100" height="100"></a>
</top>

<!-- the body section -->
<body>
    <header>
        
    <h1>New Light Conference Center</h1></header>

    <main>
        <h1>Create Reservation</h1>
        <form action="adminCreateReservation.php" method="post"
              id="adminCreateReservationForm">


            <label>Room</label><br>
            <select name="name" type="text">
            <?php foreach ($rooms as $room) : ?>
            <option value="<?php echo $room['name']; ?>"><?php echo $room['name']; ?></option>
            <?php endforeach; ?>
            </select><br><br>
            
            <label>Username</label><br>
            <select name="username" type="text">
            <?php foreach ($users as $user) : ?>
            <option value="<?php echo $user['username']; ?>"><?php echo $user['username']; ?></option>
            <?php endforeach; ?>
            </select><br><br>

            <label>Date of Reservation</label><br>
            <input type="date" name="date"><br><br>
            
            <label>Starting Time</label><br>
            <input type="time" name="time"><br><br>

            <label>Length of Meeting (hours)</label><br>
            <input type="number" name="length" min=0><br><br>

            <label>&nbsp;</label>
            <input type="submit" value="Create Reservation"><br>
        </form>
        
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> New Light Community Center</p>
    </footer>
</body>
</html>