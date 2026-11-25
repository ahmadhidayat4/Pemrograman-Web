<form action="proses_berita.php" method="post">
<?php
$jumlahBerita = 3;
for ($i = 1; $i <= $jumlahBerita; $i++) {
    echo "<h3>Berita $i</h3>";
    echo "Judul: <input type='text' name='judul[]' required><br><br>";
    echo "Isi: <textarea name='konten[]' rows='4' required></textarea><br><br>";
}
?>
    <button type="submit">Kirim Berita</button>
</form>