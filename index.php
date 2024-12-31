<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Luxury Hotel</title>
  <?php require('inc/links.php'); ?>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>
<style>
  .availability-form {
    margin-top: -50px;
    z-index: 2;
    position: relative;
  }

  @media screen and (max-width: 575px) {
    .availability-form {
      margin-top: 0px;
      padding: 0 35px;

    }
  }

  .button-62 {
    background: linear-gradient(to bottom right, #EF4765, #FF9A5A);
    border: 0;
    border-radius: 12px;
    color: #FFFFFF;
    cursor: pointer;
    display: inline-block;
    font-family: -apple-system, system-ui, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
    font-size: 16px;
    font-weight: 500;
    line-height: 2.5;
    outline: transparent;
    padding: 0 1rem;
    text-align: center;
    text-decoration: none;
    transition: box-shadow .2s ease-in-out;
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
    white-space: nowrap;
  }

  .button-62:not([disabled]):focus {
    box-shadow: 0 0 .25rem rgba(0, 0, 0, 0.5), -.125rem -.125rem 1rem rgba(239, 71, 101, 0.5), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
  }

  .button-62:not([disabled]):hover {
    box-shadow: 0 0 .25rem rgba(0, 0, 0, 0.5), -.125rem -.125rem 1rem rgba(239, 71, 101, 0.5), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
  }
</style>

<body class="bg-light">
  <?php require("inc/header.php") ?>

  <div
    class="swiper mySwiper swiper-fade swiper-initialized swiper-horizontal swiper-watch-progress swiper-backface-hidden">
    <div class="swiper-wrapper" id="swiper-wrapper-25f9a101bd2a1d51b" aria-live="polite">
      <div class="swiper-slide">
        <img src="images/carousel/1.png" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/2.png" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/3.png" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/4.png" class="w-100 d-block">
      </div>
      <dincclass="swiper-slide">
        <img src="images/carousel/5.png" class="w-100 d-block">
    </div>

  </div>


  </div>

  <div class="container availability-form">
    <div class="row">
      <div class="col-lg-12 bg-white shadow p-4 rounded">
        <h5 class="mb-4">"Size Özel Müsait Odaları Görüntüleyin"</h5>
        <form>
          <div class="row align-items-end">
            <div class="col-lg-3 mb-3">
              <label class="form-label d-block" style="font-weight: 500;">Giriş Tarihi</label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-lg-3 mb-3">
              <label class="form-label d-block" style="font-weight: 500;">Çıkış Tarihi</label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-lg-3 mb-3">
              <label class="form-label d-block" style="font-weight: 500;">Kişi Sayısı</label>
              <select class="form-select shadow-none">
                <option selected>Kişi sayısı seçin</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </div>
            <div class="col-lg-1 mb-lg-3 mt-2">
              <button type="submit" class="btn btn-outline shadow-none btn-outline-danger">Kaydet</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- odalar -->

  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Odalarımız</h2>



  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="images/rooms/1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5>Standart Oda</h5>
            <h6 class="mb-4">₺1790</h6>
            <div class="features mb-4">
            </div>

            <h6 class="mb-1">Özellikler</h6>
            <span class="badge rounded-pill text-dark text-wrap lh-base">
              Misafirlerimiz için hem konforlu hem de bütçe dostu bir seçenek sunan Standart Odalarımız,
              huzurlu bir
              konaklama deneyimi için özenle tasarlanmıştır.
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
              Çift kişilik yatak, bir banyo ve manzarasız balkon.
            </span>
            <div class="rating mb-4">
            </div>
            <h6>Puanlama</h6>
            <span class="badge rounded-pill">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </span>


          </div>




          <p class="card-text">
          </p>
          <div class="d-flex justify-content-evenly mb-2">


            <a href="#" class="btn btn-sm text-white btn-danger shadow-none">Odaya Git</a>
            <a href="#" class="btn btn-sm btn-outline-dark  shadow-none ">Detayları gör</a>

          </div>
        </div>

      </div>
      <div class="col-lg-4 col-md-6 my-3">


        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="images/rooms/1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5>Standart Oda</h5>
            <h6 class="mb-4">₺1790</h6>
            <div class="features mb-4">
            </div>

            <h6 class="mb-1">Özellikler</h6>
            <span class="badge rounded-pill text-dark text-wrap lh-base">
              Misafirlerimiz için hem konforlu hem de bütçe dostu bir seçenek sunan Standart Odalarımız,
              huzurlu bir
              konaklama deneyimi için özenle tasarlanmıştır.
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
              Çift kişilik yatak, bir banyo ve manzarasız balkon.
            </span>
            <div class="rating mb-4">
            </div>
            <h6>Puanlama</h6>
            <span class="badge rounded-pill">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </span>


          </div>




          <p class="card-text">
          </p>
          <div class="d-flex justify-content-evenly mb-2">


            <a href="#" class="btn btn-sm btn-danger text-white shadow-none ">Odaya Git</a>
            <a href="#" class="btn btn-sm btn-outline-dark  shadow-none ">Detayları gör</a>

          </div>
        </div>

      </div>
      <div class="col-lg-4 col-md-6 my-3">


        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="images/rooms/1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5>Standart Oda</h5>
            <h6 class="mb-4">₺1790</h6>
            <div class="features mb-4">
            </div>

            <h6 class="mb-1">Özellikler</h6>
            <span class="badge rounded-pill text-dark text-wrap lh-base">
              Misafirlerimiz için hem konforlu hem de bütçe dostu bir seçenek sunan Standart Odalarımız,
              huzurlu bir
              konaklama deneyimi için özenle tasarlanmıştır.
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
              Çift kişilik yatak, bir banyo ve manzarasız balkon.
            </span>
            <div class="rating mb-4">
            </div>
            <h6>Puanlama</h6>
            <span class="badge rounded-pill">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </span>


          </div>




          <p class="card-text">
          </p>
          <div class="d-flex justify-content-evenly mb-2">


            <a href="#" class="btn btn-sm text-white btn-danger shadow-none ">Odaya Git</a>
            <a href="#" class="btn btn-sm btn-outline-dark  shadow-none ">Detayları gör</a>

          </div>
        </div>

      </div>

      <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Odaları Görüntüle</a>

      </div>
    </div>

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">İmkanlarımız</h2>

    <div class="container">
      <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 " </div>
          <img src="images/facilities/wifi.jpg" width="80px">
          <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 " </div>
          <img src="images/facilities/wifi.jpg" width="80px">
          <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 " </div>
          <img src="images/facilities/wifi.jpg" width="80px">
          <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 " </div>
          <img src="images/facilities/wifi.jpg" width="80px">
          <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 " </div>
          <img src="images/facilities/wifi.jpg" width="80px">
          <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-12 text-center mt-5">
          <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">İmkanlarımız</a>


        </div>
      </div>

      <!-- müşteri görüşleri-->

      <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Müşterilerimizin Yorumları</h2>

      <div class="container">
        <div class="swiper swiper-testimonials">
          <div class="swiper-wrapper">

            <!-- Yorum Kartı -->
            <div class="swiper-slide bg-white p-4">
              <div class="profile d-flex align-items-center p-4">
                <img src="images/facilities/rate.png" width="30px" alt="Profil Resmi">
                <h6 class="m-0 ms-2">Random Kullanıcı1</h6>
              </div>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum omnis suscipit
                adipisci,
                accusantium ex laboriosam minima at repudiandae dignissimos. Asperiores praesentium nam
                impedit animi
                distinctio quod voluptatem enim voluptatum in?</p>
              <div class="rating">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </div>
            </div>
            <div class="swiper-slide bg-white p-4">
              <div class="profile d-flex align-items-center p-4">
                <img src="images/facilities/rate.png" width="30px" alt="Profil Resmi">
                <h6 class="m-0 ms-2">Random Kullanıcı1</h6>
              </div>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum omnis suscipit
                adipisci,
                accusantium ex laboriosam minima at repudiandae dignissimos. Asperiores praesentium nam
                impedit animi
                distinctio quod voluptatem enim voluptatum in?</p>
              <div class="rating">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </div>
            </div>
            <div class="swiper-slide bg-white p-4">
              <div class="profile d-flex align-items-center p-4">
                <img src="images/facilities/rate.png" width="30px" alt="Profil Resmi">
                <h6 class="m-0 ms-2">Random Kullanıcı1</h6>
              </div>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum omnis suscipit
                adipisci,
                accusantium ex laboriosam minima at repudiandae dignissimos. Asperiores praesentium nam
                impedit animi
                distinctio quod voluptatem enim voluptatum in?</p>
              <div class="rating">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </div>
            </div>



            <div class="swiper-slide-shadow-left swiper-slide-shadow-coverflow"
              style="opacity: 0; transition-duration: 0ms;"></div>
            <div class="swiper-slide-shadow-right swiper-slide-shadow-coverflow"
              style="opacity: 0; transition-duration: 0ms;"></div>
          </div>

        </div>
        <div class="swiper-pagination swiper-pagination-bullets swiper-pagination-horizontal">

        </div>
      </div>

      <br><br><br>
      <br><br><br>

      <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Yol Tarifi</h2>

      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-8 p-4 mg-lg-0 mb-3 bg-white rounded">
            <iframe class="w-100" height="320"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3011.3740576110454!2d28.91503357569448!3d40.99518532023156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab7f7b9620421%3A0xfe959152b4ae62cf!2zxLBzdGFuYnVsIFRvcGthcMSxIMOcbml2ZXJzaXRlc2k!5e0!3m2!1str!2str!4v1734812625551!5m2!1str!2str"
              loading="lazy"></iframe>"

          </div>
          <div class="col-lg-4 col-md-4">
            <div class="bg-white p-4 rounded mb-4">
              <h5>Bize Ulaşın</h5>
              <a href="tel: +90545555555" class="d-inline-block mb-2 text-decoration-none text-dark">
                <i class="bi bi-telephone-fill"></i>+90545555555</a>

            </div>
            <div class="bg-white p-4 rounded mb-4">
              <h5>Bizi Takip Edin</h5>
              <a href="#" class="d-inline-block mb-3">
                <span class="badge bf-light text-dark fs-6 p-2">
                  <i class="bi bi-twitter-x"></i>

                </span>
              </a>
              <span class="badge bf-light text-dark fs-6 p-2">
                <i class="bi bi-instagram"></i>

              </span>
              </a>

            </div>

          </div>
        </div>



      </div>


      <!DOCTYPE html>
      <html lang="tr">

      <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Footer Tasarımı</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
          rel="stylesheet">
        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
        <style>
          body {
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
          }

          .bg-footer {
            background: linear-gradient(to bottom, #ffffff, #e6e6e6);
          }

          h3.h-font {
            font-family: 'Cursive', sans-serif;
          }

          .text-dark:hover {
            text-decoration: underline;
          }
        </style>
      </head>

      <body>

        <!-- Footer -->


        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js">
        </script>

      </body>

      </html>

      <br><br><br>
      <br><br><br>

      <?php require('inc/footer.php') ?>

      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="/js/main.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>


      <script>
        var swiper = new Swiper(".mySwiper", {
          spaceBetween: 30,
          effect: "fade",
          loop: true,
          autoplay: {
            delay: 3500,
            diableOnInteraction: false
          }
        });


        var swiper = new Swiper(".swiper-testimonials", {
          effect: "coverflow",
          grabCursor: true,
          centeredSlides: true,
          slidesPerView: "auto",
          slidesPerView: "3",
          coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
          },
          pagination: {
            el: ".swiper-pagination",
          },
        });
      </script>



</html>