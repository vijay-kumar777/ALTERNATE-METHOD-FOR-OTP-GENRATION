    <?php
    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
        $host = "localhost"; // Database host
        $username = "root"; // Database username
        $password = ""; // No password for root
        $dbName = "blog"; // Database name

        $con = mysqli_connect($host, $username, $password, $dbName);
        if (!$con) {
            die("Database connection failed: " . mysqli_connect_error());
        }

        $username = mysqli_real_escape_string($con, $_POST["username"]);
        $password = $_POST["password"];

        // Assuming your table is named 'user'
        $query = "SELECT * FROM user WHERE name = '$username' AND pw = '$password'";
        $result = mysqli_query($con, $query);
        if ($result) {
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                // User found
                // You can set a session indicating successful login
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                
                // Redirect the user to a dashboard or welcome page
                header("Location: http://192.168.137.101/OTP%20project/scammm.html"); // Replace 'dashboard.php' with your desired page
                
                // Make sure to exit after redirection
                exit();
            } else {
                // User not found
                echo "Invalid username or password";
            }
        } 
        else {
            // Query failed, handle error
            echo "Query failed: " . mysqli_error($con);
        }

    ?>