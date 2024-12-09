<div class="container my-5">
    <div class="text-center">
        <h4>Blog</h4>
        <p>Baca berita terbaru tentang kami</p>
    </div>

    <div class="row">
        @for ($i = 1; $i <= 12; $i++)
        <div class="col-md-3 col-sm-6 my-3">
            <div class="card shadow-sm">
                <div class="wrapper-card-blog">
                    <img src="/img/new-cookie.jpg" alt="" class="img-card-blog img-fluid">
                </div>
                <div class="p-3">
                    <a href="#" class="text-decoration-none">
                        <h5>Resep Cookies Viral Terbaru</h5>
                    </a>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, voluptatem!
                        <a href="#">Selengkapnya &RightArrow;</a>
                    </p>
                </div>
            </div>
        </div>
        @endfor
    </div>
</div>
