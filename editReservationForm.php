<?php
require_once('database.php');

// Get IDs
$ReservationID = filter_input(INPUT_POST, 'reservationID', FILTER_VALIDATE_INT);
$Old_Room_ID = filter_input(INPUT_POST, 'rmID');
$Old_Username = filter_input(INPUT_POST, 'username');
$Old_Date = filter_input(INPUT_POST, 'date');
$Old_Time = filter_input(INPUT_POST, 'time');
$Old_Length = filter_input(INPUT_POST, 'length');
?>

<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>NLCC Admin: Edit Reservations</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<top>
    <a href="index.php"><img src="images/newlight_logo.jpg" alt="New Light Logo" width="100" height="100"></a>
</top>

<!-- the body section -->
<body>
    <header><h1>Edit Reservation</h1></header>

    <main>
        <h1>Edit ReservationID: <?php echo $ReservationID; ?></h1>
        <form action="editReservation.php" method="post"
              id="editReservationForm">
             <input type="hidden" name="reservationID"
            value="<?php echo $ReservationID; ?>">

            <label>Room ID</label><br>
            <input type="text" name="rmID" value="<?php echo $Old_Room_ID; ?>"><br><br>

            <label>Username</label><br>
            <input type="text" name="username" value="<?php echo $Old_Username; ?>"><br><br>

            <label>Date</label><br>
            <input type="text" name="date" value="<?php echo $Old_Date; ?>"><br><br>
			
			<label>Time</label><br>
            <input type="text" name="time" value="<?php echo $Old_Time; ?>"><br><br>
            
            <label>Length</label><br>
            <input type="text" name="length" value="<?php echo $Old_Length; ?>"><br><br>

            <label>&nbsp;</label>
            <input type="submit" value="Save Changes"><br>
        </form>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> New Light Community Center</p>
    </footer>
</body>
</html>