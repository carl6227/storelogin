<?php 
require_once('store.php');
$mystore->login();


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My store log in</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="col-sm-4">
            <form action="" method="post">
                 <div class="form-input">
                   <label for="">username</label>
                   <input  class="form-control"name="username" id="username"type="text">
                 </div>
                 <div class="form-input">
                   <label for="">password</label>
                   <input class="form-control"name="password" id="password"type="text">
                 </div>
                 <div class="form-input">
                 
                  <button class="btn btn-primary" name="submit" type="submit">login</button>
                 </div>
         </form>
    </div>
    </div>
</body>
</html>