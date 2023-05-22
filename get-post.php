

<!doctype html>
<html lang="en">

<head>
  <title>Get|Post</title>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
<?php
if ($_SERVER['REQUEST_METHOD'] =='POST'){
$email=$_POST['email'];
$pass=$_POST['pass'];

 echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
 <strong>sucess</strong> Your email' .$email. 'and password'. $pass. 'has been submitted sucessfully.
 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}


?>

  <div class="container">
    <div class="row">
        <div class="column-md-12">
        <form action="/php class/get_post.php" method="post">
  <div class="mb-3">
    <label for="email1" name="email">Email address</label>
    <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">we will nerver see yoyr email with any one else</small>
    
  </div>
  <div class="mb-3">
    <label for="Pass" >Password</label>
    <input type="password" class="form-control" id="pass" name="pass">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
        </div>
    </div>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>