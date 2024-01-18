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
    <form action="aksi.php" method="post">
        <div class="container-lg">
            <h3>Tambahkan Data Preflight Checklist</h3>
            <div class="mb-3">
                <label class="form-label"><b>FLT. NO: IP</b></label>
                <input class="form-control" placeholder="Masukan Flight Number" name="tflt">
            </div>

            <div class="mb-3">
                <label class="form-label"><b>A/C REG.: PK</b></label>
                <input class="form-control" placeholder="Masukan No Registrasi Pesawat" name="treg">
            </div>
            <div class="mb-3">
                <label class="form-label"><b>DATE</b></label>
                <input type="date" class="form-control" placeholder="" name="tdate">
            </div>
            <div class="mb-3">
                <label class="form-label"><b>DEP. A/P</b></label>
                <input class="form-control" placeholder="Masukan Kode Departure" name="tdep">
            </div>
            <div class="mb-3">
                <label class="form-label"><b>PRE/POST FLIGHT</b></label>
                <select class="form-select form-select-sm mb-3" aria-label="Large select example" name="tprs" id="pilihan">
                    <option selected>Pilihan</option>
                    <!-- <option value="1">PreFLIGHT</option>
                <option value="2">PostFLIGHT</option> -->
                    // Tampilkan data dalam elemen select
                    <?php
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value="' . $row['pilihan'] . '">' . $row['pilihan'] . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label"><b>Emergency Equipment</b></label>
            </div>
            <div class="row mb-5">
                <div class="col-2">
                    <label for="emer1">
                        <input type="checkbox" name="emergency[]" id="emer1" value="Lav Smoke Detector" style="margin-left: 5px;"> Lav Smoke Detector</label>
                </div>
                <div class="col-3">
                    <label for="emer2">
                        Quanty <input type="number" name="emergency[]" id="emer2" value="Quanty" style="margin-left: 5px;">
                    </label>
                </div>
                <div class="col-1">
                    <label for="emer3">
                        <input type="checkbox" name="emergency[]" id="emer3" value="S" > S</label>
                </div>
                <div class="col-1">
                    <label for="emer4">
                        <input type="checkbox" name="emergency[]" id="emer4" value="U/S" > U/S</label>
                </div>
                <div class="col-3 ">
                    <label for="emer5">
                        Remark <input type="text" name="emergency[]" id="emer5" value="" style="margin-left: 5px;"> 
                    </label>
                </div>
            </div>
            <div class="row mb-5 ">
                <div class="col-2">
                    <label for="emer1">
                        <input type="checkbox" name="emergency[]" id="emer1" value="Lav Built in Firex" style="margin-left: 5px;"> Lav Built in Firex</label>
                </div>
                <div class="col-3">
                    <label for="emer2">
                        Quanty <input type="number" name="emergency[]" id="emer2" value="Quanty" style="margin-left: 5px;">
                    </label>
                </div>
                <div class="col-1">
                    <label for="emer3">
                        <input type="checkbox" name="emergency[]" id="emer3" value="S" > S</label>
                </div>
                <div class="col-1">
                    <label for="emer4">
                        <input type="checkbox" name="emergency[]" id="emer4" value="U/S" > U/S</label>
                </div>
                <div class="col-3">
                    <label for="emer5">
                        Remark <input type="text" name="emergency[]" id="emer5" value="" style="margin-left: 5px;"> 
                    </label>
                </div>
            </div>
            <div class="row mb-5 "> 
                <div class="col-2">
                    <label for="emer1">
                        <input type="checkbox" name="emergency[]" id="emer1" value="Halon / BCF" style="margin-left: 5px;"> Halon / BCF</label>
                </div>
                <div class="col-3">
                    <label for="emer2">
                        Quanty <input type="number" name="emergency[]" id="emer2" value="Quanty" style="margin-left: 5px;">
                    </label>
                </div>
                <div class="col-1">
                    <label for="emer3">
                        <input type="checkbox" name="emergency[]" id="emer3" value="S" > S</label>
                </div>
                <div class="col-1">
                    <label for="emer4">
                        <input type="checkbox" name="emergency[]" id="emer4" value="U/S" > U/S</label>
                </div>
                <div class="col-3">
                    <label for="emer5">
                        Remark <input type="text" name="emergency[]" id="emer5" value="" style="margin-left: 5px;"> 
                    </label>
                </div>
            </div>
            



            <div class="mt-3">
                <div class="position-relative">
                    <div class="position-absolute top-100 start-50 translate-middle">
                        <!-- <button type="submit" class="btn btn-success" formaction="index.php">Simpan</button> -->
                        <!-- <button type="button" class="btn btn-danger">Keluar</button> -->
                        <button type="submit" class="btn btn-success" name="bsimpan">Simpan</button>
                        <!-- <a href="" class="btn btn-success" tabindex="-1" role="button" aria-disabled="true" name="bsimpan">Simpan</a> -->
                        <a href="index.php" class="btn btn-danger" tabindex="-1" role="button" aria-disabled="true">Keluar</a>

                    </div>
                </div>
            </div>




            <!-- <table class="table table-md table-responsive table-bordered position-absolute top-50 start-50 translate-middle">
                <tr>
                    <th style="width: 100px;">FLT.NO:IP</th>
                    <td><input type="text" name="" id=""></td>
                </tr>
                <tr>
                    <th style="width: 100px;">A/C REG:PK</th>
                    <td><input type="text" name="" id=""></td>
                </tr>
                <tr>
                    <th style="width: 100px;">DATE</th>
                    <td><input type="text" name="" id=""></td>
                </tr>
                <tr>
                    <th style="width: 100px;">FLT.NO:IP</th>
                    <td><input type="text" name="" id=""></td>
                </tr>
            </table> -->
        </div>
    </form>



    <!-- content end -->





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>