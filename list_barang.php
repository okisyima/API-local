<?php
include("koneksi.php");
$sql = "SELECT * FROM barang";
$result = mysqli_query($conn, $sql);
if (!$result)
{
    echo("Error description: ".mysqli_error($conn));
}
$data = [];
while ($row = mysqli_fetch_object($result))
{
    $data['barang'][] = $row;
}
if (isset($_GET['printed']))
{
    echo '<pre>';
    echo json_encode($data, JSON_PRETTY_PRINT);
    echo '<pre>';
}
else
{
    echo json_encode($data);
}