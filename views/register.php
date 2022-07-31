<?php
// phpcs:ignore
error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting',E_ALL);
require_once dirname(__DIR__) . "/database/DB.php";
require_once dirname(__DIR__) . "/app/Models/User.php";
$conn = $db->connect();
// print_r($conn);

if (isset($_POST["register"])){
    $user = new User($conn);
    $result = $user->add(
        $_POST["username"],
        $_POST["email"],
        $_POST["password"]
    );

    if($result){
        echo "registration Successful";
    }else{
        echo "Please try again";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>
    <div class="container-sm">
        <form action="" method="POST" class="w-50 m-auto">
            <h1>Register</h1>
            <!-- username -->
            <div class="mb-3">
                <label for="username">User name</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter your Username" required>
            </div>
            <!-- user emIL -->
            <div class="mb-3">
                <label for="floatingInput">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <!-- password -->
            <div class="mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            </div>
            <!-- register -->
            <div class="d-grid">
                <button class="btn btn-primary" type="submit" name="register">Register</button>
            </div>
        </form>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>
