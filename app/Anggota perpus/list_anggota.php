<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anggota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/fontawesome/css/all.min.css">
</head>

<body>
    <div class="container">
    <div class="card">
        <div class="card-header">
            Data Anggota Perpustakaan
        </div>
        <div class="card-body">
            <a class="btn btn-primary btn-sm" href="form_anggota.php">
                <i class="fa-solid fa-circle-plus"></i> Tambah Data</a>
            <?php
            $query = $db->query("SELECT * FROM perpus"); 
            ?>
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>No</td>
                    <td>Id anggota</td>
                    <td>Nama</td>
                    <td>Prodi</td>
                    <td>Fakultas</td>
                    <td>Act</td>
                </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    while($row = $query->fetch_array()) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $row['Id_anggota']; ?></td>
                            <td><?php echo $row['Nama']; ?></td>
                            <td><?php echo $row['Prodi']; ?></td>
                            <td><?php echo $row['Fakulltas']; ?></td>
                            <td><a class="btn btn-outline-success btn-sm" href="form_anggota.php?act=edit&Id_anggota=<?php echo $row['Id_anggota']; ?>"><i class="fa-regular fa-pen-to-square"></i></a> 
                                <a class="btn btn-outline-danger btn-sm" href="controller_anggota.php?act=hapus&Id_anggota=<?php echo $row['Id_anggota']; ?>"><i class="fa-solid fa-trash-can"></i></a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
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