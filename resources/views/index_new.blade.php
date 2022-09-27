<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>GetShayna by BuildWith Angga</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    </head>
    <body>
       <section class="h-100 w-100 bg-white" style="box-sizing: border-box">
    <style scoped>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

      .header-2-2 .modal-item.modal {
        top: 2rem;
      }

      .header-2-2 .navbar,
      .header-2-2 .hero {
        padding: 3rem 2rem;
      }

      .header-2-2 .navbar-light .navbar-nav .nav-link {
        font: 300 18px/1.5rem Poppins, sans-serif;
        color: #1d1e3c;
        transition: 0.3s;
      }

      .header-2-2 .navbar-light .navbar-nav .nav-link:hover {
        font: 600 18px/1.5rem Poppins, sans-serif;
        color: #1d1e3c;
        transition: 0.3s;
      }

      .header-2-2 .navbar-light .navbar-nav .active>.nav-link,
      .header-2-2 .navbar-light .navbar-nav .nav-link.active,
      .header-2-2 .navbar-light .navbar-nav .nav-link.show,
      .header-2-2 .navbar-light .navbar-nav .show>.nav-link {
        font-weight: 600;
        transition: 0.3s;
      }

      .header-2-2 .navbar-light .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(0, 0, 0, 1)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
      }

      .header-2-2 .btn:focus,
      .header-2-2 .btn:active {
        outline: none !important;
      }

      .header-2-2 .btn-fill {
        font: 600 18px / normal Poppins, sans-serif;
        background-color: #27c499;
        border-radius: 12px;
        padding: 12px 32px;
        transition: 0.3s;
      }

      .header-2-2 .btn-fill:hover {
        --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
          0 4px 6px -2px rgba(0, 0, 0, 0.05);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
          var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        transition: 0.3s;
      }

      .header-2-2 .btn-no-fill {
        font: 300 18px/1.75rem Poppins, sans-serif;
        color: #1d1e3c;
        padding: 12px 32px;
        transition: 0.3s;
      }

      .header-2-2 .modal-item .modal-dialog .modal-content {
        border-radius: 8px;
        transition: 0.3s;
      }

      .header-2-2 .responsive li a {
        padding: 1rem;
        transition: 0.3s;
      }

      .header-2-2 .text-caption {
        font: 600 0.875rem/1.625 Poppins, sans-serif;
        margin-bottom: 2rem;
        color: #27c499;
      }

      .header-2-2 .left-column {
        margin-bottom: 2.75rem;
        width: 100%;
      }

      .header-2-2 .right-column {
        width: 100%;
      }

      .header-2-2 .title-text-big {
        font: 600 2.25rem/2.5rem Poppins, sans-serif;
        margin-bottom: 2rem;
        color: #272e35;
      }

      .header-2-2 .btn-try {
        font: 600 1rem/1.5rem Poppins, sans-serif;
        padding: 1rem 1.5rem;
        border-radius: 0.75rem;
        background-color: #27c499;
        transition: 0.3s;
      }

      .header-2-2 .btn-try:hover {
        --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
          0 4px 6px -2px rgba(0, 0, 0, 0.05);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
          var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        transition: 0.3s;
      }

      .header-2-2 .btn-outline {
        font: 400 1rem/1.5rem Poppins, sans-serif;
        border: 1px solid #555b61;
        color: #555b61;
        padding: 1rem 1.5rem;
        border-radius: 0.75rem;
        background-color: transparent;
        transition: 0.3s;
      }

      .header-2-2 .btn-outline:hover {
        border: 1px solid #27c499;
        color: #27c499;
        transition: 0.3s;
      }

      .header-2-2 .btn-outline:hover div path {
        fill: #27c499;
        transition: 0.3s;
      }

      @media (min-width: 576px) {
        .header-2-2 .modal-item .modal-dialog {
          max-width: 95%;
          border-radius: 12px;
        }

        .header-2-2 .navbar {
          padding: 3rem 2rem;
        }

        .header-2-2 .hero {
          padding: 3rem 2rem 5rem;
        }

        .header-2-2 .title-text-big {
          font-size: 3rem;
          line-height: 1.2;
        }
      }

      @media (min-width: 768px) {
        .header-2-2 .navbar {
          padding: 3rem 4rem;
        }

        .header-2-2 .hero {
          padding: 3rem 4rem 5rem;
        }

        .header-2-2 .left-column {
          margin-bottom: 3rem;
        }
      }

      @media (min-width: 992px) {
        .header-2-2 .navbar-expand-lg .navbar-nav .nav-link {
          padding-right: 1.25rem;
          padding-left: 1.25rem;
        }

        .header-2-2 .navbar {
          padding: 3rem 6rem;
        }

        .header-2-2 .hero {
          padding: 3rem 6rem 5rem;
        }

        .header-2-2 .left-column {
          width: 50%;
          margin-bottom: 0;
        }

        .header-2-2 .right-column {
          width: 50%;
        }

        .header-2-2 .title-text-big {
          font-size: 3.75rem;
          line-height: 1.2;
        }
      }
    </style>
    <div class="container-xxl mx-auto p-0  position-relative header-2-2" style="font-family: 'Poppins', sans-serif">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a href="#">
          <img style="margin-right: 0.75rem"
            src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header2/Header-2-5.png" alt="" />
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="modal" data-bs-target="#targetModal-item">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="modal-item modal fade" id="targetModal-item" tabindex="-1" role="dialog"
          aria-labelledby="targetModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content bg-white border-0">
              <div class="modal-header border-0" style="padding: 2rem; padding-bottom: 0">
                <a class="modal-title" id="targetModalLabel">
                  <img style="margin-top: 0.5rem"
                    src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header2/Header-2-5.png"
                    alt="" />
                </a>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" style="padding: 2rem; padding-top: 0; padding-bottom: 0">
                <ul class="navbar-nav responsive me-auto mt-2 mt-lg-0">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Feature</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                  </li>
                </ul>
              </div>
              <div class="modal-footer border-0 gap-3" style="padding: 2rem; padding-top: 0.75rem">
                <button class="btn btn-default btn-no-fill">Log In</button>
                <button class="btn btn-fill text-white">Try Now</button>
              </div>
            </div>
          </div>
        </div>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo">
          <ul class="navbar-nav me-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Feature</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
          <div class="gap-3">
            <button class="btn btn-default btn-no-fill">Log In</button>
            <button class="btn btn-fill text-white">Try Now</button>
          </div>
        </div>
      </nav>

      <div>
        <div class="mx-auto d-flex flex-lg-row flex-column hero">
          <!-- Left Column -->
          <div
            class="left-column d-flex flex-lg-grow-1 flex-column align-items-lg-start text-lg-start align-items-center text-center">
            <p class="text-caption">Abiqu Learning</p>
            <h1 class="title-text-big">
              Semua Petualang hebat<br class="d-lg-block d-none" />
              Berasal dari sini
            </h1>
            <div class="d-flex flex-sm-row flex-column align-items-center mx-lg-0 mx-auto justify-content-center gap-3">
              <a class="btn d-inline-flex mb-md-0 btn-try text-white" href="/login">
                Mulai Perjalanan Mu!
              </a>
              
            </div>
          </div>
          <!-- Right Column -->
          <div class="right-column text-center d-flex justify-content-center pe-0">
            <img id="img-fluid" class="h-auto mw-100"
              src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header2/Header-2-1.png"
              alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="h-100 w-100" style="box-sizing: border-box; background-color: #f2f6ff">
    <style scoped>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

      .content-3-7 .btn:focus,
      .content-3-7 .btn:active {
        outline: none !important;
      }

      .content-3-7 {
        padding: 5rem 2rem 7rem;
      }

      .content-3-7 .title-text {
        font: 800 1.875rem/2.25rem Poppins, sans-serif;
        letter-spacing: 0.05em;
        margin-bottom: 0.75rem;
        color: #2e3a53;
      }

      .content-3-7 .caption-text {
        font: 400 1rem/1.5rem Poppins, sans-serif;
        letter-spacing: 0.025em;
        color: #8e8fad;
        margin-bottom: 0;
      }

      .content-3-7 .card-item {
        transition: 0.4s;
        top: 0px;
        left: 0px;
        padding: 1rem 0;
      }

      .content-3-7 .card-item:hover {
        top: -3px;
        left: -3px;
        transition: 0.4s;
      }

      .content-3-7 .card-item-outline {
        border: 1px solid #e5ebf9;
        padding: 2rem 2.75rem;
        border-radius: 1rem;
      }

      .content-3-7 .price-title {
        font: 500 1.25rem/1.75rem Poppins, sans-serif;
        color: #141c2e;
        letter-spacing: 0.025em;
        margin-bottom: 0.75rem;
      }

      .content-3-7 .price-value {
        font: 500 2.25rem/2.5rem Poppins, sans-serif;
        letter-spacing: 0.025em;
        margin-bottom: 0.75rem;
        color: #2e3a53;
      }

      .content-3-7 .price-duration {
        font: 400 1rem/1.5rem Poppins, sans-serif;
        margin: 0.625rem;
        color: #9e9e9e;
      }

      .content-3-7 .price-caption {
        font: 400 1rem/1.5rem Poppins, sans-serif;
        letter-spacing: 0.025em;
        margin-bottom: 2.5rem;
        color: #c3c3c8;
      }

      .content-3-7 .price-list .check {
        font: 400 0.875rem/1.25rem Poppins, sans-serif;
        color: #2e3a53;
        letter-spacing: 0.025em;
        margin-bottom: 1.75rem;
      }

      .content-3-7 .price-list .no-check {
        font: 400 0.875rem/1.25rem Poppins, sans-serif;
        color: #e1e1e1;
        letter-spacing: 0.025em;
        margin-bottom: 1.75rem;
      }

      .content-3-7 .span-icon {
        width: 1rem;
        height: 1rem;
        margin-right: 0.75rem;
      }

      .content-3-7 .btn-outline {
        border: 1px solid #2ec49c;
        color: #2ec49c;
        padding-top: 1rem;
        padding-bottom: 1rem;
        font-weight: 500;
        letter-spacing: 0.025em;
        border-radius: 0.5rem;
      }

      .content-3-7 .btn-outline:hover {
        background-color: #2ec49c;
        color: #ffffff;
      }

      .content-3-7 .btn-fill {
        background-image: linear-gradient(rgba(91, 203, 173, 1),
            rgba(39, 194, 153, 1));
        padding-top: 1rem;
        padding-bottom: 1rem;
        font-weight: 500;
        letter-spacing: 0.025em;
        border-radius: 0.5rem;
      }

      .content-3-7 .btn-fill:hover {
        background-image: linear-gradient(#29b18d, #29b18d);
      }

      @media (min-width: 576px) {
        .content-3-7 .title-text {
          font: 800 2.25rem/2.5rem Poppins, sans-serif;
        }

        .content-3-7 .card-item {
          padding: 1rem;
        }
      }

      @media (min-width: 768px) {
        .content-3-7 {
          padding-left: 3.5rem;
          padding-right: 3.5rem;
        }
      }

      @media (min-width: 992px) {
        .content-3-7 .caption-text {
          width: 66.666667%;
        }

        .content-3-7 .card-item {
          width: 33.333333%;
        }
      }

      @media (min-width: 1200px) {
        .content-3-7 {
          padding-left: 9rem;
          padding-right: 9rem;
        }
      }
    </style>
    <div class="content-3-7 overflow-hidden container-xxl mx-auto position-relative"
      style="font-family: 'Poppins', sans-serif">
      <div class="container mx-auto">
        <div class="d-flex flex-column text-center w-100" style="margin-bottom: 2.25rem">
          <h2 class="title-text">Perpustakaan Digital</h2>
          <p class="caption-text mx-auto">
           penunjang Kemajuan Indonesia <br />
           Lewat Gerakan Digital
          </p>
        </div>

        <div class="d-flex flex-wrap">
          <div class="mx-auto card-item position-relative">
              <div class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden h-100">
                <img src="https://images.unsplash.com/photo-1481627834876-b7833e8f5570?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8Ym9va3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" class="card-img-top rounded" alt="...">
                <br>
              <h2 class="price-value d-flex align-items-center">
                <span>Teman Tidur </span>
              </h2>
              <p class="price-caption">
                Buku Tidur Untuk anak yang mengalami traumatis
              </p>
              <div class="price-list">
                <p class="d-flex align-items-center check">
                  <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                    <img class="img-fluid"
                      src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png"
                      alt="" /> </span>Penulis: Andhika Pratama
                </p>
                
              </div>
              <button class="btn btn-outline d-flex justify-content-center align-items-center w-100">
                Baca Sekarang
              </button>
            </div>
          </div>
          <div class="mx-auto card-item position-relative">
              <div class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden h-100">
                <img src="https://images.unsplash.com/photo-1558901357-ca41e027e43a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjB8fGJvb2t8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" class="card-img-top rounded" alt="...">
                <br>
              <h2 class="price-value d-flex align-items-center">
                <span>Buku Healing </span>
              </h2>
              <p class="price-caption">
                Buku Healing untuk penyembuhan teraumatis
              </p>
              <div class="price-list">
                <p class="d-flex align-items-center check">
                  <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                    <img class="img-fluid"
                      src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png"
                      alt="" /> </span>Penulis: Yudha
                </p>
                
              </div>
              <button class="btn btn-outline d-flex justify-content-center align-items-center w-100">
                Baca Sekarang
              </button>
            </div>
          </div>
          <div class="mx-auto card-item position-relative">
              <div class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden h-100">
                <img src="https://images.unsplash.com/photo-1516979187457-637abb4f9353?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTd8fGJvb2t8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" class="card-img-top rounded" alt="...">
                <br>
              <h2 class="price-value d-flex align-items-center">
                <span>Buku Produktifitas </span>
              </h2>
              <p class="price-caption">
                Buku Produktifitas Membantu menagement waktumu
              </p>
              <div class="price-list">
                <p class="d-flex align-items-center check">
                  <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                    <img class="img-fluid"
                      src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png"
                      alt="" /> </span>Penulis: haris
                </p>
                
              </div>
              <button class="btn btn-outline d-flex justify-content-center align-items-center w-100">
                Baca Sekarang
              </button>
            </div>
          </div>
          <div class="mx-auto card-item position-relative">
              <div class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden h-100">
                <img src="https://images.unsplash.com/photo-1589998059171-988d887df646?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1476&q=80" class="card-img-top rounded" alt="...">
                <br>
              <h2 class="price-value d-flex align-items-center">
                <span>Buku Lelah </span>
              </h2>
              <p class="price-caption">
                Baca ini saat engkau lelah
              </p>
              <div class="price-list">
                <p class="d-flex align-items-center check">
                  <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                    <img class="img-fluid"
                      src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png"
                      alt="" /> </span>Penulis: najib
                </p>
                
              </div>
              <button class="btn btn-outline d-flex justify-content-center align-items-center w-100">
                Baca Sekarang
              </button>
            </div>
          </div>

          <div class="mx-auto card-item position-relative">
              <div class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden h-100">
                <img src="https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OXx8Ym9va3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" class="card-img-top rounded" alt="...">
                <br>
              <h2 class="price-value d-flex align-items-center">
                <span>Buku Amarah</span>
              </h2>
              <p class="price-caption">
                Buku cocok untukmu saat tidak baik-baik saja
              </p>
              <div class="price-list">
                <p class="d-flex align-items-center check">
                  <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                    <img class="img-fluid"
                      src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png"
                      alt="" /> </span>Penulis: Bayu
                </p>
                
              </div>
              <button class="btn btn-outline d-flex justify-content-center align-items-center w-100">
                Baca Sekarang
              </button>
            </div>
          </div>
          <div class="mx-auto card-item position-relative">
              <div class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden h-100">
                <img src="https://media.istockphoto.com/photos/man-reading-book-picture-id1364119199?b=1&k=20&m=1364119199&s=170667a&w=0&h=IkJR4C4L_uLyJOy4ocOEJHVniCxkYS6L5EbXqHeSy08=" class="card-img-top rounded" alt="...">
                <br>
              <h2 class="price-value d-flex align-items-center">
                <span>Notulensi </span>
              </h2>
              <p class="price-caption">
                Tuliskan Perasaanmu
              </p>
              <div class="price-list">
                <p class="d-flex align-items-center check">
                  <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                    <img class="img-fluid"
                      src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png"
                      alt="" /> </span>Penulis: Andhika Pratama
                </p>
                
              </div>
              <button class="btn btn-outline d-flex justify-content-center align-items-center w-100">
                Baca Sekarang
              </button>
            </div>
          </div>
          
          
        </div>
        
      </div>
    </div>
  </section> 

  <section class="h-100 w-100" style="box-sizing: border-box; background-color: #f5f5f5">
    <style scoped>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

      .content-4-1 .btn:focus,
      .content-4-1 .btn:active {
        outline: none !important;
      }

      .content-4-1 .width-left {
        width: 0%;
      }

      .content-4-1 .width-right {
        width: 100%;
        height: 100%;
        padding: 8rem 2rem;
        background-color: #fcfdff;
      }

      .content-4-1 .centered {
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
      }

      .content-4-1 .right {
        width: 100%;
      }

      .content-4-1 .title-text {
        font: 600 1.875rem/2.25rem Poppins, sans-serif;
        margin-bottom: 0.75rem;
      }

      .content-4-1 .caption-text {
        font: 400 0.875rem/1.75rem Poppins, sans-serif;
        color: #a8adb7;
      }

      .content-4-1 .input-label {
        font: 500 1.125rem/1.75rem Poppins, sans-serif;
        color: #39465b;
      }

      .content-4-1 .div-input {
        font: 300 1rem/1.5rem Poppins, sans-serif;
        padding: 1rem 1.25rem;
        margin-top: 0.75rem;
        border-radius: 0.75rem;
        border: 1px solid #cacbce;
        color: #2a3240;
        transition: 0.3s;
      }

      .content-4-1 .div-input:focus-within {
        border: 1px solid #2ec49c;
        color: #2a3240;
        transition: 0.3s;
      }

      .content-4-1 .div-input input::placeholder {
        color: #cacbce;
        transition: 0.3s;
      }

      .content-4-1 .div-input:focus-within input::placeholder {
        color: #2a3240;
        outline: none;
        transition: 0.3s;
      }

      .content-4-1 .div-input .icon-toggle-empty-4-1 path,
      .content-4-1 .div-input:focus-within .icon path {
        transition: 0.3;
        fill: #2ec49c;
        transition: 0.3s;
      }

      .content-4-1 .input-field {
        font: 300 1rem/1.5rem Poppins, sans-serif;
        width: 100%;
        background-color: #fcfdff;
        transition: 0.3s;
      }

      .content-4-1 .input-field:focus {
        outline: none;
        transition: 0.3s;
      }

      .content-4-1 .forgot-password {
        font: 400 0.875rem/1.25rem Poppins, sans-serif;
        color: #cacbce;
        transition: 0.3s;
        text-decoration: none;
      }

      .content-4-1 .forgot-password:hover {
        color: #2a3240;
      }

      .content-4-1 .btn-fill {
        font: 500 1.25rem/1.75rem Poppins, sans-serif;
        background-image: linear-gradient(rgba(91, 203, 173, 1),
            rgba(39, 194, 153, 1));
        padding: 0.75rem 1rem;
        margin-top: 2.25rem;
        border-radius: 0.75rem;
        transition: 0.5s;
      }

      .content-4-1 .btn-fill:hover {
        background-image: linear-gradient(#2ec49c, #2ec49c);
        transition: 0.5s;
      }

      .content-4-1 .bottom-caption {
        font: 400 0.875rem/1.25rem Poppins, sans-serif;
        margin-top: 2rem;
        color: #2a3240;
      }

      .content-4-1 .green-bottom-caption {
        color: #2ec49c;
        font-weight: 500;
      }

      .content-4-1 .green-bottom-caption:hover {
        color: #2ec49c;
        cursor: pointer;
        text-decoration: underline;
      }

      @media (min-width: 576px) {
        .content-4-1 .width-right {
          padding: 8rem 4rem;
        }

        .content-4-1 .right {
          width: 58.333333%;
        }
      }

      @media (min-width: 768px) {
        .content-4-1 .right {
          width: 66.666667%;
        }
      }

      @media (min-width: 992px) {
        .content-4-1 .width-left {
          width: 48%;
        }

        .content-4-1 .width-right {
          width: 52%;
        }

        .content-4-1 .right {
          width: 75%;
        }
      }

      @media (min-width: 1200px) {
        .content-4-1 .right {
          width: 58.333333%;
        }
      }
    </style>
    <div class="content-4-1 d-flex flex-column align-items-center h-100 flex-lg-row"
      style="font-family: 'Poppins', sans-serif">
      <div class="position-relative d-none d-lg-block h-100 width-left">
        <img class="position-absolute img-fluid centered"
          src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-11.png"
          alt="" />
      </div>
      <div class="d-flex mx-auto align-items-left justify-content-left width-right mx-lg-0">
        <div class="right mx-lg-0 mx-auto">
          <div class="align-items-center justify-content-center d-lg-none d-flex">
            <img class="img-fluid"
              src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-11.png"
              alt="" />
          </div>
          <h3 class="title-text">Kirimkan Karyamu!</h3>
          <p class="caption-text">
            Untuk Mengubah Dunia<br />
            Kamu Perlu mempublikasi karyamu
          </p>
          <form style="margin-top: 1.5rem" action="" method="post">
            <div style="margin-bottom: 1.75rem">
              <label for="" class="d-block input-label">Email Address</label>
              <div class="d-flex w-100 div-input">
                <svg class="icon" style="margin-right: 1rem" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M5 5C3.34315 5 2 6.34315 2 8V16C2 17.6569 3.34315 19 5 19H19C20.6569 19 22 17.6569 22 16V8C22 6.34315 20.6569 5 19 5H5ZM5.49607 7.13174C5.01655 6.85773 4.40569 7.02433 4.13168 7.50385C3.85767 7.98337 4.02427 8.59422 4.50379 8.86823L11.5038 12.8682C11.8112 13.0439 12.1886 13.0439 12.4961 12.8682L19.4961 8.86823C19.9756 8.59422 20.1422 7.98337 19.8682 7.50385C19.5942 7.02433 18.9833 6.85773 18.5038 7.13174L11.9999 10.8482L5.49607 7.13174Z"
                    fill="#CACBCE" />
                </svg>
                <input class="input-field border-0" type="email" name="" id="" placeholder="Your Email Address"
                  autocomplete="on" required />
              </div>
            </div>
            <div style="margin-top: 1rem">
              <label for="" class="d-block input-label">Link Karya</label>
              <div class="d-flex w-100 div-input">
                <svg class="icon" style="margin-right: 1rem" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  
                </svg>
                <input class="input-field border-0" type="text" name="" id="password-content-4-1"
                  placeholder="Link karyamu" minlength="6" required />
                <div onclick="togglePassword()">
                  
                </div>
              </div>
            </div>
            <div class="d-flex justify-content-end" style="margin-top: 0.75rem">
           
            </div>
            <button class="btn btn-fill text-white d-block w-100" type="submit">
              Kirim karyamu Sekarang
            </button>
          </form>
          <p class="text-center bottom-caption">
           Masi Ragu-ragu?
            <span class="green-bottom-caption">Hubungi Kami</span>
          </p>
        </div>
      </div>
    </div>

    <!-- Password toggle -->
    <script>
      function togglePassword() {
        var x = document.getElementById("password-content-4-1");
        if (x.type === "password") {
          x.type = "text";
          document
            .getElementById("icon-toggle")
            .setAttribute("fill", "#2ec49c");
        } else {
          x.type = "password";
          document
            .getElementById("icon-toggle")
            .setAttribute("fill", "#CACBCE");
        }
      }
    </script>
  </section> 

  <section class="content my-5 py-5">
    <style scoped>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap");

      * {
        font-family: 'Poppins', sans-serif !important;
      }

      body .content {
        background: #FFFFFF;
      }

      body .content .content {
        padding-top: 70px;
        padding-bottom: 70px;
      }

      body .content .content .tagline {
        font-family: Poppins;
        font-style: normal;
        font-weight: bold;
        font-size: 18px;
        line-height: 27px;
        color: #3547AC !important;
      }

      body .content .content .headline {
        font-family: Poppins;
        font-style: normal;
        font-weight: bold;
        font-size: 45px;
        line-height: 67px;
        color: #111F37;
      }

      body .content .content .subheadline {
        font-family: Poppins;
        font-style: normal;
        font-weight: 500;
        font-size: 18px;
        line-height: 28px;
        /* or 156% */
        color: #627492;
      }

      body .content .content .button-header {
        margin-top: 40px;
      }

      body .content .content .button-header .btn-started {
        width: 150px;
        height: 50px;
        left: 562px;
        top: 569px;
        background: #3547AC;
        border-radius: 8px;
        font-family: Poppins;
        font-style: normal;
        font-weight: 600;
        font-size: 16px;
        line-height: 24px;
        /* identical to box height */
        text-align: center;
        color: #FFFFFF;
      }

      body .content .content .img-brand {
        margin-top: 34px;
      }

      body .content .content .img-brand img {
        margin-right: 60px;
      }

      @media only screen and (max-width: 768px) {
        body .content .content .img-brand img {
          margin-right: 30px;
          margin-left: 30px;
        }
      }

      /*# sourceMappingURL=main.css.map */
    </style>
    <div class="container">
      <div class="row content">
        <div class="col-md-6  my-auto">
          <img
            src="https://images.unsplash.com/photo-1553481187-be93c21490a9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8Z2FtZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
            alt="header" class="img-fluid rounded">
        </div>
        <div class="col-md-6 mt-4 mt-md-0">
          <div class="tagline text-start">
            Mainkan Gamemu 
          </div>
          <div class="headline mt-3 text-start">
            Asah kemampuan Anda <br class="d-none d-md-block">
            Dengan Metode belajar Seperti Game yang kami miliki
          </div>
          <div class="subheadline mt-4">
           Jangan Ragu untuk memulai
          </div>
          <div class="button-header">
            <button class="btn btn-started">Mulai</button>
          </div>
        </div>
        
      </div>
    </div>
  </section> 

    </body>
  </html>

