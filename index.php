
<?php

include 'aset/header.php';

?>

<?php
include 'koneksi.php';

$sql = "SELECT * FROM siswa";


$res = mysqli_query($koneksi,$sql);
$anggota = array();

while ($data = mysqli_fetch_assoc($res)){
    $anggota[] = $data;
}
?>

<style>
    thead{
        background-color: #FFA07A;
        color: white;
    }
    tbody{
        background-color: grey;
        color: white;
    }
</style>
<div class="container">
    <div class="row mt-4">
        <div class="col-md">
            <div class="card bg-dark">
                <div class="card-header">
                    <h2 class="card-title text-white"><i class="fas fa-edit"></i>Data Siswa</h2>
                </div>
                <div class="card-body">
                    <table class="table table-striped ">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">NISN</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jurusan</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no = 1;
                                foreach ($anggota as $p ) { ?>
                                <tr>
                                    <th scope="row"><?= $no ?></th>
                                    <td><?= $p['NISN'] ?></td>
                                    <td><?= $p['Nama'] ?></td>
                                    <td><?= $p['Jurusan'] ?></td>
                                    <td><?= $p['Kelas'] ?></td>
                                    <td><?= $p['Alamat'] ?></th>
                                    <td>
                                        <a href="detail.php" class="badge badge-primary">DETAIL</a>
                                        <a href="hapus.php" class="badge badge-danger">HAPUS</a>
                                    </td>
                                </tr>
                            <?php
                                $no++;
                                }
                            ?>
                        </tbody>
                    </table>
                    <a href="tambah.php"><button type="submit" class="btn btn-success">Tambah Data Siswa</button></a>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include 'aset/footer.php';
?>