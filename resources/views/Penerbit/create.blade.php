@include('layout.header')
    <h3>Buat Penerbit</h3>
   <a href="{{ route('penerbit.create') }}" class="tombol">Tambah</a>
  <form action="{{ route('penerbit.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="">nama Penerbit:</label>
        <input type="text" name="nama_penerbit" id="" placeholder="Masukan nama Penerbit">
    </div>  
     <button type="submit" class="tombol">submit</button>
</form>
   @include('layout.footer')