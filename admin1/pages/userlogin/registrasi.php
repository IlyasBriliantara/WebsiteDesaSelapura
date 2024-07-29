<?php 
require '../../controller/beritaController.php';

if( isset($_POST["register"]) ) {
	if( registrasi($_POST) > 0 ) {
		echo "<script>
				alert('user baru berhasil ditambahkan!');
			  </script>";
	} else {
		echo mysqli_error($conn);
	}
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../assets/css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="login">
    <form action="" method="post">
        <h1  class="mt-5 ml-3">Desa Selapura</h1>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" id="username" class="form-control w-50">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control w-50" >
        </div>
        <div class="mb-3">
            <label for="password2" class="form-label">Password</label>
            <input type="password" name="password2" id="password2" class="form-control w-50" >
        </div>
        <div class="mb-3">
            <button type="submit" name="register" class="btn btn-primary">Login</button>
        </div>
        </div>
    </form>

</body>

</html>