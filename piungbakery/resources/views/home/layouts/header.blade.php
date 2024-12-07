<style>
  .menu-active{
    color: black;
    font-weight: bold;
  }
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-light bg-light shadow">
    <div class="container">
      <a class="navbar-brand" href="#">Piung Bakery</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/') ? 'menu-active' : ''}}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('blog') ? 'menu-active' : ''}}" href="/blog">Blog</a>
          </li>
          <li class="nav-item">
            <li class="nav-item">
              <a class="nav-link {{ Request::is('catalog') ? 'menu-active' : ''}}" href="/catalog">Catalog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('shop') ? 'menu-active' : ''}}" href="/shop">Shop</a>
            </li>
            <a class="nav-link {{ Request::is('about') ? 'menu-active' : ''}}" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('contact') ? 'menu-active' : ''}}" href="/contact">Contact</a>
          </li>
        </ul>
        <form class="d-flex">
            <a href="/login" class="btn btn-primary">Login</a>
        </form>
    </div>
    </div>
  </nav>
</header>