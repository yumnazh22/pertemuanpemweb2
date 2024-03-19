<?php


require_once 'model.php';


if( !isset($_POST["submit"])    ){
    header("Location: index.php");
    exit;
}

$proses = $_POST["submit"];
$nama = $_POST["nama"];
$mata_kuliah = $_POST["matakuliah"];
$nilai_uts = $_POST["uts"];
$nilai_uas = $_POST["uas"];
$nilai_tugas = $_POST["tugas"];
$nilai_akhir = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;


echo 'Nama Mahasiswa : '  . $nama;
echo '<br> Pelajaran Kuliah : ' . $mata_kuliah;
echo '<br> Penilaian UTS : ' . $nilai_uts;
echo '<br> Penilaian UAS : ' . $nilai_uas;
echo '<br> Penilaian Tugas : ' . $nilai_tugas;

echo '<br> Penilaian Akhir : ' . $nilai_akhir;
echo '<br> DINYATAKAN : ' . kelulusan($nilai_akhir);
echo '<br> GRADE : ' . grade($nilai_akhir);









?>