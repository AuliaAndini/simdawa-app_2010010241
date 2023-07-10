<?php

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $pass     = $_POST['password'];

    include 'connection.php';

     $result = mysqli_query($con, "SELECT * FROM user WHERE username = '$username'");
     $cek = mysqli_num_rows($result);
     if ($cek > 0) {
         session_start();
    // echo '<script>alert("oke")</script>';
    $row = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $row['username'];
    if (password_verify($pass, $row["password"])) {
        echo"<script>alert('Login Berhasil');document.location.href='admin/index.php'</script>"; 
          exit;
       }
     }
    $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Login</title>
    <!-- Bootstrap core css -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="login" style="background-image: url(img/4.jpeg); background-size:cover; background-repeat:no-repeat; background-position: 0 -300px ">
    <div class="login">
        <?php if (isset($error)) : ?>

            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Login gagal</strong> Periksa kembali username dan password
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">$times;</span>
                </button>
            </div>
        <?php endif; ?>

        <br><br><br><br><br><br>
        <div class="card-header mt-5 bg-transparent">
            <h2 class="text-center text-black">Login <span class="font-weight-bold text-black"></span></h2>

            <div class="card-body text-center">
                <form action="" method="POST">
                    <div class="text-center pb-1">
                        <input type="text" name="username" class="input-control" placeholder="Username">
                    </div>
                    <div class="text-center pb-2">
                        <input type="password" name="password" class="input-control" placeholder="Password">
                    </div>

                    <!-- <div class="input-group"> -->
                    <input type="submit" name="login" value="Login" class="btn btn-secondary">
                    <a href="user/user_add.php" class="btn btn-info">Buat Akun</a>
                    <!-- <a href="?page=home" class="btn btn-block btn-danger">Kembali ke Beranda</a> -->
                    <!-- </div> -->
                </form>
            </div>
        </div>


    </div>
</body>

</html>