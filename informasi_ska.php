<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit();
}
?>

<?php include "header.php"; ?>
<?php include "sidebar.php"; ?>

<style>
    .content {
        background: #ffffff;
        padding: 30px;
        border-radius: 15px;
        margin: 20px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        animation: fadeIn 0.7s ease;
        font-family: "Segoe UI", sans-serif;
    }
    h2 {
        font-size: 26px;
        font-weight: 700;
        color: #34495e;
        margin-bottom: 20px;
        border-left: 5px solid #2980b9;
        padding-left: 10px;
    }
    h3 {
        margin-top: 25px;
        color: #2c3e50;
        font-size: 20px;
        font-weight: 600;
    }
    ul, ol {
        margin-left: 20px;
        line-height: 1.8;
        font-size: 16px;
    }
    p {
        font-size: 16px;
        color: #555;
        margin-bottom: 10px;
    }
    .info-box {
        background: #ecf6ff;
        padding: 15px;
        border-left: 4px solid #3498db;
        border-radius: 8px;
        margin-bottom: 20px;
    }
    @keyframes fadeIn {
        from {opacity: 0; transform: translateY(10px);}
        to {opacity: 1; transform: translateY(0);}
    }
</style>

<div class="content">
    <h2>📘 Informasi Surat Keterangan Aktif (SKA)</h2>

    <div class="info-box">
        <h3>📌 Pengertian SKA</h3>
        <p>
            Surat Keterangan Aktif (SKA) adalah dokumen resmi yang menyatakan bahwa seorang mahasiswa 
            masih berstatus aktif dan terdaftar pada Politeknik Negeri Lampung. Surat ini biasanya dibutuhkan 
            untuk keperluan administrasi seperti beasiswa, kebutuhan orang tua, instansi, atau keperluan lainnya.
        </p>
    </div>

    <h3>📄 Syarat Pembuatan SKA</h3>
    <ul>
        <li>Memiliki Kartu Tanda Mahasiswa (KTM) yang masih berlaku.</li>
        <li>NIM terdaftar dan aktif pada Sistem Akademik Polinela.</li>
        <li>Mencantumkan tujuan pembuatan SKA (Beasiswa, Keperluan Orang Tua, Instansi, dll.).</li>
    </ul>

    <h3>🔄 Prosedur Pelayanan</h3>
    <ol>
        <li>Mahasiswa melakukan pengajuan SKA melalui website atau langsung ke bagian akademik.</li>
        <li>Bagian akademik melakukan verifikasi data mahasiswa.</li>
        <li>SKA diproses, dicetak, dan ditandatangani pejabat terkait.</li>
        <li>Mahasiswa dapat mengambil SKA sesuai jadwal pengambilan.</li>
    </ol>

    <h3>☎ Kontak Bagian Akademik</h3>
    <p>Email: <b>akademik@polinela.ac.id</b></p>
    <p>Telepon: <b>(0721) 703995</b></p>
</div>

<?php include "footer.php"; ?>
