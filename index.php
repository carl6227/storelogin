<?php 
require_once('store.php');
$users = $mystore->getUsers();
//print_r($users);
foreach($users as $user=> $value){
    print_r($value  );
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>