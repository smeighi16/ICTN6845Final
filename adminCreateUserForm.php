
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>NLCC Admin: Create User</title>
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
        <h1>Create User</h1>
        <form action="adminCreateUser.php" method="post"
              id="createUserForm">
            <fieldset>
                <legend>Login Information</legend>
                    <label>Username</label><br>
                    <input type="text" name="username"><br><br>
        
                    <label>Password</label><br>
                    <input type="password" name="pass1"><br><br>
        
                    <label>Re-enter Password</label><br>
                    <input type="password" name="password"><br><br>
            </fieldset><br>
			
			<fieldset>
			    <legend>Personal Information</legend>
        			<label>First Name</label><br>
                    <input type="text" name="fName"><br><br>
                    
                    <label>Last Name</label><br>
                    <input type="text" name="lName"><br><br>
                    
                    <label>Email</label><br>
                    <input type="text" name="email"><br><br>
                    
                    <label>Phone #</label><br>
                    <input type="text" name="phone"><br><br>
                    
                    <label>Status (a - admin / u - user)</label><br>
                    <input type="text" name="status"><br><br>
            </fieldset><br>

            <label>&nbsp;</label>
            <input type="submit" value="Create User"><br>
        </form>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> New Light Community Center</p>
    </footer>
</body>
</html>