@include('layout.header')
    <h3>Kategori</h3>
   <a href="{{ route('kategori.create') }}" class="tombol">Tambah</a>
    <table>
        <thead>
            <tr>
            <th>No</th>
            <th>Nama Kategori</th>
            <th>Aksi</th>
            </tr>
        </thead>
     <tbody>
        @foreach($allKategori as $key => $kategori)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $kategori->nama_kategori }}</td>
            <td>
                <form action="{{ route('kategori.destroy', $kategori->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <a href="{{ route('kategori.show', $kategori->id) }}" class="tombol">Detail</a>
            <a href="{{ route('kategori.edit', $kategori->id) }}" class="tombol">Edit</a>
            <button type="submit" class="tombol">Hapus</button>
        </form>
     </td>
</tr>
@endforeach
</tbody>
    </table> 
   @include('layout.footer')