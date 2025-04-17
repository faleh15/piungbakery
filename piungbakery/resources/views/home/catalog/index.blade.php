<style>
  .col-md-3 {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 100%; /* Memastikan semua kolom memiliki tinggi yang sama */
}

.col-md-3 img {
    width: 100%;
    height: 200px; /* Menentukan tinggi gambar agar konsisten di semua kolom */
    object-fit: cover; /* Memastikan gambar mengisi area dengan proporsi yang benar */
    margin-bottom: 15px; /* Memberikan jarak antara gambar dan teks */
}

.garlic-text-center {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 100%; /* Memastikan isi dalam div tersebut memiliki tinggi yang sama */
    text-align: center; /* Menyelaraskan teks ke tengah */
}

.garlic-text-center h6 {
    margin: 0;
    font-size: 16px;
    font-weight: bold;
}

.garlic-text-center p {
    font-size: 14px;
    color: #666; /* Memberikan warna yang lebih lembut untuk deskripsi */
    margin-top: 10px; /* Memberikan sedikit jarak antara judul dan deskripsi */
}
</style>


<div class="container my-4">
    <div class="text-center">
        <h4>Product Catalog</h4>
    </div>

    <div class="row">
        @foreach ($catalog as $item)
            <div class="col-md-3">
                <div class="garlic-text-center">
                    <img src="/{{$item->gambar}}" alt="">
                    <h6><b>{{$item->produk}}</b></h6>
                    <p>{{$item->desc}}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>