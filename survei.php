<?php
session_start();
include "koneksi.php";

$pesan = "";

// Proses ketika form dikirim
if (isset($_POST['kirim'])) {
    $k1    = $_POST['k1'];
    $k2    = $_POST['k2'];
    $k3    = $_POST['k3'];
    $k4    = $_POST['k4'];
    $saran = $_POST['saran'];

    $query = "INSERT INTO survei VALUES ('','$k1','$k2','$k3','$k4','$saran')";
    mysqli_query($koneksi, $query);

    $pesan = "Terima kasih! Survei Anda berhasil dikirim.";
}
?>

<?php include "header.php"; ?>
<?php include "sidebar.php"; ?>

<div class="content">
    <h2>Form Survei Kepuasan Pelayanan Surat Keterangan Aktif Mahasiswa</h2>

    <?php if ($pesan != ""): ?>
        <p style="color:green; font-weight:bold;"><?= $pesan ?></p>
    <?php endif; ?>

    <form method="POST">

        <label>1. Kemudahan pelayanan</label><br>
        <select name="k1" required>
            <option value="">Pilih</option>
            <option>1 - Sangat Buruk</option>
            <option>2 - Buruk</option>
            <option>3 - Cukup</option>
            <option>4 - Baik</option>
            <option>5 - Sangat Baik</option>
        </select>
        <br><br>

        <label>2. Kecepatan pelayanan</label><br>
        <select name="k2" required>
            <option value="">Pilih</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
        <br><br>

        <label>3. Keramahan petugas</label><br>
        <select name="k3" required>
            <option value="">Pilih</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
        <br><br>

        <label>4. Kejelasan prosedur</label><br>
        <select name="k4" required>
            <option value="">Pilih</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
        <br><br>

        <label>Saran / Masukan</label><br>
        <textarea name="saran" rows="4" style="width:100%;"></textarea>
        <br><br>

        <button type="submit" name="kirim"
                style="padding:10px; background:#0056b3; color:white; border:none; border-radius:5px;">
            Kirim Survei
        </button>

    </form>
</div>

<?php include "footer.php"; ?>
