<?php
session_start();
include 'koneksi.php';

// Jika sudah login, langsung lempar ke admin
if (isset($_SESSION['username'])) {
    header("Location: admin.php");
    exit();
}

$error = "";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']); // Enkripsi MD5 sesuai database

    // Query cek user
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        $_SESSION['status'] = "login";
        header("Location: admin.php");
        exit();
    } else {
        $error = "Akses Ditolak. Username atau Password salah.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neural Connect - Rhodes Island</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <style>
        body {
            background-color: #121212;
            color: #FFFFFF;
            font-family: 'Roboto', sans-serif;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-image: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.9)), url('bg.jpg');
            background-size: cover;
        }
        .login-card {
            background-color: #2c2c2cff;
            border: 2px solid #E60000;
            width: 100%;
            max-width: 400px;
            padding: 2rem;
            box-shadow: 0 0 20px rgba(230, 0, 0, 0.3);
        }
        .form-control {
            background-color: #121212;
            border: 1px solid #444;
            color: white;
        }
        .form-control:focus {
            background-color: #000;
            color: white;
            border-color: #E60000;
            box-shadow: 0 0 5px rgba(230,0,0,0.5);
        }
        .btn-ri {
            background-color: #E60000;
            color: white;
            border: none;
            width: 100%;
            padding: 10px;
            font-weight: bold;
            letter-spacing: 1px;
        }
        .btn-ri:hover {
            background-color: #ff2222;
            color: white;
        }
    </style>
</head>
<body>

    <div class="login-card">
        <div class="text-center mb-4">
            <h3 style="font-family: 'Oswald', sans-serif; letter-spacing: 2px;">NEURAL CONNECT</h3>
            <small class="text-light">Rhodes Island Security System</small>
        </div>

        <?php if($error): ?>
            <div class="alert alert-danger text-center p-2" role="alert">
                <i class="bi bi-exclamation-triangle-fill"></i> <?php echo $error; ?>
            </div>
        <?php endif; ?>

        <form action="" method="POST">
            <div class="mb-3">
                <label class="form-label text-light">Dr. Name (Username)</label>
                <div class="input-group">
                    <span class="input-group-text bg-dark border-secondary text-light"><i class="bi bi-person-fill"></i></span>
                    <input type="text" class="form-control" name="username" placeholder="Masukkan Username" required>
                </div>
            </div>
            <div class="mb-4">
                <label class="form-label text-light">Access Code (Password)</label>
                <div class="input-group">
                    <span class="input-group-text bg-dark border-secondary text-light"><i class="bi bi-key-fill"></i></span>
                    <input type="password" class="form-control" name="password" placeholder="Masukkan Password" required>
                </div>
            </div>
            <button type="submit" name="login" class="btn btn-ri">CONNECT TO PRTS</button>
        </form>
        
        <div class="mt-3 text-center">
            <a href="index.html" class="text-decoration-none text-muted small"><i class="bi bi-arrow-left"></i> Kembali ke Home Base</a>
        </div>
    </div>

</body>
</html>