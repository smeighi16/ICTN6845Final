<?php
require_once('database.php');

// Get IDs
$RmID = filter_input(INPUT_POST, 'rmID', FILTER_VALIDATE_INT);
$Old_Name = filter_input(INPUT_POST, 'name');
$Old_Capacity = filter_input(INPUT_POST, 'capacity');
?>

<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>NLCC Admin: Edit Rooms</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<top>
    <a href="index.php"><img src="images/newlight_logo.jpg" alt="New Light Logo" width="100" height="100"></a>
</top>

<!-- the body section -->
<body>
    <header><h1>Edit Room Information</h1></header>

    <main>
        <h1>Edit Room: <?php echo $Old_Name; ?> Information</h1>
        <form action="editRoom.php" method="post"
              id="editRoomForm">
             <input type="hidden" name="rmID"
            value="<?php echo $RmID; ?>">

            <label>Room Name</label><br>
            <input type="text" name="name" value="<?php echo $Old_Name; ?>"><br><br>

            <label>Capacity</label><br>
            <input type="text" name="capacity" value="<?php echo $Old_Capacity; ?>"><br><br>


            <label>&nbsp;</label>
            <input type="submit" value="Save Changes"><br>
        </form>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> New Light Community Center</p>
    </footer>
</body>
</html>