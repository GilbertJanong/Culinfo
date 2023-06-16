<?php
    // Koneksi ke database
    $koneksi = mysqli_connect("localhost", "root", "", "new_culinfo");

    // Mengecek koneksi
    if (mysqli_connect_errno()) {
        echo "Koneksi database gagal: " . mysqli_connect_error();
    }

    // Mengambil ID pengguna dari URL
    $id = $_GET['id'];

    // Menghapus data pengguna dari database
    $query = "DELETE FROM user WHERE id_user='$id'";
    $result = mysqli_query($koneksi, $query);

    // Mengecek apakah data berhasil dihapus
    if ($result) {
        echo "Data pengguna berhasil dihapus.";
    } else {
        echo "Terjadi kesalahan: " . mysqli_error($koneksi);
    }

    // Menutup koneksi database
    mysqli_close($koneksi);
?>