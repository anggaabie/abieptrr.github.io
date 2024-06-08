<!DOCTYPE html>
<html lang="en">
<?php 	
include 'database.php';
$db = new si_kereta_api();

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stasiun</title>
</head>
<body>
<table border="1"> 
    <tr>
        <td>No</td>
        <td>Nama Stasiun</td>
        <td>Alamat</td>
        <td>Email</td>
        <td>Telepon</td>
        <td>Jumlah Jalur</td>
        <td>Tanggal Pembangunan</td>
    </tr>
    <?php
    $no= 1;
    foreach ($db->tampil_data() as $d){
    ?>
    <tr>
        <td>
            <?php echo $no++; ?>
        </td>
        <td>
            <?php echo $d['nama_stasiun']; ?>
        </td>
        <td>
            <?php echo $d['alamat']; ?>
        </td>
        <td>
            <?php echo $d['email']; ?>
        </td>
        <td>
            <?php echo $d['telepon']; ?>
        </td>
        <td>
            <?php echo $d['jumlah_jalur']; ?>
        </td>
        <td>
            <?php echo $d['tgl_pembangunan']; ?>
        </td>
    </tr>
    <?php
    }
    ?>
</table>
</body>
</html>