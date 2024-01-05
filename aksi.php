<?php

// panggil koneksi database 
include "koneksi.php";

// uji jika tombol simpan di klik 
if (isset($_POST['bsimpan'])) {

    // persiapan simpan data
    $simpan = mysqli_query($koneksi, "INSERT INTO title_flight(flt, reg, date, dep)
                                      VALUES('$_POST[tflt]',
                                             '$_POST[treg]',
                                             '$_POST[tdate]',
                                             '$_POST[tdep]') ");


    //jika simpan sukses 
    if ($simpan) {
        echo "<script>
                alert('Simpan data sukses!');
                document.location='index.php';
             </script>";
    }else{
        echo "<script>
                alert('Simpan data gagal!');
                document.location='index.php';
             </script>";
    }
}

// uji jika tombol ubah di klik 
if (isset($_POST['bubah'])) {

    // persiapan ubah data
    $ubah = mysqli_query($koneksi, "UPDATE title_flight SET 
                                                        flt = '$_POST[tflt]',
                                                        reg = '$_POST[treg]',
                                                        date = '$_POST[tdate]',
                                                        dep = '$_POST[tdep]'
                                                WHERE id_flight = '$_POST[id_flight]'
                                    
                                    ");


    //jika ubah sukses 
    if ($ubah) {
        echo "<script>
                alert('Ubah data sukses!');
                document.location='index.php';
             </script>";
    }else{
        echo "<script>
                alert('Ubah data gagal!');
                document.location='index.php';
             </script>";
    }
}


// uji jika tombol Hapus di klik 
if (isset($_POST['bhapus'])) {

    // persiapan hapus data
    $hapus = mysqli_query($koneksi, "DELETE FROM title_flight WHERE id_flight = '$_POST[id_flight]' ");


    //jika hapus sukses 
    if ($hapus) {
        echo "<script>
                alert('Hapus data sukses!');
                document.location='index.php';
             </script>";
    }else{
        echo "<script>
                alert('Hapus data gagal!');
                document.location='index.php';
             </script>";
    }
}
