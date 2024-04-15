<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "Aroura_db";

        $conn = new mysqli($servername, $username, $password, $dbname);

        print_r($_POST)
        // Get the song name from the AJAX request
        // $song_name = $_POST['songName'];

        // Insert the song name into the favorites table
        // $sql = "INSERT INTO favorites(user_id, song_name) VALUES (?, ?)";
        // $stmt = $pdo->prepare($sql);
        // $stmt->execute([$song_name, $user_id]);

        // // Send response back to JavaScript
        // http_response_code(200);
    }
?>
