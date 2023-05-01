
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    
    <link rel="stylesheet" href="styles.css">
 
</head>
<body>
    <div class="complain-form-wrapper">
        <form action="register.php" method="post">
            <h1> Register </h1>
            <input type="text" placeholder="Enter your Username" name="username" >
            <input type="password" placeholder="Enter your Password" name="password" >
           
            <input type="submit" name="submit" value="Register">
            <h3>Already have an account? <a href="index.php">Sign In</a></h3>
           
        </form>
    </div>
</body>
</html>