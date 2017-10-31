<!DOCTYPE html>

<html lang="en">

<head>
    <link rel="stylesheet" href="css/style.css"/>

    <meta charset="utf-8">
    
    <title>Login</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    
</head>

<body>

<?php
include '../resources/navigation.php'
?>


    
    <div class="main-content container">

    <h1 class="title">Login</h1>

    <p>If you have already signed up with us, you can login in here with your email and password. 
    If you have not signed up with us you can go to our Sign Up link on the top of this webpage.</p>
    
    </div>

    
<div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputEmail" placeholder="Email">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      </div>
      <div class="col-lg-10">
        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
        <div class="checkbox">
        </div>
        <div class="form-group">
        <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
       </div>
      </div>
    </div>

<footer class="footer">
    Copyright 2017 by Karson and Drew
</footer>

</body>
</html>