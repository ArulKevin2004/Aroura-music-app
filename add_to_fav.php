<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: black;
        }
    </style>
</head>
<body>  
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Aroura_db";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $fav_song = $_POST["fav_btn"];

    $asql = "SELECT uid FROM curr_login ORDER BY activity_time DESC LIMIT 1";
    $r = $conn->query($asql);
    $row = $r->fetch_assoc();

    $user_id = $row['uid'];
    
    // Check if the user_id and song_name combination already exists in the favorites table
    $check_sql = "SELECT * FROM favorites WHERE user_id = '$user_id' AND song_name = '$fav_song'";
    $check_result = $conn->query($check_sql);

    if ($check_result->num_rows == 0) {
        // If the combination does not exist, insert the new record
        $sql = "INSERT INTO favorites (user_id, song_name) VALUES ('$user_id', '$fav_song')";
        
        if ($conn->query($sql)) {
            // Show success message in an alert box
            echo "<script>alert('FAV ADDED');</script>";
            // header("Location: fav.php");
        } else {
            // Show error message in an alert box
            echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "');</script>";
        }
    } else {
        // If the combination already exists, show message in an alert box
        echo "<script>alert('This song is already in your favorites.');</script>";
    }
}
?>
