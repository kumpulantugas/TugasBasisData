<?php 
    
    include 'konek.php';

    include '../config.php';
    session_start();

    $query = mysqli_query($db, 'SELECT * FROM hasil');
    $data = mysqli_fetch_array($query);

    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Selesai</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <h2 style="text-align: center;"><?php echo $_SESSION['universitas']; ?></h2>
   <table style="background-color: aqua;">
    <tr>
        <th colspan="4" style="text-align: center; width: 1500px; height: 50px; margin-top: 0px;">KESIAPAN PELAKSANAAN KERJA</th>
    </tr>
    <tr>
        <th style="text-align: center; width: 420px;">ITEM</th>
        <th style="text-align: center; width: 280px;">VALUE</th>
        <th style="text-align: center; width: 450px;">CATATAN REVIEWER</th>
        <th style="text-align: center;">GRADE PEMERIKSA</th>
    </tr>
    <table>
        <hr style="height: 2px;border-width:0;color:black;background-color:black">
    <tr>
        <td style="text-align: center;width: 420px;">RENCANA PELAKSANAAN PEMBELAJARAN</td>
        <td style="text-align: center;width: 280px;"><?php echo $data['nilai'];?></td>
        <td style="text-align: center;width: 450px;"><?php echo $data['catatan'];?></td>
        <td style="text-align: center;width: 173px;"><?php echo $data['opsi'];?></td>
    </tr>
    </table>
    <hr style="height: 2px;border-width:0;color:black;background-color:black">
    <table>
        <tr>
            <td style="text-align: center;width: 420px;">DESAIN KURIKULUM</td>
            <td style="text-align: center;width: 280px;">-</td>
            <td style="text-align: center;width: 450px;"><?php echo $data['nyatet'];?></td>
            <td style="text-align: center;width: 173px;"><?php echo $data['opsides'];?></td>
        </tr>
    </table>
    <hr style="height: 2px;border-width:0;color:black;background-color:black">
    <table>
        <tr>
            <td style="text-align: center;width: 420px;">JENIS KERJA SAMA</td>
            <td style="text-align: center;width: 280px;"><?php echo $data['kerjasama'];?></td>
            <td style="text-align: center;width: 450px;"><?php echo $data['catatjenis'];?></td>
            <td style="text-align: center;width: 173px;"><?php echo $data['opsijenis'];?></td>
        </tr>
    </table>
    <hr style="height: 2px;border-width:0;color:black;background-color:black">
    <table>
        <tr>
            <td style="text-align: center;width: 420px;">JUMLAH IJAZAH YANG AKAN DITERBITKAN</td>
            <td style="text-align: center;width: 280px;"><?php echo $data['ijazah'];?></td>
            <td style="text-align: center;width: 450px;"><?php echo $data['catatijazah'];?></td>
            <td style="text-align: center;width: 173px;"><?php echo $data['opsiijazah'];?></td>
        </tr>
    </table>
    <hr style="height: 2px;border-width:0;color:black;background-color:black">
    <table>
        <tr>
            <td style="text-align: center;width: 420px;">PENANDATANGANAN IJAZAH</td>
            <td style="text-align: center;width: 280px;"><p>Nama PT: <?php echo $data['namapt'];?></p><p>Jabatan PT: <?php echo $data['jabatpt'];?></p><p>Mitra PT: <?php echo $data['mitrapt'];?></p><p>Jabatan Mitra PT: <?php echo $data['jabmitpt'];?></p></td>
            <td style="text-align: center;width: 450px;"><?php echo $data['catatmitra'];?></td>
            <td style="text-align: center;width: 173px;"><?php echo $data['opsimitra'];?></td>
        </tr>
    </table>
    <hr style="height: 2px;border-width:0;color:black;background-color:black">
    <table>
        <tr>
            <td style="text-align: center;width: 420px;">KRIERIA CALON MAHASISWA</td>
            <td style="text-align: center;width: 280px;"><?php echo $data['nilaicalon'];?></td>
            <td style="text-align: center;width: 450px;"><?php echo $data['catatcalon'];?></td>
            <td style="text-align: center;width: 173px;"><?php echo $data['opsicalon'];?></td>
        </tr>
    </table>
    <hr style="height: 2px;border-width:0;color:black;background-color:black">
    <table>
        <tr>
            <td style="text-align: center;width: 420px;">PROSES SELEKSI</td>
            <td style="text-align: center;width: 280px;"><?php echo $data['nilaiseleksi'];?></td>
            <td style="text-align: center;width: 450px;"><?php echo $data['catatseleksi'];?></td>
            <td style="text-align: center;width: 173px;"><?php echo $data['opsiseleksi'];?></td>
        </tr>
    </table>
    <hr style="height: 2px;border-width:0;color:black;background-color:black">
    <table>
        <tr>
            <td style="text-align: center;width: 420px;">SKEMA PEMBIAYAAN</td>
            <td style="text-align: center;width: 280px;"><?php echo $data['nilaibayar'];?></td>
            <td style="text-align: center;width: 450px;"><?php echo $data['catatbayar'];?></td>
            <td style="text-align: center;width: 173px;"><?php echo $data['opsibayar'];?></td>
        </tr>
    </table>
    <hr style="height: 2px;border-width:0;color:black;background-color:black">
    <table>
        <tr>
            <td style="text-align: center;width: 420px;">PENJADWALAN PROGRAM KERJA SAMA</td>
            <td style="text-align: center;width: 280px;">-</td>
            <td style="text-align: center;width: 450px;"><?php echo $data['catatjadwal'];?></td>
            <td style="text-align: center;width: 173px;"><?php echo $data['opsijadwal'];?></td>
        </tr>
    </table>
    <hr style="height: 2px;border-width:0;color:black;background-color:black">
    <table>
        <tr>
            <td style="text-align: center;width: 420px;">SURAT KETERANGAN PENDAMPING IJAZAH (SKPI)</td>
            <td style="text-align: center;width: 280px;">-</td>
            <td style="text-align: center;width: 450px;"><?php echo $data['catatsurat'];?></td>
            <td style="text-align: center;width: 173px;"><?php echo $data['opsisurat'];?></td>
        </tr>
    </table>
    <hr style="height: 2px;border-width:0;color:black;background-color:black">
    <table>
        <tr>
            <td style="text-align: center;width: 420px;">KEBERLANJUTAN UNTUK STUDI LANJUT (DESKRIPSI)</td>
            <td style="text-align: center;width: 280px;"><?php echo $data['nilaistudi'];?></td>
            <td style="text-align: center;width: 450px;"><?php echo $data['catatstudi'];?></td>
            <td style="text-align: center;width: 173px;"><?php echo $data['opsistudi'];?></td>
        </tr>
    </table>
    <hr style="height: 2px;border-width:0;color:black;background-color:black">
    <table>
        <tr>
            <td style="text-align: center;width: 420px;">STUDI LANJUT MOA</td>
            <td style="text-align: center;width: 280px;"><?php echo $data['moa'];?></td>
            <td style="text-align: center;width: 450px;"><?php echo $data['catatmoa'];?></td>
            <td style="text-align: center;width: 173px;"><?php echo $data['opsimoa'];?></td>
        </tr>
    </table>
    <hr style="height: 2px;border-width:0;color:black;background-color:black">
</table>
</body>
</html>