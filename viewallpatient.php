<?php
include 'db_connection.php';

$query = "SELECT p.firstname, p.lastname, p.email, a.date, a.time, a.reason, a.consultationtype, a.status, a.notes 
          FROM patient p 
          LEFT JOIN appointment a ON p.patientid = a.patientid";

$statement = $bind->query($query);

// Check for query errors
if(!$statement) {
    die("Query failed: " . $bind->error);
}

$results = [];
while ($row = $statement->fetch_assoc()) {
    $results[] = $row;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Appointments</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px 12px;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>

<h2>All Patients and Their Appointments</h2>

<table>
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Date</th>
        <th>Time</th>
        <th>Reason</th>
        <th>Type</th>
        <th>Status</th>
        <th>Notes</th>
    </tr>
    <?php foreach ($results as $row): ?>
        <tr>
            <td><?= $row['firstname'] ?></td>
            <td><?= $row['lastname'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['date'] ?></td>
            <td><?= $row['time'] ?></td>
            <td><?= $row['reason'] ?></td>
            <td><?= $row['consultationtype'] ?></td>
            <td><?= $row['status'] ?></td>
            <td><?= $row['notes'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
