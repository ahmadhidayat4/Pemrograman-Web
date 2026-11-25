<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Berita</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; background: #f4f4f9; }
        h1 { text-align: center; color: #333; }
        form { max-width: 600px; margin: 20px auto; background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); }
        label { font-weight: bold; display: block; }
        input, textarea { width: 100%; padding: 10px; margin: 8px 0 15px; border: 1px solid #ddd; border-radius: 4px; }
        button { width: 100%; background: #4CAF50; color: white; padding: 10px; border: none; cursor: pointer; border-radius: 4px; font-size: 16px; }
        .error { color: red; font-size: 14px; }
    </style>
</head>
<body>
    <h1>Form Berita</h1>

    <form action="proses_berita.php" method="post" onsubmit="return validateForm();">
        <?php
        $jumlahBerita = 3;
        for ($i = 1; $i <= $jumlahBerita; $i++) {
            echo "<h3>Berita $i</h3>";
            echo "<label for='judul_$i'>Judul Berita:</label>";
            echo "<input type='text' id='judul_$i' name='judul[]'>";
            echo "<span id='error_judul_$i' class='error'></span>";
            echo "<label for='konten_$i'>Isi Berita:</label>";
            echo "<textarea id='konten_$i' name='konten[]' rows='4'></textarea>";
            echo "<span id='error_konten_$i' class='error'></span>";
        }
        ?>
        <button type="submit">Kirim Berita</button>
    </form>

    <script>
        function validateForm() {
            const jumlahBerita = 3;
            let isValid = true;

            for (let i = 1; i <= jumlahBerita; i++) {
                const judul = document.getElementById('judul_' + i);
                const konten = document.getElementById('konten_' + i);
                const eJ = document.getElementById('error_judul_' + i);
                const eK = document.getElementById('error_konten_' + i);

                if (judul.value.trim() === "") {
                    eJ.textContent = "Judul berita tidak boleh kosong.";
                    isValid = false;
                } else {
                    eJ.textContent = "";
                }

                if (konten.value.trim() === "") {
                    eK.textContent = "Konten berita tidak boleh kosong.";
                    isValid = false;
                } else {
                    eK.textContent = "";
                }
            }
            return isValid;
        }
    </script>
</body>
</html>