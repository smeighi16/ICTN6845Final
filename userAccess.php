<?php
require_once('database.php');


// Get reservations
$queryReservations = 'SELECT *
                    FROM Reservations, Rooms
                    WHERE Reservations.rmID = Rooms.rmID AND Reservations.username = :username
                  ORDER BY reservationID';
$statement3 = $db->prepare($queryReservations);
$statement3->bindValue(':username', $Username);
$statement3->execute();
$reservations = $statement3->fetchAll();
$statement3->closeCursor();

// Get rooms
$queryRooms = 'SELECT *
                    FROM Rooms
                  ORDER BY rmID';
$statement4 = $db->prepare($queryRooms);
$statement4->execute();
$rooms = $statement4->fetchAll();
$statement4->closeCursor();
?>

<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>New Light CC User</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<top>
    <a href="index.php"><img src="images/newlight_logo.jpg" alt="New Light Logo" width="100" height="100"></a>
</top>

<!-- the body section -->
<body>
    <header>
        
    <h1>User Access</h1></header>

    <main>
        <br>
        <br>
        <h2>Make a Reservation</h2>
        
        <table>
            <tr>
                
                <th>Room Name</th>
                <th>Capacity</th>
            </tr>

            <?php foreach ($rooms as $room) : ?>
            <tr>
                <td><?php echo $room['name']; ?></td>
                <td><?php echo $room['capacity']; ?></td>
                <td><form action="userCreateReservationForm.php" method="post">
                    <input type="hidden" name="rmID"
                           value="<?php echo $room['rmID']; ?>">
                    <input type="hidden" name="username"
                           value="<?php echo $Username; ?>">
                    <input type="submit" value="Book Now">
                </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </table><br>
        
        <h2>Your Reservation List</h2>
        <table>
            <tr>
                <th>Room Name</th>
                <th>Date</th>
                <th>Time</th>
                <th>Length</th>
                <th>Capacity</th>
            </tr>

            <?php foreach ($reservations as $reservation) : ?>
            <tr>
                <td><?php echo $reservation['name']; ?></td>
                <td><?php echo $reservation['date']; ?></td>
                <td><?php echo $reservation['time']; ?></td>
                <td><?php echo $reservation['length']; ?></td>
                <td><?php echo $reservation['capacity']; ?></td>
                <td><form action="userDeleteReservation.php" method="post">
                    <input type="hidden" name="reservationID"
                           value="<?php echo $reservation['reservationID']; ?>">
                    <input type="hidden" name="username"
                           value="<?php echo $Username; ?>">
                    <input type="submit" value="Delete">
                </form>
                <form action="userEditReservationForm.php" method="post">
                        <input type="hidden" name="reservationID"
                               value="<?php echo $reservation['reservationID']; ?>">
                       <input type="hidden" name="rmID"
                               value="<?php echo $reservation['rmID']; ?>">
                       <input type="hidden" name="username"
                               value="<?php echo $reservation['username']; ?>">
                       <input type="hidden" name="date"
                               value="<?php echo $reservation['date']; ?>">
                       <input type="hidden" name="time"
                               value="<?php echo $reservation['time']; ?>">
                       <input type="hidden" name="length"
                               value="<?php echo $reservation['length']; ?>">
                        <input type="submit" value="Edit">
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
        
    </main>
    <logout>
    <br>
    <a href="index.php">Log Out</a>
    </logout>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> New Light Conference Center</p>
    </footer>
</body>
</html>