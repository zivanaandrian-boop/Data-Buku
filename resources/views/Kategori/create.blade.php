@include('layout.header')
    <h3>Buat Kategori</h3>
   <a href="{{ route('kategori.create') }}" class="tombol">Tambah</a>
  <form action="{{ route('kategori.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="">nama Kategori:</label>
        <input type="text" name="nama_kategori" id="" placeholder="Masukan nama Kategori">
    </div>  
     <button type="submit" class="tombol">submit</button>
</form>
   @include('layout.footer')