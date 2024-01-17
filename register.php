<?php 
 
include 'config.php';


    if (isset ($_POST['Simpan'])){
    //mulai proses simpan data
        $sql_simpan = "INSERT INTO pengguna (username,email,password) VALUES (
        '".$_POST['username']."',
        '".$_POST['email']."',
        '".$_POST['password']."')";
        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

    if ($query_simpan) {
        echo "<script>
        Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {if (result.value)
            {window.location = 'index.php';}
        })</script>";
    }else{
    echo "<script>
        Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {if (result.value)
            {window.location = 'register.php';}
        })</script>";
    }
    }
     //selesai proses simpan data
 
?>
 
 <!-- /.login-box -->

		<!-- jQuery -->
		<script src="plugins/jquery/jquery.min.js"></script>
		<!-- Bootstrap 4 -->
		<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- AdminLTE App -->
		<script src="dist/js/adminlte.min.js"></script>
		<!-- Alert -->
		<script src="plugins/alert.js"></script>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" type="text/css" href="style.css">
 
    <title>Register</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
            <div class="input-group">
            <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan nama"required>
            </div>
            <div class="input-group">
            <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan email"required>
            </div>
            <div class="input-group">
            <input type="text" class="form-control" id="password" name="password" placeholder="Masukkan password"required>
            </div>
            <div class="input-group">
            <button onclick="return confirm('Ingin Register Ya?, Hubungi Adzi dan Fajri Sekalian Bawa Geprek!')" 
			    href="login.php" class="btn">Register</button>
            </div>
            <p class="login-register-text">Anda sudah punya akun? <a href="login.php">Login </a></p>
        </form>
    </div>
</body>
</html>

