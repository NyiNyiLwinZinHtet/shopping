<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Shopping Lists</title>
</head>
<body>
    <div class="container-sm">
        <form class="w-25 m-auto" id="shopping-list">
            <h1>Shopping List</h1>
             <!-- use -->
             <div class="mb-3">
                <label class="form-label" for="num2">list</label>
                <input class="form-control" id="num2" type="text" placeholder="Enter your lists"/>
            </div>
            <!-- button -->
            <div class="d-grid">
                <button id="btn" class="btn btn-primary" type="submit">Add</button>
            </div>
            <!-- table -->
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th>items</th>
                        <th>remove</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </form>
</body>
<script src="./shopping.js"></script>
</html>