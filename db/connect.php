    <?php
    $servername = "localhost";
    $database = "test";
    $username = "root";
    $password = "";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
    }
     
    echo "Connected successfully";
     
    $sql = "INSERT INTO offer (user_name, user_email ,  user_phone,  user_request) VALUES ('Test', 'Test@test', '13231', 'asdsadsadasd')";
    if (mysqli_query($conn, $sql)) {
          echo "New record created successfully";
    } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>
	
	