<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <a href="/admin/posts/blog/create" class="btn btn-primary mb-3">
                    <i class="fas fa-plus"> Tambah</i>
                </a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Cover</th>
                            <th>Title</th>
                            <th>Body</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blog as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <img src="/{{$item->cover}}" width="200px">
                            </td>
                            <td>
                                <a href="/admin/posts/blog/{{ $item->id }}"><b>{{ $item->title }}</b></a> 
                            </td>
                            <td>{{ $item->body }}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="/admin/posts/blog/{{ $item->id }}/edit" class="btn btn-success me-3">Edit</a>
                                    <form action="/admin/posts/blog/{{ $item->id }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus blog ini?')">Hapus</button>
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