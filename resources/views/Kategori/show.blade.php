@include('layout.header')
    <h3>Detail Kategori</h3>
    <table>
        <thead>
            <tr>
            <th>No</th>
            <th>Nama Kategori</th>
            <th>Aksi</th>
            </tr>
        </thead>
     <tbody>
        
        <tr>
        <td width="150px">Nama Kategori</td>
        <td width="3px">:</td>
            <td>{{ $kategori->nama_kategori }}</td>
           
</tr>
</tbody>
    </table> 
   @include('layout.footer')