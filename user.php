<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">User Account</a>

                <button class="navbar-toggler" type="button" data-bs- toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria- t l " b S t dC t t" i d d "fl " i
                    controls="navbarSupportedContent" aria-expanded="false" aria- label="Toggle navigation">

                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">

                            <a class="nav-link" aria- current="page" href="#">Home</a>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link active" href="pasien.php">Pasien</a>

                        </li>
                        <li class="nav-item">

                            <a class="nav-link active" href="#">User</a>

                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="row mt-3">
            <div class="col-sm">
                <h3>Tabel User</h3>
            </div>
        </div>
        <div class="row">
            <div class="col">

                <a href="tambahuser.php" class="btn btn-primary btn-sm d-flex justify-content-center">Tambah User</a>

            </div>
        </div>
        <div class="row mt-3">
            <div class="col">

                <table class="table table-striped table-hover table-sm">

                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Posisi</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    include 'koneksi.php';
                    $no = 1;
                    $hasil = $koneksi->query("SELECT * FROM user");
                    ?>

                    <?php
                    while ($row = $hasil->fetch_assoc()) {
                        ?>
                        <tr>
                            <td>
                                <?= $no++; ?>
                            </td>
                            <td>
                                <?= $row['nmUser']; ?>
                            </td>
                            <td>
                                <?= $row['Pass']; ?>
                            </td>
                            <td>
                                <?= $row['Posisi']; ?>
                            </td>
                            <td><a href="edituser.php?edit=<?= $row['nmUser']; ?>" class="btn btn-warning btn-sm">Edit</a> <a href="koneksi.php?nmUser=<?= $row['nmUser']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Ciee mau di Hapus?')">Hapus</a></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</body>

</html>