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
    <title>NLCC Admin: Rooms</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<top>
    <a href="index.php"><img src="images/newlight_logo.jpg" alt="New Light Logo" width="100" height="100"></a>
</top>

<!-- the body section -->
<body>
<header><h1>Rooms</h1></header>
<main><br>
<a href="adminCreateRoomForm.php">Create a Room</a>
<br><br>

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
                <td><form action="deleteRoom.php" method="post">
                    <input type="hidden" name="rmID"
                           value="<?php echo $room['rmID']; ?>">
                    <input type="submit" value="Delete">
                </form>
                <form action="editRoomForm.php" method="post">
                    <input type="hidden" name="rmID"
                           value="<?php echo $room['rmID']; ?>">
                   <input type="hidden" name="name"
                           value="<?php echo $room['name']; ?>">
                   <input type="hidden" name="capacity"
                           value="<?php echo $room['capacity']; ?>">
                    <input type="submit" value="Edit">
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <p><a href="adminAccess.php">Back</a></p>
               
    </section>
</main>
<footer>
    <p>&copy; <?php echo date("Y"); ?> New Light Community Center</p>
</footer>
</body>
</html>