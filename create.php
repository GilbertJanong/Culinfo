<?php
    // Koneksi ke database
    $koneksi = mysqli_connect("localhost", "root", "", "new_culinfo");

    // Mengecek koneksi
    if (mysqli_connect_errno()) {
        echo "Koneksi database gagal: " . mysqli_connect_error();
    }

    // Mengambil data dari form
    $nama = $_POST['nama'];
    $password = $_POST['password'];

    // Menambahkan data pengguna ke database
    $query = "INSERT INTO user (username, password) VALUES ('$nama', '$password')";
    $result = mysqli_query($koneksi, $query);

    // Mengecek apakah data berhasil ditambahkan
    if ($result) {
        echo "Data pengguna berhasil ditambahkan.";
    } else {
        echo "Terjadi kesalahan: " . mysqli_error($koneksi);
    }

    // Menutup koneksi database
    mysqli_close($koneksi);
?>