@extends('/template/nav')
@section('content')
    <div class="container" style="margin-top: 5%">
        <h1 class="text-center mb-4">Tambah Artikel</h1>
        <form action="/artikel/create" method="post" enctype="multipart/form-data">
        @csrf
    <div class="mb-3">
        <label for="judul" class="form-label">Judul Cerpen</label>
        <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukan Judul Cerpen">
    </div>
    <div class="mb-3">
        <label for="konten" class="form-label">Isi Cerpen</label>
        
        <textarea class="form-control" id="isi" name="isi" rows="5" placeholder="Masukan Konten Cerpen"></textarea>
    </div>
    <div class="mb-3">
        <label for="genre" class="form-label">Genre</label>
        <select class="form-select" name="genre" id="genre">
            <option selected>Pilih Genre</option>
            <option value="1">Romansa</option>
            <option value="2">Horor</option>
            <option value="3">Fantasi</option>
        </select>
    </div>
    <div class="form-group pt-2">
        <label for="image">Foto</label>
        <input type="file" class="form-control-file" name="foto" placeholder="foto">
    </div>

    <button type="submit" class="btn mt-3" style="background-color: rgb(0, 141, 82);">Simpan Artikel</button>
    </form>
    </div>
@endsection