<?php

// buat koneksi database
include "koneksi.php";

?>

<html>

<head>
    <title>Document</title>
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
    <?php

    // persiapan menampikan data
    $no = 1;
    $tampil = mysqli_query($koneksi, "SELECT * FROM title_flight ORDER BY id_flight DESC");
    while ($data = mysqli_fetch_array($tampil)) :


    ?>

        <div class="container-fluid" id="editModal<?= $no ?>">
            <form action="aksi2.php" method="post">
                <div class="container-lg">
                    <h3>Edit Data Preflight Checklist</h3>

                    <!-- Data yang Sudah Ada -->
                    <div class="mb-3">
                        <label class="form-label"><b>FLT. NO: IP</b></label>
                        <input class="form-control" placeholder="Masukan Nomor Penerbangan" name="tflt" value="<?php echo $dataSudahAda['tflt']; ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label"><b>A/C REG.: PK</b></label>
                        <input class="form-control" placeholder="Masukan Nomor Registrasi Pesawat" name="treg" value="<?php echo $dataSudahAda['treg']; ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label"><b>TANGGAL</b></label>
                        <input type="date" class="form-control" name="tdate" value="<?php echo $dataSudahAda['tdate']; ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label"><b>DEP. A/P</b></label>
                        <input class="form-control" placeholder="Masukan Kode Keberangkatan" name="tdep" value="<?php echo $dataSudahAda['tdep']; ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label"><b>PRE/POST FLIGHT</b></label>
                        <select class="form-select form-select-sm mb-3" aria-label="Pilih contoh besar" name="tprs" id="pilihan">
                            <?php
                            while ($row = $hasil->fetch_assoc()) {
                                $selected = ($row['pilihan'] == $dataSudahAda['tprs']) ? 'selected' : '';
                                echo '<option value="' . $row['pilihan'] . '" ' . $selected . '>' . $row['pilihan'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label"><b>Peralatan Darurat</b></label>
                    </div>

                    <!-- Data Peralatan Darurat yang Sudah Ada -->
                    <div class="row mb-5">
                        <!-- Anda perlu mengulang data peralatan darurat yang sudah ada dan mengisikan nilai ke dalam formulir -->
                        <?php foreach ($dataPeralatanDarurat as $peralatan) : ?>
                            <div class="col-2">
                                <label for="emer1">
                                    <input type="checkbox" name="peralatan_darurat[]" id="emer1" value="<?php echo $peralatan['peralatan']; ?>" <?php echo ($peralatan['status'] == 'checked') ? 'checked' : ''; ?> style="margin-left: 5px;"> <?php echo $peralatan['peralatan']; ?>
                                </label>
                            </div>
                            <div class="col-3">
                                <label for="emer2">
                                    Jumlah <input type="number" name="peralatan_darurat_jumlah[]" id="emer2" value="<?php echo $peralatan['jumlah']; ?>" style="margin-left: 5px;">
                                </label>
                            </div>
                            <div class="col-1">
                                <label for="emer3">
                                    <input type="checkbox" name="peralatan_darurat_status[]" id="emer3" value="S" <?php echo ($peralatan['status'] == 'S') ? 'checked' : ''; ?>> S
                                </label>
                            </div>
                            <div class="col-1">
                                <label for="emer4">
                                    <input type="checkbox" name="peralatan_darurat_status[]" id="emer4" value="U/S" <?php echo ($peralatan['status'] == 'U/S') ? 'checked' : ''; ?>> U/S
                                </label>
                            </div>
                            <div class="col-3 ">
                                <label for="emer5">
                                    Catatan <input type="text" name="peralatan_darurat_catatan[]" id="emer5" value="<?php echo $peralatan['catatan']; ?>" style="margin-left: 5px;">
                                </label>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <input type="submit" class="btn btn-primary" value="Perbarui">
                </div>
            </form>

        </div>

    <?php endwhile; ?>

    <!-- content end -->





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>