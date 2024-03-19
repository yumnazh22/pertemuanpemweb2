<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <form action="hasil_nilai.php" method="post">
                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">Nama Lengkap Mahasiswa</label>
                    <div class="col-8">
                        <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="matakuliah" class="col-4 col-form-label">Mata Kuliah</label>
                    <div class="col-8">
                        <select id="matakuliah" name="matakuliah" class="custom-select">
                            <option value="">Pilih Mata Kuliah</option>
                            <option value="Bahasa Inggris">Bahasa Inggris</option>
                            <option value="Web Programming 2">Web Programming 2</option>
                            <option value="Data base">Data base</option>
                            <option value="Komunikasi Efektif">Komunikasi Efektif</option>
                            <option value="Jaringan Komputer">Jaringan Komputer</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="uts" class="col-4 col-form-label">Penilaian UTS</label>
                    <div class="col-8">
                        <input id="uts" name="uts" placeholder="Nilai UTS" type="text" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="uas" class="col-4 col-form-label">Penilaian UAS</label>
                    <div class="col-8">
                        <input id="uas" name="uas" placeholder="Nilai UAS" type="text" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tugas" class="col-4 col-form-label">Penilaian Tugas</label>
                    <div class="col-8">
                        <input id="tugas" name="tugas" placeholder="Nilai Tugas" type="text" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button id="submit" name="submit" type="submit"  class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
            <hr>
        </div>
    </div>
</div>
</body>
</html>