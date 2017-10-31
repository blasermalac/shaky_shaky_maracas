<!DOCTYPE html>

<html lang="en">

<head>
    <link rel="stylesheet" href="css/style.css"/>

    <meta charset="utf-8">
    
    <title>Sign Up</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
</head>

    

<body>
<?php
include '../resources/navigation.php'
?>

    <div class="main-content container">

    <h1 class="title">Sign Up</h1>

    <p>If you do not have an account, you can sign up for one here. If you are already signed up, you can go to the login page using the link at the top of the page.</p>
    
    </div>

    <form class="form-horizontal">
   <fieldset>
     <legend style="color:white;">Sign Up</legend>
     <div class="form-group">
       <label for="inputEmail" class="col-lg-2 control-label">Email</label>
       <div class="col-lg-10">
         <input type="text" class="form-control" id="inputEmail" placeholder="Email">
       </div>
     </div>
     <div class="form-group">
       <label for="inputPassword" class="col-lg-2 control-label">Password</label>
       <div class="col-lg-10">
         <input type="password" class="form-control" id="inputPassword" placeholder="Password">
         <div class="checkbox">
           <label>
             <input type="checkbox"> You consent to the Terms & Condition
           </label>
         </div>
       </div>
     </div>
     
     <div class="form-group">
       <div class="col-sm-6 col-md-offset-2">
         <button type="reset" class="btn btn-default">Cancel</button>
         <button type="submit" class="btn btn-primary">Submit</button>
       </div>
     </div>
   </fieldset>
 </form>
 
  </body>
  </html>