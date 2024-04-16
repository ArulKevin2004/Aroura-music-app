<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email_username = $_POST['email_username'];
        $password = $_POST['password'];


        $servername = "localhost"; 
        $username = "root";
        $password = "";
        $database = "Aroura_db";

        $conn = new mysqli($servername, $username, $password, $database);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare SQL query to fetch user from database
        $sql = "SELECT * FROM users WHERE email = '$email_username' OR username = '$email_username'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // User found, check password
            $row = $result->fetch_assoc();
            $password = $_POST['password'];
            $uid = $row['id'];
            if ($row['password'] == $password) {
                $conn->query("INSERT INTO curr_login (uid) VALUES ('$uid')");
                // Password correct, redirect user to dashboard or desired page
                header("Location: main.html"); // Change this to the page you want to redirect to after login
                exit();
            } else {
                // Password incorrect
                echo "Incorrect password";
            }
        } else {
            // User not found
            echo "User not found";
        }

        // Close connection
        $conn->close();
    }
?>
