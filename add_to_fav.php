<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
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
        
        $sql = "INSERT INTO favorites (user_id,song_name) VALUES ('$user_id','$fav_song')";

        if ($conn->query($sql)){
            echo "FAV ADDED";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
?>
