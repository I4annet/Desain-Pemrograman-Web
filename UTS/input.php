<?php
session_start();

// Cek apakah email sudah ada di session atau cookie
// if (isset($_SESSION['email']) || isset($_COOKIE['email'])) {
//     echo "Anda sudah mengisi data. Anda tidak bisa mengisi ulang.";
//     exit; // Hentikan eksekusi jika email sudah ada
// }

// Koneksi ke database dan proses input
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data_user";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Cek apakah email dan comment sudah ada di POST dan tidak kosong
    if (isset($_POST['email']) && isset($_POST['comment']) && !empty($_POST['email']) && !empty($_POST['comment'])) {
        $email = $conn->real_escape_string($_POST['email']);
        $comment = $conn->real_escape_string($_POST['comment']);

        // Cek apakah email sudah ada di database
        $checkEmailSql = "SELECT * FROM pengguna WHERE email = '$email'";
        $result = $conn->query($checkEmailSql);

        if ($result->num_rows > 0) {
            echo "Email ini sudah digunakan. Anda tidak bisa mengisi ulang.";
        } else {
            // Jika email belum ada, simpan data
            $sql = "INSERT INTO pengguna (email, comment) VALUES ('$email', '$comment')";

            if ($conn->query($sql) === TRUE) {
                // Simpan email di session dan cookie
                $_SESSION['email'] = $email;
                setcookie("email", $email, time() + (86400 * 30), "/"); // 30 hari

                echo "Data berhasil disimpan!";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    } else {
        echo "Error: Email dan komentar harus diisi!";
    }
}
$conn->close();
?>
