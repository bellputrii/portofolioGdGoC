<?php
// Start the session
session_start();

// Include database connection
include 'connection.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare and bind
    $stmt = $conn->prepare("SELECT ID_PENGGUNA, NAMA_PENGGUNA FROM USERS  WHERE EMAIL_PENGGUNA = ? AND PASSWORD = ?");
    $stmt->bind_param("ss", $email, $password);

    // Execute the statement
    $stmt->execute();
    $stmt->store_result();

    // Check if a row is found
    if ($stmt->num_rows > 0) {
        // Bind the result to variables
        $stmt->bind_result($id_user, $nama_user);
        $stmt->fetch();

        // Set session variables
        $_SESSION['loggedin'] = true;
        $_SESSION['ID_PENGGUNA'] = $id_user;
        $_SESSION['NAMA_PENGGUNA'] = $nama_user;
        $_SESSION['EMAIIL_PENGGUNA'] = $email;

        // Redirect to index.php
        header("Location: index.php");
        exit();
    } else {
        $error_message = "Invalid login credentials!";
    }

    // Close statement
    $stmt->close();
}

// Close connection (no need to close explicitly since we included connection.php)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            /* Ganti 'background.jpg' dengan path ke gambar latar belakang yang diinginkan */
            background-image: url('image4.jpg');
            /* Centang gambar */
            background-size: cover;
            /* Atur posisi gambar ke tengah */
            background-position: center;
            /* Tetapkan warna teks agar kontras dengan latar belakang */
            color: #fff;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #13072E;
            border-radius: 15px 15px 0 0;
            color: #fff;
            font-size: 24px;
        }

        .card-body {
            padding: 30px;
            /* Atur latar belakang card body menjadi transparan */
            background-color: rgba(0, 0, 0, 0.5);
            /* Atur warna teks pada card body */
            color: #fff;
        }

        .form-label {
            font-weight: 600;
        }

        .btn-primary {
            background-color: #13072E;
            border-color: #13072E;
        }

        .btn-primary:hover {
            background-color: #13072E;
            border-color: #13072E;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h3>Login</h3>
                </div>
                <div class="card-body">
                    <?php if (!empty($error_message)): ?>
                        <div class="alert alert-danger"><?php echo $error_message; ?></div>
                    <?php endif; ?>
                    <form method="post" action="">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


