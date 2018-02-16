<html>
<head>
    <title>Testing C4.5 Datamining</title>
</head>
<body>
<form action="<?php echo base_url('index.php/Home/submit/'.$tipe); ?>" method="post">
    <label>Nama : </label><br>
    <input name="nama" type="text"><br>
    <label>Usia : </label><br>
    <input name="usia" type="text"><br>
    <label>Jenis Kelamin : </label><br>
    <input name="gender" type="radio" value="1"> Laki-Laki <input name="gender" type="radio" value="2"> Perempuan <br>
    <label>Status : </label><br>
    <input name="status" type="radio" value="1"> Kawin <input name="status" type="radio" value="2"> Belum Kawin <br>
    <label>Penghasilan : </label><br>
    <input name="gaji" type="radio" value="1"> <2.5 Juta <input name="gaji" type="radio" value="2"> 2.5 - 5 Juta <input type="radio" name="gaji" value="3"> >5 Juta <br>
    <label>Premi : </label><br>
    <input name="premi" type="text"><br>
    <label>Frekuensi Pembayaran : </label><br>
    <input name="frekuensi" type="radio" value="1"> Bulanan <input name="frekuensi" type="radio" value="2"> Triwulan <input type="radio" name="frekuensi" value="3"> Tahunan <br>
    <label>Rencana Pembayaran : </label><br>
    <input name="rencana" type="text"><br>
    <label>Masa Pembebanan : </label><br>
    <input name="masa" type="text"><br>
    <button type="submit" value="submit">Submit</button>
</form>
</body>
</html>