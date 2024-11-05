<!DOCTYPE html>
<html>
<head>
    <title>Data Anggota</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2>Data Anggota</h2>
        <a class="btn btn-success" href="create.php">Tambah Data</a>

        <br><br>

        <?php
        include("koneksi.php");
        $query = "SELECT * FROM anggota ORDER BY id DESC";
        $result = mysqli_query($koneksi, $query);
        ?>

        <table class="table table-light">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>No. Telp</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                while($row = mysqli_fetch_assoc($result)) {
                    $kelamin = ($row["jenis_kelamin"] == 'L') ? 'Laki-laki' : 'Perempuan';
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row["nama"]; ?></td>
                    <td><?php echo $kelamin; ?></td>
                    <td><?php echo $row["alamat"]; ?></td>
                    <td><?php echo $row["no_telp"]; ?></td>
                    <td>
                        <a class="btn btn-primary" href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a>
                        <a class="btn btn-danger" href="#" data-toggle="modal" data-target="#hapusModal<?php echo $row["id"]; ?>">Hapus</a>
                    </td>
                </tr>
                <div class="modal fade" id="hapusModal<?= $row["id"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                             <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                            <div class="modal-body">
                        Apakah Anda yakin ingin menghapus data dengan nama "<?= $row["nama"] ?>"?
                    </div>
                    <div class="modal-footer">
                <a class="btn btn-danger" href="proses.php?aksi=hapus&id=<?= $row["id"] ?>">Hapus</a>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
      </div>
    </div>
  </div>
</div>