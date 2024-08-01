<?php
include 'config.php';
// Get data from POST request
if (isset($_POST['elapsed_time']) && isset($_POST['start_time']) && isset($_POST['stop_time'])) {
    $elapsed_time = (int)$_POST['elapsed_time'];
    $start_time = $_POST['start_time'];
    $stop_time = $_POST['stop_time'];

    // Insert data into the database
    $sql = "INSERT INTO timer_records (elapsed_time, start_time, stop_time) VALUES ('$elapsed_time', '$start_time', '$stop_time')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
