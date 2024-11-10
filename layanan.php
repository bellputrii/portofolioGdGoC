<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABEL LAYANAN</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        .footer {
            background: #343a40;
            color: white;
            padding: 20px 0;
        }
        .footer a {
            color: #ffc107;
            text-decoration: none;
        }
        .footer a:hover {
            color: white;
        }
        .footer .social-icons a {
            font-size: 24px;
            margin-right: 15px;
            color: #F4CE14;
        }
        .footer .social-icons a:hover {
            color: white;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">TABEL LAYANAN</h2>
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">ID LAYANAN</th>
                    <th scope="col">ID TEKNISI</th>
                    <th scope="col">NAMA LAYANAN</th>
                    <th scope="col">DESKRIPSI LAYANAN</th>
                    <th scope="col">HARGA LAYANAN</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // import file connection.php
                include 'connection.php';
                // untuk join class masukin ke mysqli_query
                $layanan = mysqli_query($conn, "SELECT * FROM layanan");
                $no = 1;
                foreach ($layanan as $value){
                    echo "
                    <tr>
                        <th scope='row'>".$no."</th>
                        <td>".$value['ID_LAYANAN']."</td>
                        <td>".$value['ID_TEKNISI']."</td>
                        <td>".$value['NAMA_LAYANAN']."</td>
                        <td>".$value['DESKRIPSI_LAYANAN']."</td>
                        <td>".$value['HARGA_LAYANAN']."</td>
                    </tr>
                    ";
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>

    <footer class="footer mt-5">
        <div class="container text-center">
            <div class="row">
            <div class="col-md-6 mb-3">
                    <h5>Contact Information</h5>
                    <p>Email: beldapramono823@gmail.com</p>
                    <p>Phone: +62 896 733 849 11</p>
                </div>
                <div class="col-md-6 mb-3">
                    <h5>Follow Us</h5>
                    <div class="social-icons">
                        <a href="https://www.facebook.com" target="_blank" class="bi bi-facebook"></a>
                        <a href="https://www.twitter.com" target="_blank" class="bi bi-twitter"></a>
                        <a href="https://www.whatsapp.com" target="_blank" class="bi bi-whatsapp"></a>
                        <a href="https://instagram.com/xbive_" target="_blank" class="bi bi-instagram"></a>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    &copy; 2024 Bell Computer. All Rights Reserved.
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap JS and dependencies (Optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
