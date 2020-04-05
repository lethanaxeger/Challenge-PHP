<?php

    include 'koneksi.php';

    if(isset($_POST['simpan']))
    {
        $nisn = $_POST['NISN'];
        $nama = $_POST['Nama'];
        $jurusan = $_POST['Jurusan'];
        $kelas = $_POST['Kelas'];
        $alamat = $_POST['Alamat'];
        $nilai_mw = $_POST['nilai_mw'];
        $nilai_mpbo = $_POST['nilai_mpbo'];
        $nilai_mb = $_POST['nilai_mb'];
        $nilai_md = $_POST['nilai_md'];
        $nilai_mp = $_POST['nilai_mp'];

        $jumlah = $nilai_mw + $nilai_mpbo + $nilai_mb + $nilai_md + $nilai_mp;
        $rata = $jumlah / 5;

    if($rata >= 90)
    {
        $predikat ='A';
        $keterangan ='Excellent';
    }
    else if($rata >= 80)
    {
        $predikat ='B';
        $keterangan ='Baik';
    }
    else if($rata >= 70)
    {
        $predikat ='C';
        $keterangan ='Cukup';
    }
    else if($rata >= 60)
    {
        $predikat ='D';
        $keterangan ='Kurang';
    }
    else if($rata<= 50)
    {
        $predikat='E';
        $keterangan='Rendah';
    }
    $sql = "INSERT INTO siswa (NISN, Nama, Jurusan, Kelas, Alamat, nilai_mw, nilai_mpbo, nilai_mb, nilai_md, nilai_mp, rata, predikat, keterangan)
            VALUES ('$nisn', '$nama', '$jurusan', '$kelas', '$alamat', '$nilai_mw', '$nilai_mpbo', '$nilai_mb', '$nilai_md', '$nilai_mp', '$rata', '$predikat', '$keterangan')";

    $res = mysqli_query($koneksi, $sql);

    $count = mysqli_affected_rows($koneksi);

    if($count == 1)
    {
    header("Location: index.php");
    }
    else
    {
    header("Location: tambah.php");
    }
}
else
{
    header("Location: tambah.php");
}

?>