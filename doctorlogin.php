<?php
// Start the session
session_start();

// Include database connection
include('db_connection.php');

$message = "";

// When the form is submitted
if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password']; // Consider hashing the password for security

    // Check the credentials in the doctor table
    $query = "SELECT * FROM doctor WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($bind, $query);
    
    if(mysqli_num_rows($result) == 1) {
        // Login successful
        $_SESSION['doctor_email'] = $email;
        $_SESSION['doctor_password'] = $password;
        header('Location: doctorview.php'); // Redirect to the doctor's dashboard
        exit;
    } else {
        $message = "Invalid email or password!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="doctorlogin.css">
    <link rel="icon" href="pics/logo.png">
    <title>Health Care System</title>
</head>
<body>
    <main>
           <form method="post" action="" class="form">
                <p class="title">Log-in</p>
                <p class="message">Log-in as a Doctor. </p>
                <label>
                    <input class="input" type="email" name="email" placeholder="" required="">
                    <span>Email</span>
                </label> 
                    
                <label>
                    <input class="input" type="password" name="password" placeholder="" required="">
                    <span>Password</span>
                </label>
                <label>
                    <input class="input" type="password" placeholder="" required="">
                    <span>Confirm password</span>
                </label>
                <input type="submit" class="submit" name="login" value="Login">
            </form>
    </main>
</body>
</html>