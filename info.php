<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin/style.css">
    <title>Info</title>
</head>
<body>
    <div class="header">
        <a href="http://localhost/airbnb2/home.php" class="button-home">Home</a>
        <button class="button">Login</button>
    </div>
    <div class="info-main">
    <?php
        include 'admin/db.php';

        if (isset($_GET['room_id'])) {
            $room_id = $_GET['room_id'];

            $sql = "SELECT RoomID, Name, Description, Price, AvailabilityStatus, photo FROM rooms WHERE RoomID = $room_id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();

                echo '<div class="info-box">';

                echo '<div class="info-box-half">';

                echo '<div class="info-box-half-half2">';
                echo '<img src="' . $row["photo"] . '" alt="house/room" style="max-width: 100%; width: 100%px; height: 100%; border-radius: 2px;">';
                echo '</div>';

                echo '<div class="info-box-half-half2">';
                
                echo '</div>';

                echo '</div>';

                echo '<div class="info-box-half-2">';

                echo '<div class="info-box-half-half2">';
                
                echo '<h2>' . $row["Name"] . '</h2>';
                echo '<p>Description: ' . $row["Description"] . '</p>';
                echo '<p>Price: ' . $row["Price"] . '</p>';
                echo '<p>Availability Status: ' . $row["AvailabilityStatus"] . '</p>';
                echo '</div>';

                echo '<div class="info-box-half-half2">';
                echo '<a href="reservation_form.php" class="button">Reservation</a>';
                echo '</div>';

                echo '</div>';

                echo '</div>';
            } else {
                echo "Room not found.";
            }
            } else {
                echo "Invalid room ID.";
            }

        $conn->close();
        ?>
    </div>
</body>
</html>
<?php

    