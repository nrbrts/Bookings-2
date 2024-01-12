<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin/style.css">
    <title>NrBnb</title>
</head>
<body>
    <div class="header">
        <a href="http://localhost/airbnb2/home.php" class="button-home">Home</a>
        <a href="login.php" class="button">Login</a>
    </div>
    <div class="main">
    <?php
        include 'admin/db.php';

        $sql = "SELECT RoomID, Name, Description, Price, AvailabilityStatus, photo FROM rooms";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="boxes">';
                    echo '<div class="boxes-half">';

                    echo '<img src="' . $row["photo"] . '" alt="house/room" style="max-width: 100%;width: 350px;height: 220px; border-radius: 2px;"">';

                    echo '<p style="font-size: 20px;" >'  .  ($row["Name"]) .  '<br></p>';
                    echo '<p style="font-size: 14px;" > Description: ' . ($row["Description"]) . '<br></p>';
                    echo '<p style="font-size: 14px;" > Price: ' . ($row["Price"]) . '<br></p>';
                    echo '<p style="font-size: 14px;" >Availability Status: ' . ($row["AvailabilityStatus"]) . '<br></p>';
                    
                    echo '</div>';

                    echo '<div class="boxes-half-2">';
                    echo '<a href="info.php?room_id=' . $row["RoomID"] . '" class="button-delete">Info</a>';
                    echo '<input type="hidden" name="room_id" value="' . $row["RoomID"] . '">';
                    echo '</form>';

                    echo '</div>';
                    echo '</div><br>';
            }
        } else {
            echo "0 results found.";
        }

        $conn->close();
        ?>
    </div>
</body>
</html>