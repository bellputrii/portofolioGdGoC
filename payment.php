<?php
// payments.php

// Import file connection.php
include 'connection.php';

// Jalankan query untuk mengambil data pembayaran dan detail order dengan harga total yang dihitung dari harga produk dan layanan
$query = "
    SELECT 
        P.ID_PAYMENT,
        O.ID_ORDER,
        (O.HARGA_TOTAL) AS JUMLAH_PAYMENT,
        P.TANGGAL_PAYMENT
    FROM
        PAYMENT P
    JOIN
        ORDER_DETAILS OD ON P.ID_DETAIL = OD.ID_DETAIL
    JOIN
        ORDERS O ON OD.ID_ORDER = O.ID_ORDER
";

// Eksekusi query
$result = mysqli_query($conn, $query);

// Cek jika query berhasil dieksekusi
if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Details</title>
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
            color: #ffc107;
        }
        .footer .social-icons a:hover {
            color: white;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">PAYMENT DETAILS</h2>
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID Payment</th>
                    <th scope="col">ID Order</th>
                    <th scope="col">Tanggal Payment</th>
                    <th scope="col">Jumlah Payment</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Loop melalui hasil query dan tampilkan dalam tabel
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "
                    <tr>
                        <td>{$row['ID_PAYMENT']}</td>
                        <td>{$row['ID_ORDER']}</td>
                        <td>{$row['TANGGAL_PAYMENT']}</td>
                        <td>{$row['JUMLAH_PAYMENT']}</td>
                    </tr>
                    ";
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

<?php
// Tutup koneksi database
mysqli_close($conn);
?>
