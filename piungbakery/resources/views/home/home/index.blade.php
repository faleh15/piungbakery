<style>
    .wrapper-img-banner{
        max-width: 100%;
        max-height: 400px;
    }

    .img-banner{
        width: 100%;
    }
</style>

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">

        <div class="wrapper-img-banner">
            <img src="/img/bakery.jpg" class="img-banner" alt="">
        </div>

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Selamat Datang di Piung Bakery.</h1>
            <p>Some representative placeholder content for the first slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
          </div>
        </div>
      </div>
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
            <img src="/img/banner-roti.jpg" alt="">
        </div>
        <div class="col-md-6">
            <p>
                Visi mis kami adalah untuk menjadi toko roti yang berasas kekeluargaan. Roti roti roti Roti roti rotiRoti roti
                Roti roti rotiRoti roti rotiRoti roti rotiRoti roti rotiRoti roti roti
                Roti roti rotiRoti roti rotiRoti roti rotiRoti roti rotiRoti roti rotiRoti roti roti
                Roti roti rotiRoti roti rotiRoti roti rotiRoti roti rotiRoti roti rotiRoti roti rotiRoti roti roti
                Roti roti rotiRoti roti rotiRoti roti roti
                Roti roti rotiRoti roti rotiRoti roti rotiRoti roti rotiRoti roti roti
                Roti roti rotiRoti roti rotiRoti roti rotiRoti roti rotiRoti roti rotiRoti roti roti
            </p>
        </div>
    </div>

    <div class="bg-success my-5">
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
            <h4>Layanan Kami</h4>
        </div>

        <div class="row">
            @for ($i=0; $i < 4; $i++)
             <div class="col-md-3">
                <div class="text-center">
                    <i class="fas fa-home fa-3x text-success"></i>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi, velit.</p>
                </div>
            </div>
            @endfor

            <div class="text-center mt-3">
                <a href="" class="btn btn-success px5">Selengkapnya <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>

        <div class="bg-light my-5">
            <div class="text-dark text-center">
                <h5>
                    Pelajari Tentang Kami
                </h5>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis repellat officiis omnis cumque veniam fuga itaque aut tenetur. Fugiat, aliquam atque. Explicabo nam impedit accusantium.
                </p>

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
            @for ($i = 0; $i <= 4; $i++)
            <div class="col md-3">
                <div class="card">
                    <div class="wrapper-card-blog">
                        <img src="/img/new-cookie.jpg" alt="" class="img-card-blog">
                    </div>
                    <div class="p-3">
                        <a href="" class="text-decoration-none"><h5>Resep Cookies Viral Terbaru</h5></a>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, voluptatem!
                            <a href="">Selengkapnya &RightArrow;</a>
                        </p>
                    </div>
                </div>
            </div>
            @endfor

            <div class="text-center mt-3">
                <a href="" class="btn btn-success px-5">Selengkapnya <i class="fas fa-arrow-right"></i></a>
            </div>
            
        </div>
    </div>

    <div class="bg-success my-5">
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
        <div class="text-center">
            <h4>Hubungi Kami</h4>
            <p>Hubungi kami melalui Whatsapp di Bawah</p>
            <a href="" class="btn btn-success px-5"><i class="fas fa-phone">Whatsapp</i></a>
        </div>
    </div> 