<style>
    .wrapper-img-banner{
        max-width: 100%;
        max-height: 400px;
    }

    .img-banner{
        width: 100%;
    }

    /* Menambahkan warna hitam pada headline dan desc */
    .carousel-caption h1,
    .carousel-caption p {
        color: black; /* Set warna teks menjadi hitam */
    }

    .wrapper-card-blog h5,
    .wrapper-card-blog p {
        color: black; /* Set warna teks pada blog */

    }
    .custom-bg {
        background-color: #6EACDA; /* Set background color to #80C4E9 */
    }

    .btn-custom {
        background-color: #E5E1DA; /* Set background color to #80C4E9 */
    }

    .whatsapp {
    font-family: 'Arial', sans-serif; /* Mengubah font menjadi Arial */
    display: flex;
    flex-direction: column; /* Membuat elemen di dalamnya ditampilkan secara vertikal */
    align-items: center; /* Menyelaraskan elemen secara horizontal di tengah */
    justify-content: center; /* Menyelaraskan elemen secara vertikal di tengah */
    height: 20vh; /* Menggunakan tinggi penuh halaman untuk memastikan tombol di tengah */
    text-align: center; /* Menyelaraskan teks di tengah */
}

.btn-whatsapp {
    background-color: #25D366; /* Warna hijau khas WhatsApp */
    color: white;
    padding: 10px 20px;
    border-radius: 3px;
    text-decoration: none;
    font-size: 18px;
}

.btn-whatsapp:hover {
    background-color: #128C7E; /* Warna hijau lebih gelap ketika hover */
}
</style>

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">

    @foreach ($banner as $key => $item)
    

      <div class="carousel-item {{$key == 0 ? 'active' : ''}}">

        <div class="wrapper-img-banner">
            <img src="/{{$item->gambar}}" class="img-banner" alt="">
        </div>

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>{{$item->headline}}</h1>
            <p>{{$item->desc}}</p>
            <!-- <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p> -->
          </div>
        </div>
      </div>

    @endforeach

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="container mt5">
    <div class="text-center">
        <h4 class="">ABOUT</h4>
        <p>Visi Misi Kami</p>
    </div>

    <div class="row">
        <div class="col-md-6">
            <img src="{{$about->cover}}" width="100%" alt="">
        </div>
        <div class="col-md-6">
            <p>
                {{$about->desc}}
            </p>
        </div>
    </div>

    <div class="custom-bg my-5">
        <div class="container py-5">
            <div class="text-white">
                <h5>Pelajari Tentang Kami</h5>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odio in assumenda maxime quibusdam ipsam 
                    saepe ad id quidem voluptatibus vero quia doloribus, rem temporibus mollitia molestiae doloremque cumque
                     officiis dolores?</p>
            </div>
        </div>
    </div>

    <div class="container my-4">
        <div class="text-center">
            <h4>Produk Kami</h4>
        </div>

        <div class="row">
            @foreach ($catalog as $item)

            <div class="col-md-3">
                <div class="text-center">
                <img src="{{$item->gambar}}" width="200px" alt="">
                <h5><b>{{$item->title}}</b></h5>
                <p>{{$item->desc}}</p>
             </div>
            </div>
              
            @endforeach

            <div class="text-center mt-3">
                <a href="" class="btn btn-custom px5">Selengkapnya <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</div>

<style>

</style>


    <div class="container my-2">
    <div class="text-center">
        <h4>Blog</h4>
        <p>Baca berita terbaru tentang kami</p>
    </div>

    <div class="row">
        @foreach ($blog as $item)
        <div class="col-md-3 mb-4"> <!-- Pastikan menggunakan col-md-3 -->
            <div class="card shadow-sm">
                <div class="wrapper-card-blog">
                    <img src="/{{ $item->cover }}" alt="" class="img-card-blog w-100">
                </div>
                <div class="p-3">
                    <a href="#" class="text-decoration-none">
                        <h5>{{ $item->title }}</h5>
                    </a>
                    <p>
                        {{ Str::limit($item->body, 100) }} <!-- Batasi teks body -->
                        <a href="/blog/show/{{$item->id}}">Selengkapnya &RightArrow;</a>
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="text-center mt-3">
        <a href="#" class="btn btn-custom px-5">
            Selengkapnya <i class="fas fa-arrow-right"></i>
        </a>
    </div>
</div>


    <div class="custom-bg my-5">
        <div class="container py-5">
            <div class="text-white">
                <h5>Pelajari Tentang Kami</h5>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odio in assumenda maxime quibusdam ipsam 
                    saepe ad id quidem voluptatibus vero quia doloribus, rem temporibus mollitia molestiae doloremque cumque
                     officiis dolores?</p>
            </div>
        </div>
    </div>

    <div class="container my-2">
    <div class="whatsapp">
        <h4>Hubungi Kami</h4>
        <p>Hubungi kami melalui Whatsapp di Bawah</p>
        <a href="https://wa.me/0822" class="btn btn-whatsapp px-5">
            <i class="fas fa-phone"></i> Whatsapp
        </a>
    </div>
</div>