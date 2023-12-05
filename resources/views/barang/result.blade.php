<h2>Hasil:</h2>
<table border="1">
    <tr>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Jenis Varian</th>
        <th>Qty</th>
        <th>Harga Jual</th>
        <th>Total Harga</th>
        <th>Diskon</th>
        <th>Harga Setelah Diskon</th>
    </tr>
    <tr>
        <td>{{ $barang->kode_barang }}</td>
        <td>{{ $barang->nama_barang }}</td>
        <td>{{ $barang->jenis_varian }}</td>
        <td>{{ $barang->qty }}</td>
        <td>{{ $barang->harga_jual }}</td>
        <td>{{ $total_harga }}</td>
        <td>{{ $diskon * 100 }}%</td>
        <td>{{ $harga_setelah_diskon }}</td>
    </tr>
</table>
