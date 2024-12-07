<style>
  .col-md-3 img{
      width: 100%; /* Atur sesuai kebutuhan, misalnya width container */
      height: auto; /* Pastikan tinggi menyesuaikan lebar untuk menjaga rasio asli */
      display: block; /* Hilangkan margin bawah default dari img */
      object-fit: contain; /* Memastikan gambar tidak terpotong */
  }
</style>


<div class="container my-4">
        <div class="text-center">
            <h4>Product Catalog</h>
        </div>

        <div class="row">
            @for ($i=0; $i < 4; $i++)
             <div class="col-md-3">
                <div class="garlic-text-center">
                    <img src="/img/garlic-bread.jpg" alt="">
                    <h6><b>Garlic Bread</b></h6>
                    <p>Roti dipanggang hingga renyah dan menggunakan olesan bawang putih yang harum</p>
                </div>
            </div>
            @endfor
        </div>
</div>
