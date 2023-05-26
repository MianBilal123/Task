<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        $servername = $_POST["servername"];
  
        $username='root';
        $dbname = $_POST["dbname"];
        $tablename = $_POST["taeblname"];
        $password="";
        
        $conn = new mysqli($servername, $username, $password,$dbname, 3306 );

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = True;
        if ($sql === TRUE) {
            echo "Database created successfully<br>";

           
            $conn->select_db($dbname);

            $sql = "CREATE TABLE $tablename (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(30) NOT NULL,
                email VARCHAR(50) NOT NULL
            )";

            if ($conn->query($sql) === TRUE) {
                echo "Table created successfully";
            } else {
                echo "Error creating table: " . $conn->error;
            }
        } else {
            echo "Error creating database: " . $conn->error;
        }

      
        $conn->close();
    }
    ?>
<!DOCTYPE html>
<html>
<head>
    <title>Create Database and Tables</title>
</head>
<body>
    <h1>Create Database and Tables</h1>

    

    <form method="post" action="creat_Tabel.php">
        <label for="servername">Server Name:</label>
        <input type="text" name="servername" required><br><br>

        <label for="dbname">Database Name:</label>
        <input type="text" name="dbname" required><br><br>

        <label for="tablename">Table Name:</label>
        <input type="text" name="taeblname" required><br><br>

        <input type="submit" value="Create">
    </form>
</body>
</html>
