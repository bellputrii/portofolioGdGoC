<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "finalprojectpbd";

// mysqli_connect digunakan untuk membuka koneksi baru dari MySQL Server

$conn = mysqli_connect($servername, $username, $password, $database);
//conn itu boolean, jika berhasil ke connect maka akan mencetak connected successfully
if (!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully! <br> <br> <br> <br>";

// //
// $sql = "SELECT * FROM mahasiswa";

// // untuk nge-query database yang sudah dibuat sebelumnya
// $result = mysqli_query($conn, $sql);

// if(mysqli_num_rows($result) > 0){
//     // mysqli fetch assoc assosiative array
//     while($row = mysqli_fetch_assoc($result)){
//         echo"Nim: ". $row["nim"]. " -Nama: " . $row["nama"]. " -Alamat: " .$row["alamat"]. "<br>";
//     }

// } else {
//     echo "Tidak ada Data di tabel";
// }

// mysqli_close($conn);
// ini di komen aja karena kalo ngga, ntar di index.php bakal ke close juga, kurleb gitu sie
?>
