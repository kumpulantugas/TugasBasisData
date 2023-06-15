<?php 
    
    include 'konek.php';
    
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
    <h1 style="text-align: center;">DATA BERHASIL DIREKAM. TAMPILKAN HASIL?</h1>
   <center><button onclick="location.href = 'hasil.php';">Tampilkan</button></center>

</body>
</html>