<!-- resources/views/barang/create.blade.php -->
<h2>Form Input Barang</h2>
<form method="post" action="{{ route('barang.store') }}">
    @csrf

    <label for="kode_barang">Kode Barang:</label>
    <input type="text" name="kode_barang" required><br>

    <label for="nama_barang">Nama Barang:</label>
    <input type="text" name="nama_barang" required><br>

    <label for="jenis_varian">Jenis Varian:</label>
    <input type="text" name="jenis_varian" required><br>

    <label for="qty">Qty:</label>
    <input type="number" name="qty" required><br>

    <label for="harga_jual">Harga Jual:</label>
    <input type="number" name="harga_jual" required><br>

    <button type="submit">Proses</button>
</form>

<h2>Data Barang:</h2>
<table border="1">
    <tr>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Jenis Varian</th>
        <th>Qty</th>
        <th>Harga Jual</th>
        <th>Action</th>
    </tr>
    @foreach($barangs as $barang)
    <tr>
        <td>{{ $barang->kode_barang }}</td>
        <td>{{ $barang->nama_barang }}</td>
        <td>{{ $barang->jenis_varian }}</td>
        <td>{{ $barang->qty }}</td>
        <td>{{ $barang->harga_jual }}</td>
        <td>
            <a href="{{ route('barang.edit', ['id' => $barang->id]) }}">Edit</a>
            <!-- Add a delete button if you want to implement delete functionality -->
        </td>
    </tr>
    @endforeach
</table>
