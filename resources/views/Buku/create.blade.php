@include('layout.header')

<h3>Buat Buku</h3>

<a href="{{ route('buku.index') }}" class="tombol">← Kembali</a>

<form action="{{ route('buku.store') }}" method="POST">
    @csrf

    <div class="form-group">
        <label>Judul Buku:</label>
        <input type="text" name="judul" placeholder="Masukkan judul buku">
    </div> 

    <div class="form-group">
        <label>Pengarang:</label>
        <input type="text" name="pengarang" placeholder="Masukkan nama pengarang">
    </div> 

    <div class="form-group">
        <label>Tahun Terbit:</label>
        <input type="text" name="tahun_terbit" placeholder="Masukkan tahun terbit">
    </div> 

    <div class="form-group">
        <label>Penerbit:</label>
        <select name="penerbit_id">
            <option value="">-- Pilih Penerbit --</option>
            @foreach ($penerbit as $p)
                <option value="{{ $p->id }}">{{ $p->nama_penerbit }}</option>
            @endforeach
        </select>
    </div> 

    <div class="form-group">
        <label>Kategori:</label>
        <select name="kategori_id">
            <option value="">-- Pilih Kategori --</option>
            @foreach ($kategori as $k)
                <option value="{{ $k->id }}">{{ $k->nama_kategori }}</option>
            @endforeach
        </select>
    </div>   

    <button type="submit" class="tombol">Simpan</button>
</form>

@include('layout.footer')