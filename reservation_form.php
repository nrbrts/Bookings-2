<?php
session_start();

if (!isset($_SESSION["email"])) {
    header("Location: login.php");
    exit;
}

$userEmail = $_SESSION["email"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body class="reservation">
    <h2>Reservation Form</h2>
    <div class="reservation-box">
        <div class="reservation-form-box">
            <form action="reserve.php" method="post">
                <input type="hidden" name="room_id" value="123">
                
                <label for="start_date">Start Date:</label>
                <input type="date" id="start_date" name="start_date" required><br>

                <label for="end_date">End Date:</label>
                <input type="date" id="end_date" name="end_date" required><br>

                <button type="submit" name="reserve">Reserve</button>
            </form>
        </div>
    </div>
</body>
</html>
