<?php
    // Koneksi ke database
    $koneksi = mysqli_connect("localhost", "root", "", "new_culinfo");

    // Mengecek koneksi
    if (mysqli_connect_errno()) {
        echo "Koneksi database gagal: " . mysqli_connect_error();
    }

    // Mengambil ID pengguna dari URL
    $id = $_GET['id'];

    // Mengecek apakah form sudah disubmit
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Mengambil data dari form
        $nama = $_POST['nama'];

        // Mengupdate data pengguna di database
        $query = "UPDATE user SET username='$nama' WHERE id_user='$id'";
        $result = mysqli_query($koneksi, $query);

        // Mengecek apakah data berhasil diupdate
        if ($result) {
            echo "Data pengguna berhasil diupdate.";
        } else {
            echo "Terjadi kesalahan: " . mysqli_error($koneksi);
        }
    } else {
        // Menampilkan form edit pengguna
        $query = "SELECT * FROM user WHERE id_user='$id'";
        $result = mysqli_query($koneksi, $query);
        $row = mysqli_fetch_assoc($result);

        echo "<h2>Edit Pengguna</h2>";
        echo "<form action='edit.php?id=" . $row['id'] . "' method='POST'>";
        echo "<label for='nama'>Nama:</label>";
        echo "<input type='text' name='nama' value='" . $row['nama'] . "' required><br>";
        echo "<input type='submit' value='Update'>";
        echo "</form>";

        // Membebaskan memori
        mysqli_free_result($result);
    }

    // Menutup koneksi database
    mysqli_close($koneksi);
?>