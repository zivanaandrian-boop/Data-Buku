@include('layout.header')

<h3>Edit Buku</h3>

<a href="{{ route('buku.index') }}" class="tombol">← Kembali</a>

<form action="{{ route('buku.update', $buku->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label>Judul Buku:</label>
        <input type="text" name="judul" value="{{ $buku->judul }}">
    </div>  

    <div class="form-group">
        <label>Pengarang:</label>
        <input type="text" name="pengarang" value="{{ $buku->pengarang }}">
    </div>  

    <div class="form-group">
        <label>Tahun Terbit:</label>
        <input type="text" name="tahun_terbit" value="{{ $buku->tahun_terbit }}">
    </div>  

    <div class="form-group">
        <label>Penerbit:</label>
        <select name="penerbit_id">
            @foreach ($penerbit as $p)
                <option value="{{ $p->id }}"
                    {{ $buku->penerbit_id == $p->id ? 'selected' : '' }}>
                    {{ $p->nama_penerbit }}
                </option>
            @endforeach
        </select>
    </div> 

    <div class="form-group">
        <label>Kategori:</label>
        <select name="kategori_id">
            @foreach ($kategori as $k)
                <option value="{{ $k->id }}"
                    {{ $buku->kategori_id == $k->id ? 'selected' : '' }}>
                    {{ $k->nama_kategori }}
                </option>
            @endforeach
        </select>
    </div> 

    <button type="submit" class="tombol">Update</button>
</form>

@include('layout.footer')