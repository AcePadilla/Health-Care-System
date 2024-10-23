

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="pics/logo.png">
    <link rel="stylesheet" href="contact.css">
    <title>Health Care System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <script src="https://kit.fontawesome.com/aed89df169.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="landing">
        <nav>
            <img src="pics/logo.png">
            <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="#">Find a Doctor</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="#">Appointment</a></li>
                <li><a href="contact.html">Contacts</a></li>
            </ul>
            <button class="Btn">
  
                <div class="sign"><svg viewBox="0 0 512 512"><path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path></svg></div>
                
                <div class="text">Logout</div>
              </button>
        </nav>
        <h1>Contact Us</h1>
    </div>

    <main>
        <div class="contact-form">
            <h2>Contact Information</h2>
            <form action="contact.php" method="post" enctype="multipart/form-data">
                <label for="full_name">Full Name:</label>
                <input type="text" id="full_name" name="fullname" required>
    
                <label for="contact_number">Contact Number:</label>
                <input type="tel" id="contact_number" name="contactnumber" required>
    
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="text">Your Message:</label>
                <input type="text" id="message" name="message" required>
    
                <button class="btn">
                    Submit
                </button>
            </form>
        </div>
    </main>
    <?php
// Connect to your MySQL database (replace with your database credentials)

// Connect to your MySQL database (replace with your database credentials)
include('db_connection.php');

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form with default values if not set
    $fullname = isset($_POST["fullname"]) ? $_POST["fullname"] : "";
    $contactnumber = isset($_POST["contactnumber"]) ? $_POST["contactnumber"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $message = isset($_POST["message"]) ? $_POST["message"] : "";

    // SQL query to insert data into the "query" table
    $sql = "INSERT INTO query (fullname, contactnumber, email, message) VALUES (?, ?, ?, ?)";
    $stmt = $bind->prepare($sql);
    $stmt->bind_param("ssss", $fullname, $contactnumber, $email, $message);

    if ($stmt->execute()) {
        echo "Query submitted successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>

       
    <footer>
        <p>©HealthCareSystem2023</p>
    </footer>
</body>
</html>