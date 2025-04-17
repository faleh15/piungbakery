<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <tr>
                        <td width="100x">#</td>
                        <td width="250x">Name</td>
                        <td>Message</td>
<<<<<<< Updated upstream
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>
                            <a href="/admin/pesan/ {{}}"><b>Name</b></a>
                        </td>
                        <td>Content</td>
                    </tr>

=======
                        <td>Actions</td>
                    </tr>

                    @foreach($pesan as $item)

                    <tr style="{{ $item->is_read == 1 ? 'background-color:#f0f0f0;' : '' }}">
                        <td>{{$loop->iteration}}</td>
                        <td>
                            <a href="/admin/pesan/{{$item->id}}"><b>{{$item->name}}</b></a>
                        </td>
                        <td>{{$item->desc}}</td>
                        <td>
                            <form action="/admin/pesan/{{ $item->id }}" method="POST">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus banner ini?')">Hapus</button>
                        </form>
                        </td>
                    </tr>

                    @endforeach

>>>>>>> Stashed changes
                </table>
            </div>
        </div>
    </div>
</div>