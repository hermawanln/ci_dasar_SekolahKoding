<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman CRUD</title>
</head>
<body>
    <a href="<?php echo base_url(); ?>crud/add">Create</a>
    <table border="4">
        <tr>
            <td>ID</td>
            <td>NAMA</td>
            <td>STATUS</td>
            <td>JURUSAN</td>
            <td>ACTION</td>
        </tr>
        <!-- Cara 1 : menggunakan result biasa -->
        <!-- <?php foreach ($content->result() as $key): ?>
            <tr>
                <td><?php echo $key->id ?></td>
                <td><?php echo $key->nama ?></td>
                <td><?php echo $key->status ?></td>
                <td><?php echo $key->jurusan ?></td>
            </tr>
        <?php endforeach ?> -->

        <!-- Cara 2 : menggunakan result_array -->
        <?php foreach ($content->result_array() as $key): ?>
            <tr>
                <td><?php echo $key['id'] ?></td>
                <td><?php echo $key['nama'] ?></td>
                <td><?php echo $key['status'] ?></td>
                <td><?php echo $key['jurusan'] ?></td>
                <td>
                    <a href="<?php base_url() ?>crud/update/<?php echo $key['id'] ?>">Edit</a>
                    <a href="<?php base_url() ?>crud/delete/<?php echo $key['id'] ?>"
                    onclick="return confirm('Yakin hapus ?')">Delete</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>