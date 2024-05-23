<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Pengeluaran</title>
</head>

<body>
    <h2>Delete Pengeluaran</h2>
    <form action="{{ route('pengeluaran.destroy', $id_pengeluaran) }}" method="POST">
        @csrf
        @method('DELETE')
        <p>Anda yakin ingin menghapus pengeluaran ini?</p>
        <button type="submit">Delete</button>
    </form>
</body>

</html>