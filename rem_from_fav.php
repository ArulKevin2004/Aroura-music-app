<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Aroura_db";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $rem_song = $_POST["rem_btn"];

    $asql = "SELECT uid FROM curr_login ORDER BY activity_time DESC LIMIT 1";
    $r = $conn->query($asql);
    $row = $r->fetch_assoc();

    $user_id = $row['uid'];

    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare("DELETE FROM favorites WHERE user_id = ? AND song_name = ?");
    $stmt->bind_param("ss", $user_id, $rem_song);

    if ($stmt->execute()) {
        echo "Song removed from favorites successfully";
    } else {
        echo "Error removing song from favorites: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>
