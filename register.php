<html>
    <head>
        <title>My first PHP Website</title>
    </head>
    <body>
        <h2>Registration Page</h2>
        <a href="firsttesttest.php">Click here to go back<br/><br/>
        <form action="register.php" method="POST">
           Enter FirstName: <input type="text" name="firstname" required="required" /> <br/>
	   Enter LastName: <input type="text" name="firstname" /> <br/>
           Enter password: <input type="password" name="password" required="required" /> <br/>
   	   Re-enter password: <input type="text" name="password" required="required" /> <br/>
           <input type="submit" value="Register"/>
        </form>
    </body>
</html>