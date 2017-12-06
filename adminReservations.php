<?php
require_once('database.php');




// Get reservations
$queryReservations = 'SELECT *
                    FROM Reservations, Rooms
                    WHERE Reservations.rmID = Rooms.rmID
                  ORDER BY reservationID';
$statement3 = $db->prepare($queryReservations);
$statement3->execute();
$reservations = $statement3->fetchAll();
$statement3->closeCursor();
?>
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>NLCC Admin: Reservations</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<top>
    <a href="index.php"><img src="images/newlight_logo.jpg" alt="New Light Logo" width="100" height="100"></a>
</top>

<!-- the body section -->
<body>
<header><h1>Reservations</h1></header>
<main>
    <br><a href="adminCreateReservationForm.php">Create Reservation</a>
<br><br>

    <aside>
        <!-- display a list of categories -->
        <h2>Reservation List</h2>
        <table>
            <tr>
                <th>Reservation ID</th>
                <th>Room ID</th>
                <th>Room Name</th>
                <th>Username</th>
                <th>Date</th>
                <th>Time</th>
                <th>Length</th>
                <th>Capacity</th>
            </tr>

            <?php foreach ($reservations as $reservation) : ?>
            <tr>
                <td><?php echo $reservation['reservationID']; ?></td>
                <td><?php echo $reservation['rmID']; ?></td>
                <td><?php echo $reservation['name']; ?></td>
                <td><?php echo $reservation['username']; ?></td>
                <td><?php echo $reservation['date']; ?></td>
                <td><?php echo $reservation['time']; ?></td>
                <td><?php echo $reservation['length']; ?></td>
                <td><?php echo $reservation['capacity']; ?></td>
                <td><form action="deleteReservation.php" method="post">
                    <input type="hidden" name="reservationID"
                           value="<?php echo $reservation['reservationID']; ?>">
                    <input type="submit" value="Delete">
                </form>
                <form action="editReservationForm.php" method="post">
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
        <p><a href="adminAccess.php">Back</a></p>
               
    </section>
</main>
<footer>
    <p>&copy; <?php echo date("Y"); ?> New Light Community Center</p>
</footer>
</body>
</html>