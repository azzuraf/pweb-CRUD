<?php
$db = mysqli_connect("localhost", "root", "", "pendaftaran");

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

