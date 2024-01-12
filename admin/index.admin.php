<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $roomID = $_POST['roomID'];
    $roomName = $_POST['roomName'];
    $roomDescription = $_POST['roomDescription'];
    $roomPrice = $_POST['roomPrice'];
    $roomAvailabilityStatus = $_POST['roomAvailabilityStatus'];
    $photo = $_POST['photo'];

    $sql = "INSERT INTO Rooms (RoomID, Name, Description, Price, AvailabilityStatus, photo)
    VALUES ('$roomID', '$roomName', '$roomDescription', '$roomPrice', '$roomAvailabilityStatus', '$photo')";

    if ($conn->query($sql) === TRUE) {
      echo "<script type='text/javascript'>alert('New record created successfully'); window.location.href='http://localhost/airbnb2/admin/home.admin.php';</script>";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
