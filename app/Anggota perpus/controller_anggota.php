<?php
require "../../config/config_database.php";
$db = koneksi(hostname, username, password, database);

$act = $_GET['act'];

if($act == 'input'){
    $Id_anggota = $_POST['Id_anggota'];
    $Nama = $_POST['Nama'];
    $Prodi = $_POST['Prodi'];
    $Fakulltas = $_POST['Fakulltas'];

    $query = $db->query("INSERT INTO perpus (Id_anggota, Nama, Prodi, Fakulltas)
                    VALUES ('$Id_anggota', '$Nama', '$Prodi', '$Fakulltas')");
    
    if($query){
        echo "<script>
            alert('Data suksess disimpan');
            window.location.href='list_anggota.php';
        </script>";
    }
    else{
        echo "<script>
        alert('Data gagal disimpan');
        window.location.href='form_anggota.php';
        </script>";
    }
    
} else if($act == 'edit'){
    $Id_anggota_old = $_POST['Id_anggota_old'];
    $Id_anggota = $_POST['Id_anggota'];
    $Nama = $_POST['Nama'];
    $Prodi = $_POST['Prodi'];
    $Fakulltas = $_POST['Fakulltas'];

    $query = $db->query("UPDATE perpus SET Id_anggota = '$Id_anggota',
                                        Nama = '$Nama',
                                        Prodi = '$Prodi',
                                        Fakulltas = '$Fakulltas'
                                    WHERE Id_anggota = '$Id_anggota_old'");


    if($query){
        echo "<script>
            alert('Data suksess diubah');
            window.location.href='list_anggota.php';
        </script>";
    }
    else{
        echo "<script>
        alert('Data gagal diubah');
        window.location.href='list_anggota.php';
        </script>";
    }

} else if($act == 'hapus'){
    $Id_anggota = $_GET['Id_anggota'];
    $query =$db->query("DELETE FROM perpus WHERE Id_anggota = '$Id_anggota'");
    if($query){
        echo "<script>
            alert('Data suksess dihapus');
            window.location.href='list_anggota.php';
        </script>";
    }
    else{
        echo "<script>
        alert('Data gagal dihapus');
        window.location.href='list_anggota.php';
        </script>";
    }

} else{
    echo "<script>
    alert('Maaf, parameter Anda tidak valid');
    window.location.href='list_anggota.php';
    </script>";
}
