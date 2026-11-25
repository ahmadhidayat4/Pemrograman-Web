<form method="post">
    Masukkan angka: <input type="number" name="number">
    <input type="submit" value="Submit">
</form>
<?php
if ($_POST) {
    $number = $_POST['number'];
    if (($number % 2) == 0) {
        echo "$number adalah bilangan genap";
    } else {
        echo "$number adalah bilangan ganjil";
    }
}
?>