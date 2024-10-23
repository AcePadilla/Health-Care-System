
<?php
// Normally, you'd connect to your database here and fetch necessary data

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .admin-panel {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        .admin-panel button {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 15px 30px;
            font-size: 16px;
            border-radius: 5px;
            margin: 10px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .admin-panel button:hover {
            background-color: #2980b9;
        }
        .modal {
            display: none;
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            overflow: auto;
            z-index: 1;
        }
        .modal-content {
            background-color: #fff;
            margin: 10% auto;
            padding: 20px;
            width: 70%;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="admin-panel">
        <button onclick="window.location.href='/mnt/data/adddoctor.php'">Add Doctor</button>
        <a href="viewallpatient.php">
    <button>View Patient Appointments</button>
</a>
    </div>

    <div id="modal" class="modal">
        <div class="modal-content">
            <h2>Patient Appointments</h2>
            <?php
            // Here, you'd loop through your database results and display them
            // For demonstration, I'll just add static content
            echo "<p>List of patient appointments for each doctor would be displayed here.</p>";
            ?>
            <button onclick="closeModal()">Close</button>
        </div>
    </div>

    <script>
        function openModal() {
            document.getElementById('modal').style.display = 'block';
        }
        function closeModal() {
            document.getElementById('modal').style.display = 'none';
        }
    </script>
</body>
</html>
