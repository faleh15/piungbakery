<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <a href="/admin/posts/kategori/create" class="btn btn-primary mb-3">
                    <i class="fas fa-plus"></i> Tambah Kategori
                </a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kategori</th>
                            <th>Deskripsi</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kategori as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->desc }}</td>
                            <td>
                                <div class="d-flex">
                                    <!-- Tombol Edit -->
                                    <a href="/admin/posts/kategori/{{ $item->id }}/edit" class="btn btn-warning btn-sm mr-2">
                                        Edit
                                    </a>
                                    <!-- Form Hapus -->
                                    <form action="/admin/posts/kategori/{{ $item->id }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus kategori ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- Pesan jika data kosong -->
                @if ($kategori->isEmpty())
                <div class="text-center mt-3">
                    <p>Belum ada kategori yang tersedia.</p>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
