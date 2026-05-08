<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Laporan</title>
</head>
<body>
    <h1>Data Laporan</h1>
    <table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Nama Pasien</th>
        <th>Tanggal Lahir</th>
        <th>Alamat</th>
        <th>Pekerjaan</th>
        <th>No WhatsApp</th>
    </tr>

    @foreach($pasien as $p)
    <tr>
        <td>{{ $p->id_pasien }}</td>
        <td>{{ $p->nama_pasien }}</td>
        <td>{{ $p->tanggal_lahir }}</td>
        <td>{{ $p->alamat }}</td>
        <td>{{ $p->pekerjaan }}</td>
        <td>{{ $p->no_whatsapp }}</td>
    </tr>
    @endforeach

</table>
</body>
</html>