<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="">Nama</label>
        <select name="institution" id="">
            <option selected disabled>Pilih Institusi</option>
            @foreach ($intitution as $institusi)
                <option value="{{ $institusi->institution_id }}">{{ $institusi->institution_name }}</option>
            @endforeach
        </select><br>
        <label for="">UID</label>
        <input type="text"><br>

        <label for="">Nama</label>
        <input type="text"><br>

        <label for="">Jenis Kelamin</label>
        <select name="institution" id="">
            <option selected disabled>Pilih Jenis Kelamin</option>
            <option value="L">Laki-Laki</option>
            <option value="P">Perempuan</option>
        </select><br>

        <label for="">Posisi</label>
        <select name="institution" id="">
            <option selected disabled>Pilih Posisi</option>
            <option value="Siswa">Siswa</option>
            <option value="Guru">Guru</option>
            <option value="Santri">Santri</option>
            <option value="Karyawan">Karyawan</option>
        </select><br>

        <label for="">Kelas</label>
        <input type="text"><br>

        <label for="">Alamat</label>
        <input type="text"><br>

        <label for="">Deskripsi</label>
        <input type="text"><br>

    </form>
</body>

</html>
