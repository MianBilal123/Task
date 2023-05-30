<?php
if (isset($_POST['create_table'])) {
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "ecommerce";

  $con=mysqli_connect($servername, $username, $password, $dbname);

  if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
  }


  $sql = "CREATE TABLE customers (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";

  if ($con->query($sql) === true) {
    echo "Table created successfully";
  } else {
    echo "Error creating table: " ;
  }


  $con->close();
}
?>


<!DOCTYPE html>

<html>
<head>
  <title>Create Table</title>
  
</head>
<body>

  <form action="sqlTabel.php" method="post">
    <div>
    <label for="db_name">db_name</label>
    <input type="text"  placeholder="Enter_DB_Name">
    </div>
    <div>
    <label for="tabel_name">Tabel_name</label>
    <input type="text"  placeholder="Enter_Tabel_Name">
    </div>
    <div>
    <input type="submit" name="create_table" value="Create Table">
    </div>
  </form>
</body>
</html>
