<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                @if (isset ($catalog))
                    <form action="/admin/catalog/{{ $catalog->id }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                @else
                    <form action="/admin/catalog" method="POST" enctype="multipart/form-data">
                        @csrf
                @endif
                    <div class="form-group">
                        <label for="">Nama Produk</label>
                        <input type="text" name="produk" class="form-control @error('produk') is-invalid @enderror()" placeholder="Nama Produk" value="{{ isset($catalog) ? $catalog->produk : old('produk') }}">
                        @error('produk')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for=""></label>
                        <input type="text" name="desc" class="form-control @error('desc') is-invalid @enderror()" placeholder="Tentang Produk" value="{{ isset($catalog) ? $catalog->desc : old('desc') }}">
                        @error('desc')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Gambar</label>
                        <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror()" placeholder="Tentang Produk" value="{{ isset($catalog) ? $catalog->gambar : old('gambar') }}">
                        @error('gambar')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                        @if (isset($catalog))
                            <img src="/{{$catalog->gambar}}" width="100%" alt="">
                        @endif

                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>