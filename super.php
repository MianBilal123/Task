<html>
<body>

<form action="super.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>
<?php echo"<h2>YOUR OUT PUT <br></h2>";?>
welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>


</body>
</html>