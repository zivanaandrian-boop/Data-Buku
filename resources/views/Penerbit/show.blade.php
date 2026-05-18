@include('layout.header')
    <h3>Detail Penerbit</h3>
    <table>
        <thead>
            <tr>
            <th>No</th>
            <th>Nama Penerbit</th>
            <th>Aksi</th>
            </tr>
        </thead>
     <tbody>
        
        <tr>
        <td width="150px">Nama Penerbit</td>
        <td width="3px">:</td>
            <td>{{ $penerbit->nama_penerbit }}</td>
           
</tr>
</tbody>
    </table> 
   @include('layout.footer')