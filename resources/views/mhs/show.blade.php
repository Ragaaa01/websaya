<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur Kontrol WebSaya.Com</title>
</head>
<body>
    @if (count($mhs) == 1)
    <p>Jumlah mahasiswa adalah satu</p>
    @elseif (count($mhs) == 2)
    <p>Jumlah mahasiswa adalah dua</p>
    @else
    <p>Jumlah mahasiswa adalah lebih dari satu</p>
    @endif
</body>
</html>