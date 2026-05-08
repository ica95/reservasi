<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pasien</title>
</head>
<body>
    <h1>Tambah Data Pasien</h1>
   @if ($errors->any())
    <div style="color:red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="/pasien/store" method="POST">
    @csrf

    <p>Nama Pasien</p>
    <input type="text" name="nama_pasien">

    <p>Tanggal Lahir</p>
    <input type="date" name="tanggal_lahir">

    <p>Alamat</p>
    <input type="text" name="alamat">

    <p>Pekerjaan</p>
    <input type="text" name="pekerjaan">

    <p>No WhatsApp</p>
    <input type="text" name="no_whatsapp">


    <br><br>

    <button type="submit">Simpan</button>

</form>
</body>
</html>
