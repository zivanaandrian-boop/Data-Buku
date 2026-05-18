@include('layout.header')
    <h3>edit Penerbit</h3>
   <a href="{{ route('kategori.create') }}" class="tombol">Tambah</a>
  <form action="{{ route('kategori.update', $penerbit->id) }}" method="post">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="">nama Penerbit:</label>
        <input type="text" name="nama_penerbit" id="" value="{{ $penerbit->nama_penerbit }}">
    </div>  
     <button type="submit" class="tombol">Update</button>
</form>
   @include('layout.footer')