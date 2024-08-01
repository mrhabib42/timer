<?php
include 'config.php';
// Fetch records from the database
$sql = "SELECT elapsed_time, start_time, stop_time FROM timer_records";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table border='1'><tr><th>Elapsed Time (seconds)</th><th>Start Time</th><th>Stop Time</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["elapsed_time"] . "</td><td>" . $row["start_time"] . "</td><td>" . $row["stop_time"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No records found.";
}

// Close connection
$conn->close();
