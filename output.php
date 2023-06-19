<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <style>
        body{
            background:url(poto.jpg);
        }
    </style>
    <table border=1px>
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <TH>ALAMAT</TH>
            <TH>EMAIL</TH>
            <TH>KOTA</TH>
            <TH>PESAN</TH>
        </tr>
        <?php
        include 'koneksi.php';
        $no =1;
        $data = mysqli_query($koneksi,"SELECT * FROM table_wed");
        while($d =mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['txtnama'];?></td>
                <td><?php echo $d['txtalamat'];?></td>
                <td><?php echo $d['txtemail'];?></td>
                <td><?php echo $d['txtkota'];?></td>
                <td><?php echo $d['txtpesan'];?></td>
               
            </tr>
            <?php
        } 
        ?>
    </table>
</body>
<br>
<div class="balik-lagi">
<a href="wedding.html">Balik Awal</a>
</div>
<style>
    table{
        position: relative;
        left:30em;
    }
    .balik-lagi{
        width:100px;
       
    }
    a{ 
        box-shadow: 0 3px 3px rgba(0, 0, 0, 0.253);
        margin-top: 20px;  
        position: relative;
        left: 25em;
        font-size:20px; 
        border:1.5px solid;
        border-radius:200px;
        text-decoration:none;
        color:#000;
    }
</style>

</html>