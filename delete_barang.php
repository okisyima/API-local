<?php
include("koneksi.php");
$id = (int)$_POST['id'];
$sql = "DELETE FROM barang WHERE id=".$id;
$result = mysqli_query($conn, $sql);
if(!$result)
{
    echo("Error desciprtion: ".mysqli_error($conn));
}
else
{
    echo "Sukses delete data."
}
