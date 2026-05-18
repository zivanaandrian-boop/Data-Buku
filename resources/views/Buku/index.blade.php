@include('layout.header')
    <h3>Buku</h3>
   <a href="{{ route('buku.create') }}" class="tombol">Tambah</a>
    <table>
        <thead>
            <tr>
            <th>No</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Tahun</th>
            <th>Penerbit</th>
            <th>Kategori</th>
            <th>Aksi</th>
            </tr>
        </thead>
     <tbody>
        @foreach($allbuku as $key => $buku)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $buku->judul }}</td>
             <td>{{ $buku->pengarang }}</td>
              <td>{{ $buku->tahun_terbit}}</td>
               <td>{{ $buku->penerbit->nama_penerbit }}</td>
                <td>{{ $buku->kategori->nama_kategori }}</td>
            <td>
                <form action="{{ route('buku.destroy', $buku->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <a href="{{ route('buku.show', $buku->id) }}" class="tombol">Detail</a>
            <a href="{{ route('buku.edit', $buku->id) }}" class="tombol">Edit</a>
            <button type="submit" class="tombol">Hapus</button>
        </form>
     </td>
</tr>
@endforeach
</tbody>
    </table> 
   @include('layout.footer')