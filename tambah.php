<?php 
    include 'aset/header.php';
?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header bg-secondary text-white">
                    <h2>Tambah Data Siswa</h2>
                </div>
                <div class="card-body bg">
                    <form method="post" action="proses-tambah.php">
                        <div class="form-group">
                            <label for="NISN">NISN</label>
                            <input type="text" class="form-control" name="NISN" id="NISN" placeholder="Masukkan NISN siswa">
                        </div>
                        <div class="form-group">
                            <label for="Nama">Nama Lengkap</label>
                            <input type="text" class="form-control" name="Nama" id="Nama" placeholder="Masukkan nama lengkap">
                        </div>
                        <div class="form-group">
                            <label for="Jurusan">Jurusan</label>
                            <select name="Jurusan" class="form-control">
                                <option value="RPL">RPL</option>
                                <option value="TKJ">TKJ</option>
                                <option value="MM">MM</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Kelas">Kelas</label>
                            <select name="Kelas" class="form-control">
                                <option value="X">X</option>
                                <option value="XI">XI</option>
                                <option value="XII">XII</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Alamat">Alamat</label>
                            <input type="text" class="form-control" name="Alamat" id="Alamat" placeholder="Masukkan alamat">
                        </div>
                        <div class="form-group">
                            <label for="nilai_mw">Nilai Matpel Web</label>
                            <input type="number" class="form-control" name="nilai_mw" id="nilai_mw" placeholder="Masukkan nilai">
                        </div>
                        <div class="form-group">
                            <label for="nilai_mpbo">Nilai Matpel PBO</label>
                            <input type="number" class="form-control" name="nilai_mpbo" id="nilai_mpbo" placeholder="Masukkan nilai">
                        </div>
                        <div class="form-group">
                            <label for="nilai_mb">Nilai Matpel Basdat</label>
                            <input type="number" class="form-control" name="nilai_mb" id="nilai_mb" placeholder="Masukkan nilai">
                        </div>
                        <div class="form-group">
                            <label for="nilai_md">Nilai Matpel Desain</label>
                            <input type="number" class="form-control" name="nilai_md" id="nilai_md" placeholder="Masukkan nilai">
                        </div>
                        <div class="form-group">
                            <label for="nilai_mp">Nilai Matpel Progdas</label>
                            <input type="nilai_mp" class="form-control" name="nilai_mp" id="nilai_mp" placeholder="Masukkan nilai">
                        </div>
                        <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
    include 'aset/footer.php';
?>