<?php
    if(isset($_GET['operation'])){
       // echo $_GET['operation'];
        $x=$_GET['num1'];
        $y=$_GET['num2'];
        $op=$_GET['operation'];

        switch($op){
            case 'Add':
                $result = $x + $y;
               // echo $result;
                break;
            case 'Subtract':
                $result = $x - $y;
               // echo $result;
                break;
            case 'Mult':
                $result = $x * $y;
               // echo $result;
                break;
            case 'Dvd':
                $result = $x / $y;
                //echo $result;
                break;
        }
    }
    ?>
<!doctype html>
<html lang="en">
<head>
  <title>Title</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>
  <form action="cal.php" method="get">
    <!-- Number 1 input -->
    <div>
        <label for="num1">Number 1</label>
        <input type="number" name="num1" id="num1">
    </div>

    <!-- Number 2 input -->
    <div>
        <label for="num2">Number 2</label>
        <input type="number" name="num2" id="num2">
    </div>
   
    <!-- result -->
    <div>
        <label for="result">result</label>
        <input type="number" id="result" value="<?php echo $result; ?>">
    </div>
    
    <!-- Operation buttons -->
    <div>
        <input type="submit" name="operation" value="Add">
        <input type="submit" name="operation" value="Subtract">
        <input type="submit" name="operation" value="Mult">
        <input type="submit" name="operation" value="Dvd"> 
    </div>

    
   

  </form>
</body>
</html>
