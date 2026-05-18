@include('layout.header')
    <h3>Penerbit</h3>
   <a href="{{ route('penerbit.create') }}" class="tombol">Tambah</a>
    <table>
        <thead>
            <tr>
            <th>No</th>
            <th>Nama Penerbit</th>
            <th>Aksi</th>
            </tr>
        </thead>
     <tbody>
        @foreach($allpenerbit as $key => $penerbit)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $penerbit->nama_penerbit }}</td>
            <td>
                <form action="{{ route('penerbit.destroy', $penerbit->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <a href="{{ route('penerbit.show', $penerbit->id) }}" class="tombol">Detail</a>
            <a href="{{ route('penerbit.edit', $penerbit->id) }}" class="tombol">Edit</a>
            <button type="submit" class="tombol">Hapus</button>
        </form>
     </td>
</tr>
@endforeach
</tbody>
    </table> 
   @include('layout.footer')