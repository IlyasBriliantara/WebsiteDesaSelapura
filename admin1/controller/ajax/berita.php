<?php 
usleep(500000);
require '../beritaController.php.php';

$keyword = $_GET["keyword"];

$query = "SELECT * FROM berita
            WHERE
          judul LIKE '%$keyword%' OR
          simpelberita LIKE '%$keyword%' OR
          isiberita LIKE '%$keyword%'
        ";
$beita = query($query);
?>

<table class="table">
      <thead>
        <tr>
          <th>No</th>
          <th>Judul Berita</th>
          <th>Gambar</th>
          <th>simpel Berita</th>
          <th>Isi Berita</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1; ?>
        <?php foreach ($berita as $info) : ?>
          <tr>
            <td><?= $no; ?></td>
            <td><?= $info["judul"]; ?></td>
            <td><img src="assets/img/<?= $info["gambar"]; ?>" width="50"></td>
            <td><?= $info["simpelberita"]; ?></td>
            <td><?= $info["isiberita"]; ?></td>
            <td>
              <a href="pages/HapusBerita.php?id=<?= $info["id"]; ?>" onclick="return confirm('yakin?');"><button name="submit" id="submit" class="btn btn-primary  btn-block" type="submit">Hapus</button></a>
              <a href="pages/editBerita.php?id=<?= $info["id"]; ?>"><button name="submit" id="submit" class="btn btn-primary btn-block" type="submit">Edit</button></a>
            </td>
          </tr>
          <?php $no++; ?>
        <?php endforeach; ?>
      </tbody>
    </table>