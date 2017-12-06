<?php
require_once('database.php');

// Get IDs
$UserID = filter_input(INPUT_POST, 'userID', FILTER_VALIDATE_INT);
$OldUsername = filter_input(INPUT_POST, 'username');
$OldPassword = filter_input(INPUT_POST, 'password');
$OldFname = filter_input(INPUT_POST, 'fName');
$OldLname = filter_input(INPUT_POST, 'lName');
$OldEmail = filter_input(INPUT_POST, 'email');
$OldPhone = filter_input(INPUT_POST, 'phone');
$OldStatus = filter_input(INPUT_POST, 'status');
?>

<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>NLCC Admin: Edit Users</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<top>
    <a href="index.php"><img src="images/newlight_logo.jpg" alt="New Light Logo" width="100" height="100"></a>
</top>

<!-- the body section -->
<body>
    <header><h1>Edit User</h1></header>

    <main>
        <h1>Edit User: <?php echo $OldUsername; ?></h1>
        <form action="editUser.php" method="post"
              id="editUserForm">
             <input type="hidden" name="userID"
            value="<?php echo $UserID; ?>">
            
            <label>Username</label><br>
            <input type="text" name="username" value="<?php echo $OldUsername; ?>"><br><br>

            <label>Password</label><br>
            <input type="password" name="password" value="<?php echo $OldPassword; ?>"><br><br>

            <label>First Name</label><br>
            <input type="text" name="fName" value="<?php echo $OldFname; ?>"><br><br>

            <label>Last Name</label><br>
            <input type="text" name="lName" value="<?php echo $OldLname; ?>"><br><br>
			
			<label>Email</label><br>
            <input type="text" name="email" value="<?php echo $OldEmail; ?>"><br><br>
            
            <label>Phone #</label><br>
            <input type="text" name="phone" value="<?php echo $OldPhone; ?>"><br><br>
            
            <label>Status</label><br>
            <input type="text" name="status" value="<?php echo $OldStatus; ?>"><br><br>

            <label>&nbsp;</label>
            <input type="submit" value="Save Changes"><br>
        </form>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> New Light Community Center</p>
    </footer>
</body>
</html>