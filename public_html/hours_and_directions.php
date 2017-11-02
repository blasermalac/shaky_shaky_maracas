<!DOCTYPE html>

<html lang="en">

<head>
    <link rel="stylesheet" href="css/style.css"/>

    <meta charset="utf-8">
    
    <title>Hours and Directions</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    
</head>

<body>

<?php
include '../resources/navigation.php'
?>

    <div class="main-content container">

    <h1 class="title">Store Hours and Locations</h1>

    <p>We have quite a few stores throughout 3 different states in the United States. Most of them hold to the store hours listed below, but always check with your local store before you show up, because they could always change it.

   <h1 style="text-align: center">Store Locations</h1>
   <div class="table-responsive">
     <table id="locations" class="table table-bordered">
        <thead>
            <tr>
                <th class="center-text">State</th>
                <th class="center-text">Cities</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Iowa</td>
                <td>Indianola, Des Moines, Ames, Davenport</td>
            </tr>
            <tr>
                <td>Nebraska</td>
                <td>Omaha, Lincoln</td>
            </tr>
            <tr>
                <td>Florida</td>
                <td>Orlando, Miami, Tampa, Fort Lauderdale</td>
            </tr>
            <tr>
                <td>Online</td>
                <td>Wherever you want to be</td>
            </tr>
        </tbody>
    </table>
    
    <h1 style="text-align: center">Store Hours</h1>
     
     <table id="hours" class="table table-bordered">
          <thead>
              <tr>
                  <th class="center-text">Day</th>
                  <th class="center-text">Open</th>
                  <th class="center-text">Close</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <td>Monday</td>
                  <td>8:30 AM</td>
                  <td>9:30 PM</td>
              </tr>
              <tr>
                  <td>Tuesday</td>
                  <td>8:30 AM</td>
                  <td>9:30 PM</td>
              </tr>
              <tr>
                  <td>Wednesday</td>
                  <td>8:30 AM</td>
                  <td>9:30 PM</td>
              </tr>
              <tr>
                  <td>Thursday</td>
                  <td>8:30 AM</td>
                  <td>9:30 PM</td>
              </tr>
              <tr>
                  <td>Friday</td>
                  <td>8:30 AM</td>
                  <td>11:00 PM</td>
              </tr>
              <tr>
                  <td>Saturday</td>
                  <td>8:30 AM</td>
                  <td>12:30 AM</td>
              </tr>
              <tr>
                  <td>Sunday</td>
                  <td>CLOSED</td>
                  <td>CLOSED</td>
              </tr>
          </tbody>
     </table>
    </div>

   </div>
    
<?php
include '../resources/footer.php'
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>

</html>