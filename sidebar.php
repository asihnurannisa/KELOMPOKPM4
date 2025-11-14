<style>
    .sidebar {
        width: 220px;
        background: #003f80;
        height: 100vh;
        padding-top: 20px;
        float: left;
        color: white;
        position: fixed;
    }
    .sidebar a {
        display: block;
        padding: 12px;
        text-decoration: none;
        color: white;
        border-bottom: 1px solid rgba(255,255,255,0.1);
    }
    .sidebar a:hover {
        background: #002f60;
    }

    .content {
        margin-left: 240px;
        padding: 20px;
    }
</style>

<div class="sidebar">
    <a href="dashboard.php">Dashboard</a>
    <a href="informasi_ska.php">Informasi SKA</a>
    <a href="survei.php">Form Survei</a>
    <a href="logout.php">Logout</a>
</div>
