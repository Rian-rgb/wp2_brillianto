<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Matakuliah</title>
     <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/mataKuliah.css">
</head>
<body>
    <h2>Form Data Matakuliah</h2>
    <div id="pesanError">
    <?php echo validation_errors(); ?>
    </div>
    <?php echo form_open('mataKuliah/cetak'); ?>
        <label for="kode">Kode Matakuliah:</label>
        <input type="text" name="kode" id="kode" value="<?php echo set_value('kode'); ?>"><br>

        <label for="nama">Nama Matakuliah:</label>
        <input type="text" name="nama" id="nama" value="<?php echo set_value('nama'); ?>"><br>

        <label for="sks">SKS:</label>
        <input type="text" name="sks" id="sks" value="<?php echo set_value('sks'); ?>"><br>

        <input type="submit" value="Submit">
    <?php echo form_close(); ?>
</body>
</html>
