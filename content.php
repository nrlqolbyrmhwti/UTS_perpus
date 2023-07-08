<?php
if (!isset($_GET['page'])) {
?>
<br>
        <div class="card">
            <div class="card-header">
                Beranda
            </div>
            <div class="card-body">
                <h5 class="card-title">Selamat datang di Perpustakaan</h5>
                <p class="card-text">Silahkan klik menu di atas, untuk mengelola konten.</p>
            </div>
        </div>
<?php
} else {
    $page = $_GET['page'];
    $rootFolder = 'app/';
    if(!isset($_GET['act'])){
        $end_point = '/list_';
        $ext = ".php";
        include $rootFolder . $page . $end_point . $page . $ext; 
    }
}
