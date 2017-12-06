<?php

$Username = filter_input(INPUT_POST, 'username');
$RmID = filter_input(INPUT_POST, 'rmID');


?>

<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>New Light CC User: Book Reservation</title>
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
        <form action="userCreateReservation.php" method="post"
              id="userCreateReservationForm">
            
            <input type="hidden" name="rmID"
                value="<?php echo $RmID; ?>">
                
                
            <input type="hidden" name="username"
                value="<?php echo $Username; ?>">


            <label>What date will you need the room?</label><br>
            <input type="date" name="date"><br><br>
            
            <label>What time?</label><br>
            <input type="time" name="time"><br><br>

            <label>How long will the meeting last? (hours)</label><br>
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