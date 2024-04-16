
<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email_username = $_POST['email_username'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        // Database connection settings
        $servername = "localhost"; // Change this to your database server name
        $username = "root"; // Change this to your database username
        $password = ""; // Change this to your database password
        $database = "Aroura_db"; // Change this to your database name

        // Create connection
        $conn = new mysqli($servername, $username, $password, $database);


        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Check if the username already exists
        $sql_check_username = "SELECT * FROM users WHERE email = '$email_username' OR username = '$email_username'";
        $result_check_username = $conn->query($sql_check_username);
        if ($result_check_username->num_rows > 0) {
            echo "Username already exists";
            exit();
        }
        $password = $_POST['password'];
        // SQL query to insert the user into the database
        $sql = "INSERT INTO users (email,username, password) VALUES ('$email_username','$email_username', '$password')";

        // Execute the query
        if ($conn->query($sql) === TRUE) {
            echo "User registered successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        

        // Close connection
        $conn->close();
    }
?>
