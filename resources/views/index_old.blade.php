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
            <p class="text-caption">FREE 30 DAY TRIAL</p>
            <h1 class="title-text-big">
              Platform Edukasi<br class="d-lg-block d-none" />
              Kreatif dan Menyenangkan 
            </h1>
            <div class="d-flex flex-sm-row flex-column align-items-center mx-lg-0 mx-auto justify-content-center gap-3">
              <button class="btn d-inline-flex mb-md-0 btn-try text-white">
                Try it free
              </button>
              <button class="btn btn-outline">
                <div class="d-flex align-items-center">
                  <svg class="me-2" width="13" height="12" viewBox="0 0 13 13" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M10.9293 7.99988L6.66668 5.15788V10.8419L10.9293 7.99988ZM12.9173 8.27722L5.85134 12.9879C5.80115 13.0213 5.74283 13.0404 5.6826 13.0433C5.62238 13.0462 5.5625 13.0327 5.50934 13.0042C5.45619 12.9758 5.41175 12.9334 5.38075 12.8817C5.34976 12.83 5.33337 12.7708 5.33334 12.7105V3.28922C5.33337 3.22892 5.34976 3.16976 5.38075 3.11804C5.41175 3.06633 5.45619 3.02398 5.50934 2.99552C5.5625 2.96706 5.62238 2.95355 5.6826 2.95644C5.74283 2.95932 5.80115 2.97848 5.85134 3.01188L12.9173 7.72255C12.963 7.75299 13.0004 7.79423 13.0263 7.84261C13.0522 7.89099 13.0658 7.94501 13.0658 7.99988C13.0658 8.05475 13.0522 8.10878 13.0263 8.15716C13.0004 8.20553 12.963 8.24678 12.9173 8.27722Z"
                      fill="#555B61" />
                  </svg>
                  Watch the video
                </div>
              </button>
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
  </section><section class="h-100 w-100 bg-white" style="box-sizing: border-box;">
    <style scoped>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

      .content-3-1 .btn:focus,
      .content-3-1 .btn:active {
        outline: none !important;
      }

      .content-3-1 {
        padding: 5rem 2rem;
      }

      .content-3-1 .img-hero {
        width: 100%;
        margin-bottom: 3rem;
      }

      .content-3-1 .right-column {
        width: 100%;
      }

      .content-3-1 .title-text {
        font: 600 1.875rem/2.25rem Poppins, sans-serif;
        margin-bottom: 2.5rem;
        letter-spacing: -0.025em;
        color: #121212;
      }

      .content-3-1 .title-caption {
        font: 500 1.5rem/2rem Poppins, sans-serif;
        margin-bottom: 1.25rem;
        color: #121212;
      }

      .content-3-1 .circle {
        font: 500 1.25rem/1.75rem Poppins, sans-serif;
        height: 3rem;
        width: 3rem;
        margin-bottom: 1.25rem;
        border-radius: 9999px;
        background-color: #ffbf56;
      }

      .content-3-1 .text-caption {
        font: 400 1rem/1.75rem Poppins, sans-serif;
        letter-spacing: 0.025em;
        color: #565656;
      }

      .content-3-1 .btn-learn {
        font: 600 1rem/1.5rem Poppins, sans-serif;
        padding: 1rem 2.5rem;
        background-color: #ff7c57;
        transition: 0.3s;
        letter-spacing: 0.025em;
        border-radius: 0.75rem;
      }

      .content-3-1 .btn-learn:hover {
        background-color: #ff9779;
        transition: 0.3s;
      }

      @media (min-width: 768px) {
        .content-3-1 .title-text {
          font: 600 2.25rem/2.5rem Poppins, sans-serif;
        }
      }

      @media (min-width: 992px) {
        .content-3-1 .img-hero {
          width: 50%;
          margin-bottom: 0;
        }

        .content-3-1 .right-column {
          width: 50%;
        }

        .content-3-1 .circle {
          margin-right: 1.25rem;
          margin-bottom: 0;
        }
      }
    </style>
    <div class="content-3-1 container-xxl mx-auto position-relative" style="font-family: 'Poppins', sans-serif">
      <div class="d-flex flex-lg-row flex-column align-items-center">
        <!-- Left Column -->
        <div class="img-hero text-center justify-content-center d-flex">
          <img id="hero" class="img-fluid"
            src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-1.png"
            alt="" />
        </div>

        <!-- Right Column -->
        <div class="right-column d-flex flex-column align-items-lg-start align-items-center text-lg-start text-center">
          <h2 class="title-text">3 Keys Benefit</h2>
          <ul class="p-0 m-0">
            <li class="list-unstyled" style="margin-bottom: 2rem">
              <h4
                class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                <span class="circle text-white d-flex align-items-center justify-content-center">
                  1
                </span>
                Trusted Mentor
              </h4>
              <p class="text-caption">
                We have provided highly experienced mentors<br class="d-sm-inline d-none" />
                for several years.
              </p>
            </li>
            <li class="list-unstyled" style="margin-bottom: 2rem">
              <h4
                class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                <span class="circle text-white d-flex align-items-center justify-content-center">
                  2
                </span>
                Access Forever
              </h4>
              <p class="text-caption">
                Are you busy at work so it's hard to consult? don't<br class="d-sm-inline d-none" />
                worry because you can access anytime.
              </p>
            </li>
            <li class="list-unstyled" style="margin-bottom: 4rem">
              <h4
                class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                <span class="circle text-white d-flex align-items-center justify-content-center">
                  3
                </span>
                Halfpenny
              </h4>
              <p class="text-caption">
                We provide economical packages for those of you<br class="d-sm-inline d-none" />
                who are still in school or workers.
              </p>
            </li>
          </ul>
          <button class="btn btn-learn text-white">Learn More</button>
        </div>
      </div>
    </div>
  </section><footer class="page-footer font-small blue">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&display=swap");
        @import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap");
        @import url("https://fonts.googleapis.com/css2?family=Merriweather:wght@900&display=swap");
        @import url("https://fonts.googleapis.com/css2?family=Lato:wght@400;900&family=Merriweather:wght@900&display=swap");
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap");

        * {
            font-family: 'Poppins', 'Inter', sans-serif !important;
        }

        body footer {
            background: linear-gradient(293.57deg, #114E4E 0%, #052D2D 23.8%, #041111 42.57%, #000909 63.76%, #000909 69.62%);
            color: #EEEEEE;
            padding-top: 72px !important;
            padding-bottom: 36px !important;
        }

        body footer h5 {
            font-weight: 600 !important;
            size: 16px !important;
            line-height: 150%;
            color: #ECF1F4;
        }

        body footer .address p {
            font-weight: 400 !important;
            size: 16px !important;
            line-height: 150%;
            color: #ECF1F4;
        }

        body footer .nav-footer p {
            font-weight: 700 !important;
            size: 16px !important;
            line-height: 150%;
            color: #ECF1F4;
        }

        body footer .nav-footer a {
            font-weight: 400 !important;
            size: 16px !important;
            color: #ECF1F4;
        }

        body footer li {
            margin-bottom: 12px;
        }

        body footer .social-media a {
            margin-right: 10px;
            text-decoration: none;
        }

        body footer .copyright {
            margin-top: 76px;
            padding-top: 36px;
        }

        body footer .copyright p {
            font-weight: 400 !important;
            size: 16px !important;
            color: #ECF1F4;
        }

        body .cl-light {
            color: #EEEEEE;
        }

        body .cl-light-grey-2 {
            color: #90BCB7;
        }

        body .font-lora {
            font-family: 'Lora', sans-serif !important;
        }
    </style>
    <div class="container text-md-left">
        <div class="row">
            <div class="col-md-6 mt-md-0 mt-3 address">
                <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-workly/Logo.svg"
                    alt="logo" class="img-fluid mb-2">
                <h5 class="">Work.ly</h5>
                <p>Jl. Nyi Ageng Serang no 51B <br> Sleman Yogyakarta</p>
                <div class="mt-md-5 social-media">
                    <a href="#">
                        <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-workly/bi_linkedin.svg"
                            alt="linkedin" class="img-fluid">
                    </a>
                    <a href="#">
                        <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-workly/bi_facebook.svg"
                            alt="facebook" class="img-fluid">
                    </a>
                    <a href="#">
                        <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-workly/bi_twitter.svg"
                            alt="twitter" class="img-fluid">
                    </a>
                    <a href="#">
                        <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-workly/bi_twitch.svg"
                            alt="twitch" class="img-fluid">
                    </a>
                </div>
            </div>
            <hr class="clearfix w-100 d-md-none pb-3">
            <div class="row col-md-6 nav-footer">
                <div class="col-md-4 mb-md-0 mb-3">
                    <p>
                        Our Features
                    </p>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Adaptive</a>
                        </li>
                        <li>
                            <a href="#!">Faster</a>
                        </li>
                        <li>
                            <a href="#!">Integrated</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 mb-md-0 mb-3">
                    <p>
                        Company
                    </p>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">About Us</a>
                        </li>
                        <li>
                            <a href="#!">Blog</a>
                        </li>
                        <li>
                            <a href="#!">Join Us</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 mb-md-0 mb-3">
                    <p>
                        Help
                    </p>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">API Documentation</a>
                        </li>
                        <li>
                            <a href="#!">System Status</a>
                        </li>
                        <li>
                            <a href="#!">Talk to Support</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright row d-flex justify-content-center border-top mx-0">
        <p class="my-0">
            2021 Work.ly | All rights reserved.
        </p>
    </div>
</footer><section class="h-100 w-100 bg-white" style="box-sizing: border-box;">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        .empty-2-1{
            padding: 4rem 2rem 4rem;
        }
        .empty-2-1 .main-img{
            object-fit: contain;
            object-position: center;
            margin-bottom: 3rem;
            width: 75%;
        }
        .empty-2-1 .title-text{
            color: #272E35;
            font: 600 1.875rem/2.25rem Poppins, sans-serif;            
            margin-bottom: 1.25rem;
        }
        .empty-2-1 .title-caption{
            color: #9C9C9C;
            margin-bottom: 4rem;
            letter-spacing: 0.025em;
            line-height: 1.75rem;
        }
        .empty-2-1 .btn-back{
            background-color: #FF7C57;
            font: 600 1.125rem/1.75rem Poppins, sans-serif;            
            padding: 1rem 1.5rem;
            border-radius: 0.75rem;
        }
        .empty-2-1 .btn-back:hover{
            --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }        
        @media(min-width: 425px){
            .empty-2-1 .title-text{
                font-size: 40px;
            }
        }
        @media (min-width: 576px) {            
            .empty-2-1{
                padding-top: 5rem;
            }
            .empty-2-1 .main-img{
                margin-bottom: 4rem;
                width: auto;
            }            
        }               
    </style>
    <div class="empty-2-1 container mx-auto d-flex align-items-center justify-content-center flex-column" style="font-family: 'Poppins', sans-serif;">    
        <img class="main-img img-fluid" src="http://api.elements.buildwithangga.com/storage/files/2/assets/Empty%20State/EmptyState2/Empty-2-1.png" alt="">        
        <div class="text-center w-100">
            <h1 class="title-text">
                Opss! Something Missing
            </h1>
            <p class="title-caption">
                The page you’re looking for isn’t found. We<br class="d-sm-block d-none"> suggest you Back to Homepage.
            </p>
            <div class="d-flex justify-content-center">
                <button class="btn btn-back d-inline-flex text-white">
                    Back to Homepage
                </button>
            </div>
        </div>
    </div>
  </section><section class="h-100 w-100" style="box-sizing: border-box; background-color:#1F1D2B">
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

      .navbar-1-4.navbar-dark .navbar-nav .nav-link {
        color: #fff;
      }

      .navbar-1-4 .bg-black {
        background-color: #1f1d2b;
      }

      .navbar-1-4 .btn-get-started {
        border-radius: 20px;
        padding: 12px 30px;
        font-weight: 500;
      }

      .navbar-1-4 .btn-get-started-purple {
        background-color: #525298;
        transition: 0.3s;
      }

      .navbar-1-4 .btn-get-started-purple:hover {
        background-color: #5353a8;
        transition: 0.3s;
      }
    </style>
    <nav class="navbar-1-4 navbar navbar-expand-lg navbar-dark p-4 px-md-4 mb-3 bg-black">
      <div class="container">
        <a class="navbar-brand" href="#">
          <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M3.5 15.75C3.5 8.9845 8.98451 3.49999 15.75 3.49999H29.75C30.7165 3.49999 31.5 4.28349 31.5 5.24999C31.5 6.21649 30.7165 6.99999 29.75 6.99999H15.75C10.9175 6.99999 7 10.9175 7 15.75V29.75C7 30.7165 6.2165 31.5 5.25 31.5C4.2835 31.5 3.5 30.7165 3.5 29.75V15.75Z"
              fill="#22B07D" />
            <path
              d="M10.5 17.5C10.5 13.634 13.634 10.5 17.5 10.5H31.5C35.366 10.5 38.5 13.634 38.5 17.5V31.5C38.5 35.366 35.366 38.5 31.5 38.5H17.5C13.634 38.5 10.5 35.366 10.5 31.5V17.5Z"
              fill="#22B07D" />
          </svg>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
          aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link px-md-4 active" aria-current="page" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-md-4" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-md-4" href="#">Contacts</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-md-4" href="#">Teams</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-md-4" href="#">Review</a>
            </li>
          </ul>
          <div class="d-flex">
            <a class="btn btn-get-started btn-get-started-purple text-white" href="#">Get Started</a>
          </div>
        </div>
      </div>
    </nav>
  </section> 
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>
  </html>