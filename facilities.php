<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Luxury Hotel-Hizmetlerimiz</title>
  <?php require('inc/links.php'); ?>



</head>



<body class="bg-light">
  <?php require("inc/header.php") ?>


  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center ">Hizmetlerimiz</h2>

    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">

      Konforlu bir konaklama deneyimi sunmak için çeşitli olanaklar sağlıyoruz.
      Odalarımızda yüksek hızlı Wi-Fi, klima, minibar ve 24 saat sıcak su gibi imkanlar bulunmaktadır. <br>
      Ayrıca, misafirlerimize ücretsiz otopark, 24 saat resepsiyon hizmeti ve oda servisi sunmaktayız.
      İhtiyacınız olan her şey, keyifli bir konaklama için düşünüldü!
    </p>


  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-4">
          <img src="images/facilities/wifi.jpg" width="40px">
          <h5>Wifi</h5>


        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-4">
          <img src="images/facilities/minibar.png" width="40px">
          <h5>Minibar</h5>


        </div>


      </div>
      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-4">
          <img src="images/facilities/air-conditioner.png" width="40px">
          <h5>Isıtma Sistemi</h5>


        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-4">
          <img src="images/facilities/parking.png" width="40px">
          <h5>Ücretsiz Otopark</h5>


        </div>
      </div>


    </div>

  </div>

  <?php require('inc/footer.php') ?>



  <script src="https://code.jquery.com/jquery-3.6.0.min.js">
  </script>
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