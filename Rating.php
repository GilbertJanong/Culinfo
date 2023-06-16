<!DOCTYPE html>
<html>
<head>
	<title>Rating dan Ulasan</title>
</head>
<body>
<form action="simpan_review.php" method="POST">
  <label for="nama">Nama:</label>
  <input type="text" name="nama" id="nama" required>

  <label for="ulasan">Ulasan:</label>
  <textarea name="ulasan" id="ulasan" required></textarea>

  <label for="rating">Rating:</label>
  <select name="rating" id="rating" required>
    <option value="1">1 Bintang</option>
    <option value="2">2 Bintang</option>
    <option value="3">3 Bintang</option>
    <option value="4">4 Bintang</option>
    <option value="5">5 Bintang</option>
  </select>

  <input type="submit" value="Kirim Ulasan">
</form>
</body>