<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman CRUD</title>
</head>
<body>
    <table border="4">
        <tr>
            <td>ID</td>
            <td>NAMA</td>
            <td>STATUS</td>
            <td>JURUSAN</td>
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
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>