    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <a href="/admin/catalog/create" class="btn btn-primary mb-3"><i class="fas fa-plus"> Tambah</i></a>
                        <tr>
                            <td>No</td>
                            <td>Nama</td>
                            <td>E-Mail</td>
                            <td>Actions</td>
                        </tr>
                        @foreach ($catalog as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="/admin/catalog/{{$item->id}}/edit" class="btn btn-success mr-3">Edit</a>
                                
                                <form action="/admin/catalog/{{$item->id}}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                                </div>                      
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>