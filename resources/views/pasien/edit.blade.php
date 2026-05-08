<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pasien</title>
</head>
<body>
    <!DOCTYPE html>
<html>
<head>
    <title>Edit Pasien</title>
</head>
<body>

<h1>Edit Data Pasien</h1>

<form action="/pasien/update/{{ $pasien->id_pasien }}" method="POST">
    @csrf

    <p>Nama Pasien</p>
    <input type="text" name="nama_pasien" value="{{ $pasien->nama_pasien }}">

    <p>Tanggal Lahir</p>
    <input type="date" name="tanggal_lahir" value="{{ $pasien->tanggal_lahir }}">

    <p>Alamat</p>
    <input type="text" name="alamat" value="{{ $pasien->alamat }}">

    <p>Pekerjaan</p>
    <input type="text" name="pekerjaan" value="{{ $pasien->pekerjaan }}">

    <p>No WhatsApp</p>
    <input type="text" name="no_whatsapp" value="{{ $pasien->no_whatsapp }}">

    <br><br>

    <button type="submit">Update</button>

</form>

</body>
</html>
</body>
</html>