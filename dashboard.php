<?php
session_start();
include "koneksi.php";

// Cek login
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit();
}

// Ambil data total survei
$q = mysqli_query($koneksi, "SELECT COUNT(*) AS total FROM survei");
$total = mysqli_fetch_assoc($q)['total'];

// Ambil rata-rata nilai survei
$q2 = mysqli_query($koneksi, "SELECT 
    AVG(k1) AS avg1, 
    AVG(k2) AS avg2, 
    AVG(k3) AS avg3, 
    AVG(k4) AS avg4
FROM survei");

$avg = mysqli_fetch_assoc($q2);

// Menghindari error jika belum ada data
$avg1 = number_format($avg['avg1'] ?? 0, 1);
$avg2 = number_format($avg['avg2'] ?? 0, 1);
$avg3 = number_format($avg['avg3'] ?? 0, 1);
$avg4 = number_format($avg['avg4'] ?? 0, 1);
?>

<?php include "header.php"; ?>
<?php include "sidebar.php"; ?>

<style>
    .content h2 {
        margin-top: 0;
        font-size: 28px;
    }
    .cards {
        display: flex;
        gap: 20px;
        margin-top: 20px;
        flex-wrap: wrap;
    }
    .card {
        width: 240px;
        background: white;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 3px 8px rgba(0,0,0,0.2);
    }
    .card h3 {
        margin: 0;
        font-size: 22px;
        color: #0056b3;
    }
    .card p {
        font-size: 28px;
        font-weight: bold;
        margin-top: 10px;
        color: #222;
    }
    .section {
        margin-top: 40px;
        background: #fff;
        padding: 25px;
        border-radius: 10px;
        box-shadow: 0 3px 8px rgba(0,0,0,0.2);
    }
    .section h3 {
        margin-top: 0;
        color: #003f80;
    }
    ul li { margin-bottom: 5px; }
</style>

<div class="content">
    <h2>Dashboard</h2>
    <p>Selamat datang di <b>Sistem Survei Kepuasan Pelayanan Surat Keterangan Aktif (SKA)</b> Politeknik Negeri Lampung.</p>

    <!-- CARD STATISTIK -->
    <div class="cards">
        <div class="card">
            <h3>Total Survei</h3>
            <p><?= $total ?></p>
        </div>

        <div class="card">
            <h3>Kemudahan</h3>
            <p><?= $avg1 ?></p>
        </div>

        <div class="card">
            <h3>Kecepatan</h3>
            <p><?= $avg2 ?></p>
        </div>

        <div class="card">
            <h3>Keramahan</h3>
            <p><?= $avg3 ?></p>
        </div>

        <div class="card">
            <h3>Prosedur</h3>
            <p><?= $avg4 ?></p>
        </div>
    </div>

    <!-- INFORMASI SISTEM -->
    <div class="section">
        <h3>Informasi Sistem Survei</h3>
        <p>Sistem ini digunakan untuk mengukur tingkat kepuasan mahasiswa terhadap pelayanan pembuatan Surat Keterangan Aktif (SKA) di Bagian Akademik Politeknik Negeri Lampung.</p>
        <p>Tujuan utama dari sistem survei ini adalah:</p>
        <ul>
            <li>Menilai kualitas layanan SKA oleh petugas akademik.</li>
            <li>Mengetahui tingkat kepuasan mahasiswa terhadap proses pelayanan.</li>
            <li>Menjadi bahan evaluasi layanan agar semakin baik ke depannya.</li>
            <li>Mendukung Polinela dalam meningkatkan kualitas pelayanan publik.</li>
        </ul>
    </div>

    <!-- PANDUAN PENGGUNAAN -->
    <div class="section">
        <h3>Panduan Penggunaan Dashboard</h3>
        <ul>
            <li><b>Menu Informasi SKA</b> → Menampilkan penjelasan lengkap tentang SKA.</li>
            <li><b>Menu Form Survei</b> → Menginput survei kepuasan pelayanan.</li>
            <li><b>Menu Logout</b> → Keluar dari sistem dan kembali ke halaman login.</li>
        </ul>
        <p>Silakan gunakan menu yang tersedia di sidebar untuk mengelola dan melihat data survei.</p>
    </div>

    <!-- CATATAN -->
    <div class="section" style="margin-bottom: 80px;">
        <h3>Catatan</h3>
        <p>Dashboard ini hanya menampilkan ringkasan. Detail data survei dapat ditambahkan di menu khusus jika diperlukan (seperti tabel data atau grafik Chart.js).</p>
    </div>

</div>

<?php include "footer.php"; ?>
