<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">

            @if (isset ($kategori))
                    <form action="/admin/posts/kategori/{{ $kategori->id }}" method="POST">
                        @method('PUT')
                        @csrf
                @else
                    <form action="/admin/posts/kategori" method="POST">
                        @csrf
                @endif

                 @csrf

                    <div class="form-group">
                        <label for="">Nama Kategori</label>
                        <input type="text"  name="name" class="form-control @error('name') is-invalid @enderror" 
                               placeholder="Nama Kategori" value="{{ isset($kategori) ? $kategori->name : old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="desc">Deskripsi</label>
                        <textarea id="desc" name="desc" class="form-control @error('desc') is-invalid @enderror" 
                                  cols="30" rows="10">{{ isset($kategori) ? $kategori->desc : old('desc') }}</textarea>
                        @error('desc')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>