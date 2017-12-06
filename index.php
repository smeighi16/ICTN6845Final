

<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>New Light CC</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<top>
    <a href="index.php"><img src="images/newlight_logo.jpg" alt="New Light Logo" width="100" height="100"></a>
    
    <button><a href="rooms.php">Room Information</a></button>
    
    
    
</top>

<!-- the body section -->
<body>
    <header>
    
    <h1>New Light Community Center</h1></header>

    <main>
        <h1>Login</h1>
        <form action="login.php" method="post"
              id="login_form">

            <label>Username</label><br>
            <input type="text" name="username"><br><br>

            <label>Password</label><br>
            <input type="password" name="password"><br><br>


            <label>&nbsp;</label>
            <input type="submit" value="Login"><br>
        </form>
        <br><h3>First Time User?</h3>
        <createUser>
        <a href="createUserForm.php">Create an Account</a>
        </createUser>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> New Light Community Center</p>
    </footer>
</body>
</html>