<?php include "../Includes/db.php";

 $users = $conn->query('SELECT * FROM users')->fetch_all(PDO::FETCH_ASSOC);


?>

<?php

    if (isset($_POST["userekle"])) {
    
        $db_name = $_POST["name"];
        $db_surname = $_POST["surname"];
        $db_username = $_POST["username"];
        $db_password = $_POST["password"];
        $db_role = $_POST["role"];
    
        $sql = "INSERT INTO users (name, surname, username, password, role) 
        VALUES ('$db_name', '$db_surname', '$db_username', '$db_password', '$db_role')";
        if (mysqli_query($conn, $sql)) {
            echo "Kayıt eklendi";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
?>

<?php
    if (isset($_POST["blogyaz"])) {
        header("Location: ../BlogYaz/blogYaz.php");
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
    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script
        src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
  </head>

  <body>
    <div class="row">
        <div class="col-md-6">
            <br><br>
            <form name="adminp" id="adminp" method="POST">
                <div class=".alert" style="display: none;"></div>
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
                
                <button type="submit" name="userekle" class="btn btn-primary">Ekle</button>
            </form>
            <br><br>
            <div>
                <form action="" method="post">
                    <button type="submit" name="blogyaz" class="form-control">Blog Yaz</button>
                </form>
            </div>
        </div>     
        <div class="col-md-6">

            <table id="table" class="table table-bordered">
                <thead>
                    <tr>
                        <th>İsim</th>
                        <th>Soyisim</th>
                        <th>Kullanıcı Adı</th>
                        <th>Role</th>
                    </tr>
                    <tbody>
                        <?php foreach($users as $user): ?>
                        <tr>
                            <td><?=$user['name']?></td>
                            <td><?=$user['surname']?></td>
                            <td><?=$user['username']?></td>
                            <td><?=$user['role']?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </thead>
            </table>
            <!-- <div>
                 <?php
                    $bul = "SELECT * FROM users";
                    $kayit = $conn->query($bul);

                    if ($kayit->num_rows>0) {
                        while ($satir = $kayit->fetch_assoc()) {
                            echo "İsim: ".$satir["name"]."<br>";
                            echo "Soyisim: ".$satir["surname"]."<br>";
                            echo "Kullanıcı adı: ".$satir["username"]."<br>";
                            echo "Rol: ".$satir["role"]."<br>";
                            echo "------------------"."<br>";
                        }
                    }
                ?> 

            </div> -->
        </div>
    </div>
    <script>
        $(document).ready( function () {
            $('#table').DataTable();
        } );
    </script>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>