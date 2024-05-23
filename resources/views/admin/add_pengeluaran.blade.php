<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Pengeluaran</title>
</head>

<body>
    <h2>Add Pengeluaran</h2>
    <form action="{{ route('pengeluaran.store') }}" method="POST">
        @csrf
        <label for="tgl_pengeluaran">Tanggal Pengeluaran:</label><br>
        <input type="date" id="tgl_pengeluaran" name="tgl_pengeluaran"><br>

        <label for="jumlah">Jumlah:</label><br>
        <input type="number" id="jumlah" name="jumlah"><br>

        <label for="sumber">Sumber:</label><br>
        <input type="text" id="sumber" name="sumber"><br>

        <label for="deskripsi">Deskripsi:</label><br>
        <textarea id="deskripsi" name="deskripsi"></textarea><br>

        <button type="submit">Submit</button>
    </form>
</body>

</html>