<?php
require "../../config/config_database.php";
$act = isset($_GET['act']) ? $_GET['act'] : false;
$Id  = isset($_GET['Id_anggota']) ? $_GET['Id_anggota'] : false;

if($act == 'edit'){
    $url = "controller_anggota.php?act=edit";
    if($Id){
        $query = $db->query("SELECT * FROM perpus WHERE Id_anggota ='$Id'");
        $row = $query->fetch_array();
    } else{
        echo "<script>
            alert('Parameter id anggota tidak valid');
            window.location.href='list_anggota.php';
        </script>";
    }
} else {
    $url = "controller_anggota.php?act=input";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Anggota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/fontawesome/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Input Data Anggota
            </div>
            <div class="card-body">
                <form action="<?php echo $url; ?>" method="post">
                    <input type="hidden" name="Id_anggota_old" id="Id_anggota_old" value="<?php echo isset($row) ? $row['Id_anggota'] : ''; ?>">
                    <div class="mb-3">
                        <label for="Id_anggota">Id anggota</label>
                        <input type="text" class="form-control" name="Id_anggota" id="Id_anggota" value="<?php echo isset($row) ? $row['Id_anggota'] : ''; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="Nama">Nama</label>
                        <input type="text" class="form-control" name="Nama" id="Nama" value="<?php echo isset($row) ? $row['Nama'] : ''; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="Prodi">Prodi</label>
                        <input type="text" class="form-control" name="Prodi" id="Prodi" value="<?php echo isset($row) ? $row['Prodi'] : ''; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="Fakulltas">Fakultas</label>
                        <input type="text" class="form-control" name="Fakulltas" id="Fakulltas" value="<?php echo isset($row) ? $row['Fakulltas'] : ''; ?>">
                    </div>
                    <div class="mb-3">
                        <a class="btn btn-danger btn-sm float-start" href="list_anggota.php">
                            <i class="fa-solid fa-chevron-left"></i> 
                            Kembali
                        </a>
                        <button class="btn btn-primary btn-sm float-end" type="submit">
                            <i class="fa-regular fa-floppy-disk"></i>
                            Simpan Data
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- ja bootstrab -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

    <!-- fontawesome -->
    <script src="../../assets/fontawesome/js/all.min.js"></script>
</body>
</html>