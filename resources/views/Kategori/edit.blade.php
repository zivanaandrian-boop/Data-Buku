@include('layout.header')
    <h3>edit Kategori</h3>
   <a href="{{ route('kategori.create') }}" class="tombol">Tambah</a>
  <form action="{{ route('kategori.update', $kategori->id) }}" method="post">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="">nama Kategori:</label>
        <input type="text" name="nama_kategori" id="" value="{{ $kategori->nama_kategori }}">
    </div>  
     <button type="submit" class="tombol">Update</button>
</form>
   @include('layout.footer')