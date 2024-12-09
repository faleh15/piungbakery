<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                @if (isset ($catalog))
                    <form action="/admin/catalog/{{ $catalog->id }}" method="POST">
                        @method('PUT')
                        @csrf
                @else
                    <form action="/admin/catalog" method="POST">
                        @csrf
                @endif
                    <div class="form-group">
                        <label for=""><Title></Title></label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror()" placeholder="Tuliskan Nama Produk di Sini" value="{{ isset($catalog) ? $catalog->title : old('title') }}">
                        @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Deskripsi</label>
                        <input type="desc" name="desc" class="form-control @error('desc') is-invalid @enderror()" placeholder="Deskripsi Produk" value="{{ isset($catalog) ? $catalog->desc : old('desc') }}">
                        @error('desc')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Gambar</label>
                        <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror()">
                        @error('gambar')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                        @if (isset ($poster))   
                            <img src="/{{$poster -> gambar}}" width="100%" alt="">
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>