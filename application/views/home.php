<html>
<head>
    <title>Testing C4.5 Datamining</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>
<a href="<?php echo base_url('index.php/Home/insert/2'); ?>" type="button">Tambah Data</a>
<h2>Tabel Data Training</h2>
<table>
    <tr>
        <th>#</th>
        <th>Nama</th>
        <th>Usia</th>
        <th>Gender</th>
        <th>Status Marital</th>
        <th>Penghasilan</th>
        <th>Premi</th>
        <th>Frekuensi</th>
        <th>Rencana Bayar</th>
        <th>Masa Beban</th>
        <th>Kelas</th>
    </tr>
    <?php foreach ($trainings as $training){ ?>
    <tr>
        <th>#</th>
        <th><?php echo $training['nama']; ?></th>
        <th><?php echo $training['usia_ket']; ?></th>
        <th><?php echo $training['gender']; ?></th>
        <th><?php echo $training['status_marital']; ?></th>
        <th><?php echo $training['penghasilan']; ?></th>
        <th><?php echo $training['premi_ket']; ?></th>
        <th><?php echo $training['frekuensi_bayar']; ?></th>
        <th><?php echo $training['rencana_ket']; ?></th>
        <th><?php echo $training['masa_ket']; ?></th>
        <th><?php echo $training['kategori']; ?></th>
    </tr>
    <?php } ?>
</table>
<br>
<a href="<?php echo base_url('index.php/Home/insert/1'); ?>" type="button">Tambah Data</a>
<h2>Tabel Data Test</h2>
<table>
    <tr>
        <th>#</th>
        <th>Nama</th>
        <th>Usia</th>
        <th>Gender</th>
        <th>Status Marital</th>
        <th>Penghasilan</th>
        <th>Premi</th>
        <th>Frekuensi</th>
        <th>Rencana Bayar</th>
        <th>Masa Beban</th>
        <th>Kelas</th>
    </tr>
    <?php foreach ($tests as $test){ ?>
    <tr>
        <th>#</th>
        <th><?php echo $training['nama']; ?></th>
        <th>Usia</th>
        <th>Gender</th>
        <th>Status Marital</th>
        <th>Penghasilan</th>
        <th>Premi</th>
        <th>Frekuensi</th>
        <th>Rencana Bayar</th>
        <th>Masa Beban</th>
        <th>Kelas</th>
    </tr>
    <?php } ?>
</table>
</body>
</html>