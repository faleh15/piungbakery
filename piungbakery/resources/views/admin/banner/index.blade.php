<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <a href="/admin/banner/create" class="btn btn-primary mb-3">
                    <i class="fas fa-plus"> Tambah</i>
                </a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Headline</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($banner as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <img src="{{ asset('storage/' . $item->gambar) }}" width="200px" alt="Gambar Banner">
                            </td>
                            <td>{{ $item->headline }}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="/admin/banner/{{ $item->id }}/edit" class="btn btn-success me-3">Edit</a>
                                    <form action="/admin/banner/{{ $item->id }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus banner ini?')">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>