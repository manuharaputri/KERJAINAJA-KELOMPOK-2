<!DOCTYPE html>
<html>
<head>
    <title>Data Mitra</title>
    <style>
        body { font-family: Arial; margin: 20px; }
        table { border-collapse: collapse; width: 90%; }
        th, td { border: 1px solid #ccc; padding: 10px; }
        th { background: #f2f2f2; }
        input, button { padding: 8px; }
    </style>
</head>
<body>

<h2>Data Mitra</h2>

<form method="GET" action="{{ route('mitra.index') }}">
    <input type="text" name="keahlian" placeholder="Cari keahlian..." value="{{ $keyword ?? '' }}">
    <button type="submit">Cari</button>
</form>

@if($keyword)
<p>Hasil pencarian: <b>{{ $keyword }}</b></p>
@endif

<table>
<tr>
    <th>Nama</th>
    <th>No WA</th>
    <th>Kota</th>
    <th>Keahlian</th>
    <th>Foto_ktp</th>
    <th>Foto_selfie</th>
    <th>Tanggal_daftar</th>
    <th>Layanan</th>
</tr>

@forelse($mitra as $m)
<tr>
    <td>{{ $m->nama_lengkap }}</td>
    <td>{{ $m->no_wa }}</td>
    <td>{{ $m->kota }}</td>
    <td>{{ $m->keahlian }}</td>
    <td>{{ $m->foto_ktp }}</td>
    <td>{{ $m->foto_selfie }}</td>
    <td>{{ $m->tanggal_daftar }}</td>
    <td>{{ $m->layanan }}</td>
</tr>
@empty
<tr>
    <td colspan="4">Data tidak ditemukan</td>
</tr>
@endforelse

</table>

</body>
</html>