<?php
include 'db.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $room_id = $_POST["room_id"];

    $delete_sql = "DELETE FROM rooms WHERE RoomID = '$room_id'";
    
    if ($conn->query($delete_sql) === TRUE) {
        echo '<script>';
        echo 'alert("Veiksmīgi izdzēsi!");';
        echo 'window.location.href = "home.admin.php";'; 
        echo '</script>';
    } else {
        echo '<script>';
        echo 'alert("Kaut kas nogāja greizi!!! ' . $conn->error . '");';
        echo 'window.history.back();'; 
        echo '</script>';
    }
}

$conn->close();
?>
