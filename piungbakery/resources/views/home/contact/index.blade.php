<div class="container">

<div class="text-center my-5">
    <h4>Kontak Kami</h4>
    <p>Berikan Saran dan Masukkan Untuk Kami</p>
</div>


<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <form action="/contact/send" method="POST">
                    @csrf
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" name="name" placeholder="Masukkan Nama Anda di Sini">
                </div>
                <div class="form-group mt-4">
                    <label for="">Isi Pesan</label>
                    <textarea name="desc" id="" cols="30" rows="10" class="form-control" placeholder="Masukkan Pesan Anda di Sini"></textarea>
                </div>

                <button type="submit" class="btn btn-success mt-3">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>