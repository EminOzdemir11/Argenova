<?php include "../Includes/db.php" ?>

<?php

    if (isset($_POST['ekle'])) {

        $db_name = $_POST["name"];
        $db_surname = $_POST["surname"];
        $db_username = $_POST["username"];
        $db_password = $_POST["password"];
        $db_role = $_POST["role"];
    
        $sql = "INSERT INTO users (name, surname, username, password, role) 
        VALUES ('$db_name', '$db_surname', '$db_username', '$db_password', '$db_role')";
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }


    
        


?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>

  <body>
<div class="container">
    <div class="row">
        <div class="col-md-6">
        <br><br>
        <form name="adminp" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-3">
                <label for="surname" class="form-label">Surname</label>
                <input type="text" class="form-control" name="surname">
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="text" class="form-control" name="password">
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <input type="text" class="form-control" name="role">
            </div>
            
            <button type="submit" name="ekle" class="btn btn-primary">Ekle</button>
            </form>
        </div>
    </div>
</div>  
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>