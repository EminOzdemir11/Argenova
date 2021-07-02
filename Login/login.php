<?php include "../Includes/db.php" ?>
<?php session_start(); ?>

<?php

    if (isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $username = mysqli_real_escape_string($conn, $username);
        $password = mysqli_real_escape_string($conn, $password);

        $query = "SELECT * from users WHERE username = '{$username}' ";

        $select_user_query = mysqli_query($conn, $query);

        if (!$select_user_query) {
            die("QUERY FAİLED". mysqli_error($conn));
        }

        while ($row = mysqli_fetch_assoc($select_user_query)) {
            $db_user_id = $row["user_id"];
            $db_name = $row["name"];
            $db_surname = $row["surname"];
            $db_username = $row["username"];
            $db_password = $row["password"];
        }

        if ($username !== $db_username && $password !== $db_password) {
            header("Location: login.php");
        }
        else if ($username === $db_username && $password === $db_password) {
            
          $_SESSION["username"] = $db_username;
          $_SESSION["password"] = $db_password;
          
          header("Location: ../AdminPanel/adminPanel.php");
        }
        else{
            header("Location: login.php");
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
    <!-- <link href="../Css/login.css" rel="stylesheet"> -->

  </head>

  <body>

  <div class="container">
    <div class="row">
        <div class="col-md-6">
        <br><br>
          <form name="login" method="post">

              <table>
                  <tr>
                      <td>Kullanıcı Adı</td>
                      <td><input type="text" name="username" /></td>
                  </tr>
                  
                  <tr>
                      <td>Şifre</td>
                      <td><input type="password" name="password" /></td>
                  </tr>
                  
                  <tr>
                      <td></td>
                      <td><input type="submit" name="login" value="Giriş" /></td>
                  </tr>
              </table>

          </form>
      </div>
    </div>
</div> 

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>