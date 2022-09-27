<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>

    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
      body{
        
        background-image: url('{{ asset('asset/bg.svg') }}');
        height: 100%;
        
        /* Center and scale the image nicely */
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center; 
      }
    </style>
  </head>
  <body>
    
    <section class="mt-5  text-center">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-6">
            <h1>Abiqu Learning</h1>
            <p>Selamat datang di Abiqu.net tempat para petualang hebat!</p>
          </div>
        </div>
        <div class="row d-flex justify-content-center mt-3">
          <div class="col-md-6">
            
            <p>Silahkan Login sesuai Role mu!</p>

            <div class="row row-cols-1 row-cols-md-2 g-4">
              
              <div class="col-6 col-md-6">
                <div class="card" >
                  <a href="" class="navbar-brand" >
                  <img src="{{ asset('asset/guru.jpg') }}" style="height: 215px"  class="img-fluid "  alt="...">
                  <div class="card-body">
                    <h4 >Guru</h4>
                  </div>
                </a>
                </div>
              </div>

              <div class="col-6 col-md-6"><div class="card">
                <a href="" class="navbar-brand" >
                <img src="{{ asset('asset/anak_menulis.jpg') }}"  class="img-fluid " alt="...">
                <div class="card-body">
                  <h4>Murid</h4>
                </div>

                </a>
              </div></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>