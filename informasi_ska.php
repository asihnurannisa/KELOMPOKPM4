php
<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit();
}
?>

<?php include "header.php"; ?>
<?php include "sidebar.php"; ?>

<div class="content">
    <h2>Informasi Surat Keterangan Aktif (SKA)</h2>

    <h3>📌 Pengertian SKA</h3>
    <p>Surat Keterangan Aktif (SKA) adalah surat yang menyatakan bahwa mahasiswa masih aktif sebagai mahasiswa Politeknik Negeri Lampung.</p>

    <h3>📄 Syarat Pembuatan SKA</h3>
    <ul>
        <li>Kartu Tanda Mahasiswa (KTM)</li>
        <li>NIM terdaftar aktif pada sistem akademik</li>
        <li>Tujuan pembuatan surat (Beasiswa / Keperluan orang tua / Lainnya)</li>
    </ul>

<h3>🔄 Prosedur Pelayanan</h3>
    <ol>
        <li>Mahasiswa mengajukan permohonan SKA melalui website atau langsung ke bagian akademik.</li>
        <li>Pihak akademik memverifikasi data mahasiswa.</li>
        <li>SKA diproses dan ditandatangani.</li>
        <li>Mahasiswa mengambil SKA.</li>
    </ol>

    <h3>☎ Kontak Bagian Akademik</h3>
    <p>Email: akademik@polinela.ac.id</p>
    <p>Telepon: (0721) 703995</p>
</div>

<?php include "footer.php"; ?>
