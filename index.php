<?php

// buat koneksi database
include "koneksi.php";

?>



<html>

<head>
    <title>Dashboarda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid" style="background-color: slategray" ;>
            <a class="navbar-brand" href="index.php"><img src="pelita.png" alt="" style="width: 100px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Preflight Checklist</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- content -->

    <div class="container-fluid">

        <!-- Button trigger modal -->
        <a href="input.php">
            <button type="button" class="btn btn-primary">
                Tambahkan Data
            </button>
        </a>

        <!-- Modal -->
        <!-- <div class="modal fade modal-xl" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambahkan Data Preflight Checklist</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="POST" action="aksi.php">
                        <div class="modal-body ">

                            <div class="mb-3">
                                <label class="form-label">FLT. NO: IP</label>
                                <input class="form-control" placeholder="" name="tflt">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">A/C REG.: PK</label>
                                <input class="form-control" placeholder="" name="treg">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">DATE</label>
                                <input type="date" class="form-control" placeholder="" name="tdate">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">DEP. A/P</label>
                                <input class="form-control" placeholder="" name="tdep">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">PRE/POST FLIGHT</label>
                                <select class="form-select form-select-sm mb-3" aria-label="Large select example">
                                    <option selected>pilihan</option>
                                    // Tampilkan data dalam elemen select
                                    <?php
                                    while ($row = $result->fetch_assoc()) {
                                        echo '<option value="' . $row['id'] . '">' . $row['pilihan'] . '</option>';
                                    }
                                    ?>

                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Emergency Equipment</label>
                            </div>
                            <div class="row ">
                                <table class="table table-bordered">
                                    <tr>
                                        <td style="width: 200px;">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Lav. Smoke Detector
                                                </label>
                                            </div>
                                        </td>
                                        <td style="width: 300px;">
                                            <label class="form-label">Quanty</label>
                                            <input type="text" name="" id="">
                                        </td>
                                        <td>
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-label">S</label>
                                        </td>
                                        <td>
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-label">U/S</label>
                                        </td>
                                        <td>
                                            <label class="form-label">Remark</label>
                                            <input type="text" name="" id="">
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="row">
                                <table class="table table-bordered">
                                    <tr>
                                        <td style="width: 200px;">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Lav. Built in Firex
                                                </label>
                                            </div>
                                        </td>
                                        <td style="width: 300px;">
                                            <label class="form-label">Quanty</label>
                                            <input type="text" name="" id="">
                                        </td>
                                        <td>
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-label">S</label>
                                        </td>
                                        <td>
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-label">U/S</label>
                                        </td>
                                        <td>
                                            <label class="form-label">Remark</label>
                                            <input type="text" name="" id="">
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="row">
                                <table class="table table-bordered">
                                    <tr>
                                        <td style="width: 200px;">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Halon / BCF
                                                </label>
                                            </div>
                                        </td>
                                        <td style="width: 300px;">
                                            <label class="form-label">Quanty</label>
                                            <input type="text" name="" id="">
                                        </td>
                                        <td>
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-label">S</label>
                                        </td>
                                        <td>
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-label">U/S</label>
                                        </td>
                                        <td>
                                            <label class="form-label">Remark</label>
                                            <input type="text" name="" id="">
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="row">
                                <table class="table table-bordered">
                                    <tr>
                                        <td style="width: 200px;">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    H2O
                                                </label>
                                            </div>
                                        </td>
                                        <td style="width: 300px;">
                                            <label class="form-label">Quanty</label>
                                            <input type="text" name="" id="">
                                        </td>
                                        <td>
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-label">S</label>
                                        </td>
                                        <td>
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-label">U/S</label>
                                        </td>
                                        <td>
                                            <label class="form-label">Remark</label>
                                            <input type="text" name="" id="">
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="row">
                                <table class="table table-bordered table-responsive">
                                    <tr>
                                        <td style="width: 200px;">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Megaphone
                                                </label>
                                            </div>
                                        </td>
                                        <td style="width: 300px;">
                                            <label class="form-label">Quanty</label>
                                            <input type="text" name="" id="">
                                        </td>
                                        <td>
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-label">S</label>
                                        </td>
                                        <td>
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-label">U/S</label>
                                        </td>
                                        <td>
                                            <label class="form-label">Remark</label>
                                            <input type="text" name="" id="">
                                        </td>
                                    </tr>
                                </table>
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="bsimpan">Simpan</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Keluar</button>
                        </div>
                    </form>

                </div>
            </div>
        </div> -->


        <table class="table table-dark table-responsive table-bodered table-striped-columns mt-2 text-center">
            <thead class="table-secondary">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">FLT. NO: IP</th>
                    <th scope="col">A/C REG.: PK</th>
                    <th scope="col">DATE</th>
                    <th scope="col">DEP. A/P</th>
                    <th scope="col">ACTION</th>
                </tr>
            </thead>
            <tbody class="table-light">

                <?php

                // persiapan menampikan data
                $no = 1;
                $tampil = mysqli_query($koneksi, "SELECT * FROM title_flight ORDER BY id_flight ASC");
                while ($data = mysqli_fetch_array($tampil)) :
 

                ?>
                    <tr>
                        <th scope="row"><?= $no++ ?></th>
                        <td><?= $data['flt'] ?></td>
                        <td><?= $data['reg'] ?></td>
                        <td><?= $data['date'] ?></td>
                        <td><?= $data['dep'] ?></td>
                        <td>
                            <a href="view.php?hal=edit&id=<?= $data['id_flight'] ?>" class="btn btn-info">View</a>
                            <a href="edit.php?hal=edit&id=<?= $data['id_flight'] ?>" class="btn btn-warning">Edit</a>
                            <a href="" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $no ?>">Hapus</a>
                        </td>
                    </tr>

                    <!-- Modal Edit -->
                    <!-- <div class="modal fade modal-xl" id="editModal<?= $no ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Preflight Checklist</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form method="POST" action="aksi.php">
                                    <input type="hidden" name="id_flight" value="<?= $data['id_flight'] ?>">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label class="form-label">FLT. NO: IP</label>
                                            <input class="form-control" placeholder="" name="tflt" value="<?= $data['flt'] ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">A/C REG.: PK</label>
                                            <input class="form-control" placeholder="" name="treg" value="<?= $data['reg'] ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">DATE</label>
                                            <input type="date" class="form-control" placeholder="" name="tdate" value="<?= $data['date'] ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">DEP. A/P</label>
                                            <input class="form-control" placeholder="" name="tdep" value="<?= $data['dep'] ?>">
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label class="form-label">PRE/POST FLIGHT</label>
                                            <select class="form-select form-select-sm mb-3" aria-label="Large select example">
                                                <option selected>pilihan</option>
                                                // Tampilkan data dalam elemen select
                                                <?php
                                                while ($row = $result->fetch_assoc()) {
                                                    echo '<option value="' . $row['id'] . '">' . $row['pilihan'] . '</option>';
                                                }
                                                ?>

                                            </select>
                                        </div>


                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" name="bubah">Edit</button>
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Exit</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div> -->

                    <!-- Modal Delete -->
                    <div class="modal fade modal-lg" id="deleteModal<?= $no ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi Hapus Data Preflight Checklist</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form method="POST" action="aksi.php">
                                    <input type="hidden" name="id_flight" value="<?= $data['id_flight'] ?>">
                                    <div class="modal-body">

                                        <h5 class="text-center">
                                            Apakah anda yakin ingin menghapus data ini? <br>
                                            <span class="text-danger"> <?= $data['flt'] ?> </span>

                                        </h5>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" name="bhapus">Delete</button>
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Exit</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>


                <?php endwhile; ?>
            </tbody>
        </table>
    </div>


    <!-- content end -->





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>