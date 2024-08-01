<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timer Example with Start and Stop Time</title>
    <script>
        let timer;
        let elapsedTime = 0;

        function startTimer() {
            // Get current time as start time
            const startTime = new Date();
            document.getElementById('startTime').value = startTime.toISOString(); // Store as ISO string
            timer = setInterval(() => {
                elapsedTime++;
                document.getElementById('elapsedTime').innerText = elapsedTime + ' seconds';
            }, 1000);
        }

        function stopTimer() {
            clearInterval(timer);
            // Get current time as stop time
            const stopTime = new Date();
            document.getElementById('stopTime').value = stopTime.toISOString(); // Store as ISO string
            document.getElementById('hiddenElapsedTime').value = elapsedTime; // Update hidden input
            document.getElementById('timerForm').submit(); // Submit the form
        }
    </script>
</head>

<body>
    <?php
    date_default_timezone_set('Asia/Karachi'); // Set Karachi timezone

    // Example usage
    echo "Current time in Karachi: " . date('Y-m-d H:i:s');
    ?>

    <h1>Timer Example</h1>
    <div id="elapsedTime">0 seconds</div>

    <form id="timerForm" action="save_time.php" method="POST">
        <input type="hidden" id="hiddenElapsedTime" name="elapsed_time" value="0">
        <input type="datetime-local" id="startTime" name="start_time" value="">
        <input type="hidden" id="stopTime" name="stop_time" value="">

        <button type="button" onclick="startTimer()">Start Timer</button>
        <button type="button" onclick="stopTimer()">Stop Timer</button>
    </form>

    <h2>Records</h2>
    <div id="records">
        <?php include 'fetch_records.php'; ?>
    </div>
</body>

</html>