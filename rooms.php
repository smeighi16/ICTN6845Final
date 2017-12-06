<?php
require_once('database.php');




// Get reservations
$queryRooms = 'SELECT * FROM Rooms
                  ORDER BY rmID';
$statement3 = $db->prepare($queryRooms);
$statement3->execute();
$rooms = $statement3->fetchAll();
$statement3->closeCursor();
?>
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>New Light CC: Room Information</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<top>
    <a href="index.php"><img src="images/newlight_logo.jpg" alt="New Light Logo" width="100" height="100"></a>
</top>

<!-- the body section -->
<body>
<header><h1>Room Information</h1></header>
<main><br>


    <aside>
        <!-- display a list of categories -->
        <h2>Room List</h2>
        <table>
            <tr>
                <th>Room ID</th>
                <th>Room Name</th>
                <th>Capacity</th></th>
            </tr>

            <?php foreach ($rooms as $room) : ?>
            <tr>
                <td><?php echo $room['rmID']; ?></td>
                <td><?php echo $room['name']; ?></td>
                <td><?php echo $room['capacity']; ?></td>
                
            </tr>
            <?php endforeach; ?>
        </table>
        <p><a href="index.php">Back</a></p>
               
    </section>
</main>
<footer>
    <p>&copy; <?php echo date("Y"); ?> New Light Community Center</p>
</footer>
</body>
</html>