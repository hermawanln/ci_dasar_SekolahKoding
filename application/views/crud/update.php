<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Data</title>
</head>
<body>
<h2>Edit Data</h2>
    <?php foreach ($content->result() as $key): ?> 
        <form action="<?php echo base_url(); ?>crud/action_update/<?php echo $key->id ?>" method="post">
            <input type="text" name="nama" placeholder="Masukan Nama" value="<?php echo $key->nama ?>"><br>
            <input type="text" name="status" placeholder="Masukan Status" value="<?php echo $key->status ?>"><br>
            <input type="text" name="jurusan" placeholder="Masukan Jurusan" value="<?php echo $key->jurusan ?>"><br><br>
            <input type="submit" value="Save">
        </form>
    <? endforeach ?>
</body>
</html> 