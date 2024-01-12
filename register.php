<?php
include 'admin/db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["submit"])) {
    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $phonenumber = $_POST["phonenumber"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    // parbaud vai ir tads epasts db
    $checkEmailSql = "SELECT * FROM customers WHERE Email = ?";
    $checkEmailStmt = $conn->prepare($checkEmailSql);
    $checkEmailStmt->bind_param("s", $email);
    $checkEmailStmt->execute();
    $checkEmailResult = $checkEmailStmt->get_result();

    // parbaud vai ir tads nr db
    $checkPhoneSql = "SELECT * FROM customers WHERE PhoneNumber = ?";
    $checkPhoneStmt = $conn->prepare($checkPhoneSql);
    $checkPhoneStmt->bind_param("s", $phonenumber);
    $checkPhoneStmt->execute();
    $checkPhoneResult = $checkPhoneStmt->get_result();

    if ($checkEmailResult->num_rows > 0) {
        echo '<script>alert("Tāds ēpasts jau ir reģistrēts!"); window.location.href="registration.html";</script>';
    } elseif ($checkPhoneResult->num_rows > 0) {
        echo '<script>alert("Tāds numurs jau ir reģistrēts!"); window.location.href="registration.html";</script>';
    } else {
        // ja nav tad pievieno db
        $checkEmailStmt->close();
        $checkPhoneStmt->close();

        $insertSql = "INSERT INTO customers (Name, Lastname, Email, PhoneNumber, password) VALUES (?, ?, ?, ?, ?)";
        $insertStmt = $conn->prepare($insertSql);
        $insertStmt->bind_param("sssss", $name, $lastname, $email, $phonenumber, $password);

        if ($insertStmt->execute()) {
            echo '<script>alert("Registration successful!"); window.location.href="login.php";</script>';
        } else {
            echo '<script>alert("Error: ' . $insertStmt->error . '"); window.location.href="registration.php";</script>';
        }

        $insertStmt->close();
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin/style.css">
    <title>Registration Page</title>
</head>
<body class="login">
    <div class="register-box">
        <h2>Register</h2>
        <div class="input-field-register">
                <form id="registrationForm" action="register.php" method="post">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required><br>

                    <label for="lastname">Last Name:</label>
                    <input type="text" id="lastname" name="lastname" required><br>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required><br>

                    <label for="phonenumber">Phone Number:</label>
                    <input type="tel" id="phonenumber" name="phonenumber" required><br>

                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required><br>

                    <!-- <button type="submit" name="submit">Register</button> -->
                    
        </div>
        <button type="submit" name="submit">Register</button>
        <a href="login.php" style="text-decoration: underline;">Ir profils?</a>
        </form>
    </div>  
</body>
</html>