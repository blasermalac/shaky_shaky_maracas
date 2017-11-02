<!DOCTYPE html>

<html lang="en">

<head>
    <link rel="stylesheet" href="css/style.css"/>

    <meta charset="utf-8">
    
    <title>Products</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    
</head>

<body>
<?php
include '../resources/navigation.php'
?>


    <div class="main-content container">

    <h1 class="title">Our Products</h1>

    <p>Shaky Shaky Maracas has a variety of maraca colors to choose from. This is 
    something we are very proud of here at Shaky Shaky Maracas. Customer service and client
    satisfaction are our most important values. We give you the best products for the best prices.</p>
    
    <p> Each maraca pair sells for &dollar;10.00 and shipping and handling is free.</p>
    
   </div>
    
    <div class="table-responsive">
     <table id="products" class="table table-bordered">
        <thead>
            <tr>
                <th class="center-text">Colors</th>
                <th class="center-text">Multi-Color</th>
                <th class="center-text">No color</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Pink</td>
                <td>This will include all of the colors Shaky Shaky has to offer.</td>
                <td>Just a plain old maraca.</td>
            </tr>
            <tr>
                <td>Blue</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Purple</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Red</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Yellow</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Green</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Orange</td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
   </table> 
   </div>  

   <h3>Want To Order?</h3>

   <form>
    <div class="form-group">
        <label for="selectColor">Color: </label>
        <select id="selectColor" class="form-control">
          <option>Pink</option>
          <option>Blue</option>
          <option>Purple</option>
          <option>Red</option>
          <option>Yellow</option>
          <option>Green</option>
          <option>Orange</option>
          <option>Multi-Color</option>
          <option>Plain</option>
        </select>
      </div>

      <div class="form-group">
        <label for="selectPairs">How many (pairs): </label>
        <select id="selectPairs" class="form-control" onchange="checkCustom()">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
          <option>9</option>
          <option>10</option>
          <option value='custom'>Custom</option>
        </select>
      </div>

    <div class="form-group">
      <label for="email">Email (We will email you with confirmation of order): </label> 
      <input type="email" class="form-control" id="email"/>
    </div>

    <button class="btn btn-primary btn-danger" onclick="alertInfo()">Submit Order</button>
  </form>

    <div class="alert alert-success alert-dismissable" id="alert" style="display:none">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Success!</strong> You have placed your order, you will be getting a confirmation email shortly.
    </div>
   
<?php
include '../resources/footer.php'
?>  

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
    function checkCustom() {
      var select = document.getElementById("selectPairs");
      var selectedValue = select.options[select.selectedIndex].value;

      if(selectedValue == "custom") {
        var numCopies = prompt("How many copies would you like to order?");
        if(numCopies != 0)
          select.options[select.selectedIndex].text = "Custom: " + numCopies;
      }
    }

    function alertInfo() {
        var alert = document.getElementById("alert");
        alert.style.display = "block";
    }
  </script>

</body>

</html>