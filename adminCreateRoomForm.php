
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>NLCC Admin: Create Room</title>
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
        <h1>Create Room</h1>
        <form action="adminCreateRoom.php" method="post"
              id="adminCreateRoomForm">
            
            <label>Room Name</label><br>
                    <input type="text" name="name"><br><br>
            <label>Capacity</label><br>
                    <input type="text" name="capacity"><br><br>
            <label>&nbsp;</label>
            <input type="submit" value="Create Room"><br>
        </form>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> New Light Community Center</p>
    </footer>
</body>
</html>