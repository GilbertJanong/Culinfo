<!DOCTYPE html>
<html>
<head>
    <title>Sistem Admin</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        
        table th, table td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        table th {
            background-color: #f2f2f2;
        }
        
        form label {
            display: inline-block;
            width: 80px;
        }
        
        form input[type="text"],
        form input[type="email"],
        form input[type="submit"] {
            margin-bottom: 8px;
            padding: 4px;
        }
        
        form input[type="submit"] {
            background-color: grey;
            color: white;
            border: none;
            cursor: pointer;
        }
        
        form input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Sistem Admin</h1>
    <h2>Data Pengguna</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Password</th>
            <th>Aksi</th>
        </tr>
        <?php
            // Koneksi ke database
            $koneksi = mysqli_connect("localhost", "root", "", "new_culinfo");
            
            // Mengecek koneksi
            if (mysqli_connect_errno()) {
                echo "Koneksi database gagal: " . mysqli_connect_error();
            }

            // Menampilkan data pengguna
            $query = "SELECT * FROM user";
            $result = mysqli_query($koneksi, $query);

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['ID_User'] . "</td>";
                echo "<td>" . $row['Username'] . "</td>";
                echo "<td>" . $row['Password'] . "</td>";
                echo "<td><a href='edit.php?id=" . $row['ID_User'] . "'>Edit</a> | <a href='delete.php?id=" . $row['ID_User'] . "'>Hapus</a></td>";
                echo "</tr>";
            }

            // Membebaskan memori
            mysqli_free_result($result);

            // Menutup koneksi database
            mysqli_close($koneksi);
        ?>
    </table>

    <h2>Tambah Pengguna Baru</h2>
    <form action="create.php" method="POST">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required><br>
        <label for="password">Password:</label>
        <input type="text" name="password" required><br>
        <input type="submit" value="Tambah">
    </form>
    <h2>Data Kuliner</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Deskripsi Singkat</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
        <?php
            // Koneksi ke database
            $koneksi = mysqli_connect("localhost", "root", "", "new_culinfo");
            
            // Mengecek koneksi
            if (mysqli_connect_errno()) {
                echo "Koneksi database gagal: " . mysqli_connect_error();
            }

            // Menampilkan data pengguna
            $query = "SELECT * FROM kuliner";
            $result = mysqli_query($koneksi, $query);

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['id_kuliner'] . "</td>";
                echo "<td>" . $row['nama_kuliner'] . "</td>";
                echo "<td>" . $row['deskripsi'] . "</td>";
                echo "<td>" . $row['deskripsi_singkat'] . "</td>";
                echo "<td><img src='uploads/" . $row['gambar_kuliner'] . "' width='150px' height='100px'></td>";
                echo "<td><a href='edit.php?id=" . $row['id_kuliner'] . "'>Edit</a> | <a href='delete.php?id=" . $row['id_kuliner'] . "'>Hapus</a></td>";
                echo "</tr>";
            }

            // Membebaskan memori
            mysqli_free_result($result);

            // Menutup koneksi database
            mysqli_close($koneksi);
        ?>
    </table>

    <h2>Tambah Kuliner Baru</h2>
    <form action="create.php" method="POST">
        <label for="nama">Nama Kuliner:</label>
        <input type="text" name="nama" required><br>
        <label for="nama">Deskripsi:</label>
        <input type="text" name="deskripsi" required><br>
        <label for="nama">Deskripsi Singkat:</label>
        <input type="text" name="deskripsi_singkat" required><br>
        <input type="submit" value="Tambah">
    </form>
</body>
</html>