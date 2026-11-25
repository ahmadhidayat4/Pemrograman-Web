<?php
$judulBerita = $_POST['judul'];
$kontenBerita = $_POST['konten'];

if (!empty($judulBerita) && !empty($kontenBerita)) {
    echo "<h1>Daftar Berita</h1>";
    for ($i = 0; $i < count($judulBerita); $i++) {
        echo "<h2>Berita " . ($i + 1) . "</h2>";
        echo "<strong>Judul:</strong> " . htmlspecialchars($judulBerita[$i]) . "<br>";
        echo "<strong>Isi:</strong> " . nl2br(htmlspecialchars($kontenBerita[$i])) . "<br><hr>";
    }
} else {
    echo "<p>Tidak ada data berita yang diisi.</p>";
}
echo '<a href="berita.php">Kembali ke Form</a>';
?>
