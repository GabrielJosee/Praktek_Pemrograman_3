<?php
session_start();

include("koneksi.php");

if (isset($_POST["kirim"])) {
    $nama = mysqli_real_escape_string($conn, trim($_POST['nama']));
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $subjek = mysqli_real_escape_string($conn, trim($_POST['subjek']));
    $pesan = mysqli_real_escape_string($conn, trim($_POST['pesan']));

    $sql = "INSERT INTO kontak (nama, email, subjek, pesan)
            VALUES ('$nama', '$email', '$subjek', '$pesan')";
    if ($conn->query($sql) === TRUE) {
        $_SESSION['tampilkan_modal_sukses'] = true;
        header("Location: Latihan_Bootstrap.php#Contact");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>