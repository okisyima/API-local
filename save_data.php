<?php
include("koneksi.php");

if (isset($_POST['nama']))
{
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    if (isset($_POST['id']))
    {
        $id = (int)$_POST['id'];
        $sql = "UPDATE barang SET nama ='".$nama."',";
        $sql .= "harga='".$harga."' WHERE id=".$id;
    }
    else
    {
        $sql = "INSERT INTO barang(nama, harga)";
        $sql .= "VALUE('".$nama."','".$harga."')";
    }

    $query = mysqli_query($conn, $sql);
    if(!$query)
    {
        echo("Error description: ".mysqli_error($conn));
    }
    else
    {
        echo "Sukses menyimpan data."
    }
}