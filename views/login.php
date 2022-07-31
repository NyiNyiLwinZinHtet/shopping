<?php

error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting',E_ALL);
require_once dirname(__DIR__) . "/database/DB.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>
    <div class='container-sm'>
        <form class="w-50 m-auto">
            
            <!-- username -->
            <div class='mb-3'>
                <input type='text' class='form-control' placeholder='Enter your email address'/>
            </div>
            <!-- password -->
            <div class='mb-3'>
                <input type='text' class='form-control' placeholder='Enter your password'/>
            </div>
            <!-- log in -->
            <div class='d-grid'>
                <button type='button' class='btn btn-primary' >Log in</button>
            </div>
            
        </form>
    </div>


</body>
</html>