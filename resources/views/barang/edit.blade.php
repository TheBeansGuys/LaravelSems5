<!-- resources/views/barang/edit.blade.php -->
<h2>Edit Data Barang</h2>
<form method="post" action="{{ route('barang.update', ['id' => $barang->id]) }}">
    @csrf
    @method('PUT')

    <label for="kode_barang">Kode Barang:</label>
    <input type="text" name="kode_barang" value="{{ $barang->kode_barang }}" required><br>

    <label for="nama_barang">Nama Barang:</label>
    <input type="text" name="nama_barang" value="{{ $barang->nama_barang }}" required><br>

    <label for="jenis_varian">Jenis Varian:</label>
    <input type="text" name="jenis_varian" value="{{ $barang->jenis_varian }}" required><br>

    <label for="qty">Qty:</label>
    <input type="number" name="qty" value="{{ $barang->qty }}" required><br>

    <label for="harga_jual">Harga Jual:</label>
    <input type="number" name="harga_jual" value="{{ $barang->harga_jual }}" required><br>

    <button type="submit">Update</button>
</form>
