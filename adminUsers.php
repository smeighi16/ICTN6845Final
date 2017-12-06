<?php
require_once('database.php');




// Get reservations
$queryUsers = 'SELECT * FROM Users
                  ORDER BY username';
$statement3 = $db->prepare($queryUsers);
$statement3->execute();
$users = $statement3->fetchAll();
$statement3->closeCursor();
?>
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>NLCC Admin: Users</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<top>
    <a href="index.php"><img src="images/newlight_logo.jpg" alt="New Light Logo" width="100" height="100"></a>
</top>

<!-- the body section -->
<body>
<header><h1>Users</h1></header>
<main><br>
<a href="adminCreateUserForm.php">Create a User</a>
<br><br>
    <aside>
        <!-- display a list of categories -->
        <h2>List of Users</h2>
        <table>
            <tr>
                <th>User ID</th>
                <th>Username</th>
                <th>Password</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone #</th>
                <th>Status</th>
            </tr>

            <?php foreach ($users as $user) : ?>
            <tr>
                <td><?php echo $user['userID']; ?></td>
                <td><?php echo $user['username']; ?></td>
                <td><?php echo $user['password']; ?></td>
                <td><?php echo $user['fName']; ?></td>
                <td><?php echo $user['lName']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td><?php echo $user['phone']; ?></td>
                <td><?php echo $user['status']; ?></td>
                <td><form action="deleteUser.php" method="post">
                    <input type="hidden" name="userID"
                           value="<?php echo $user['userID']; ?>">
                    <input type="submit" value="Delete">
                </form>
                <form action="editUserForm.php" method="post">
                    <input type="hidden" name="userID"
                           value="<?php echo $user['userID']; ?>">
                   <input type="hidden" name="username"
                           value="<?php echo $user['username']; ?>">
                   <input type="hidden" name="password"
                           value="<?php echo $user['password']; ?>">
                   <input type="hidden" name="fName"
                           value="<?php echo $user['fName']; ?>">
                   <input type="hidden" name="lName"
                           value="<?php echo $user['lName']; ?>">
                   <input type="hidden" name="email"
                           value="<?php echo $user['email']; ?>">
                   <input type="hidden" name="phone"
                           value="<?php echo $user['phone']; ?>">
                   <input type="hidden" name="status"
                           value="<?php echo $user['status']; ?>">
                    <input type="submit" value="Edit">
                </form></td>
                </td>
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