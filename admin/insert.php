<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ievieto istabu. </title>
</head>
<body>
        <div class="header">
            <a class="button" href="home.admin.php">Back</a>
                <a class="button" href="insert.php">Ievietot</a>
            <button class="button">Login</button>
        </div>
        <div class="main">
            <div class="boxes-insert">
                <div class="boxes-insert-half">
                    <p style="font-size: 20px;">Majoklja jautajums</p>
                </div>
                <div class="boxes-insert-half-2">
                    <div class="boxes-insert-half-half">
                        <label>Room ID:</label>
                        <label>Room Name:</label>
                        <label>Room Price:</label>
                        <label>Room Description:</label>
                        <label style="padding-top: 8px;">Photo: </label>
                        <label style="padding-top: 4px;">Availability Status:</label>
                    </div>
                    <div class="boxes-insert-half-half-2">
                        <form method="post" action="index.admin.php">
                            <input type="text" class="input-field" name="roomID"  require><br>
                            <input type="text" class="input-field" name="roomName" require><br>
                            <input type="text" class="input-field" name="roomPrice"  require><br>
                            <input type="text" class="input-field" name="roomDescription" maxlength="100" require><br>
                            <input type="text" class="input-field" name="photo" require><br>
                            <input type="text" class="input-field" name="roomAvailabilityStatus" min="0" max="1" require><br>
                            <input style="margin-top: 10px;" class="button"type="submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>