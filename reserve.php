<?php
session_start();

include 'admin/db.php'; 

if (!isset($_SESSION["email"])) {
    header("Location: login.html");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["reserve"])) {
    $room_id = $_POST["room_id"];
    $start_date = $_POST["start_date"];
    $end_date = $_POST["end_date"];
    $customer_id = $_SESSION["customer_id"]; 


    $sql = "INSERT INTO booking (CustomerID, RoomID, StartDate, EndDate) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iiss", $customer_id, $room_id, $start_date, $end_date);

    if ($stmt->execute()) {
        echo "Reservation successful!";
    } else {
        echo "Error in reservation: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
