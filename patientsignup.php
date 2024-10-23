<?php
session_start();

?><?php
// Assuming you have a connection to the database setup in this file
include 'db_connection.php';

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $dateofbirth = $_POST['dateofbirth'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    // Calculate age based on date of birth
    $birthdate = new DateTime($dateofbirth);
    $today = new DateTime('today');
    $age = $birthdate->diff($today)->y;

    $sql = "INSERT INTO patient (firstname, lastname, email, password, dateofbirth, age, gender, address, phone) VALUES ('$firstname', '$lastname', '$email', '$password', '$dateofbirth', $age, '$gender', '$address', '$phone')";


    if ($bind->query($sql) === TRUE) {
    // Get the patientid of the last inserted record
    $patientid = mysqli_insert_id($bind);
    // Store the patientid in the session
    $_SESSION['patientid'] = $patientid;
        $message = "Sign up successful!";
        header('Location: appointment.php');
    } else {
        $message = "Error: " . $bind->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css">
    <link rel="icon" href="pics/logo.png">
    <title>Health Care System</title>
</head>

<style>
.modal {
            display: none;
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 9999;
        }
        .modal-content {
    background-color: #fff;
    margin: 10% auto;
    padding: 20px;
    width: 50%;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Drop shadow */
    border-radius: 10px; /* Border radius */
}

        </style>
<body>
    <main>
            <form action="" class="form" method="post" id="signupForm">
                <p class="title">Register</p>
                <p class="message">Signup and get full access to our website </p>
                <div class="flex">

                    <label for="firstname">
                        <input class="input" placeholder="" type="text" name="firstname" required>
                        <span>Firstname</span>
                    </label>
            
                    <label>
                        <input class="input" placeholder="" type="text"  name="lastname" required>
                        <span>Lastname</span>
                    </label>
                </div>  
                        
                <label for="email">
                    <input class="input" type="email" placeholder=""  name="email" required>
                    <span>Email</span>
                </label> 
                    
                <label for="password">
                    <input class="input" type="password" placeholder=""  name="password" required>
                    <span>Password</span>
                </label>

                <label for="address">
                    <input class="input" type="text" placeholder=""  name="address" required>
                    <span>Address</span>
                </label>

                <label for="phone">
                    <input class="input" type="tel" placeholder="" name="phone" required>
                    <span>Phone number</span>
                </label>

                <label for="dateofbirth">Date of Birth:</label>
                <input type="date" name="dateofbirth" required>
                <label for="gender">Gender:</label>
                    <select name="gender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>

                <button class="submit" type="button" onclick="showModal()">Sign-up</button>
               
            </form>
            <p><?php echo $message; ?></p>

            <div id="confirmModal" class="modal">
                <div class="modal-content">
                    <h3>Are you sure with your data?</h3>
                    
                    <div id="displayData"></div>
                    <button onclick="submitForm()">Yes</button>
                    <button onclick="hideModal()">No</button>
                </div>
            </div>
        
            <script>
                function showModal() {
                    // Get form data and display in modal
                    let data = "";
                    const form = document.getElementById("signupForm");
                    for (let i = 0; i < form.elements.length; i++) {
                        if (form.elements[i].type !== "submit") {
                            data += form.elements[i].name + ": " + form.elements[i].value + "<br>";
                        }
                    }
                    document.getElementById("displayData").innerHTML = data;
        
                    // Show modal
                    document.getElementById("confirmModal").style.display = "block";
                }
        
                function hideModal() {
                    document.getElementById("confirmModal").style.display = "none";
                }
        
                function submitForm() {
                    document.getElementById("signupForm").submit();
                
                }
                </script>
            
    </main>
</body>
</html>