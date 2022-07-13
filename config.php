<?php 
    $ host = " host lokal ";
    $ pengguna = " akar ";
    $ kata sandi = "";
    $ db = " nilaimahasiswa ";

    $ sambungan = mysqli_connect( $ host , $ user , $ password , $ db ) ;

    if (mysqli_connect_error()) {
        echo " koneksi gagal ". mysqli_connect_error();
    }
?>
