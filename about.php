<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Luxury Hotel-Hakkımızda</title>
  <?php require('inc/links.php'); ?>



</head>



<body class="bg-light">
  <?php require("inc/header.php"); ?>


  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center ">Biz Kimiz?</h2>



  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="bg-white rounded shadow p-4 border-4">
          <h3 class="mb-3"></h3>
          <p>
            Geniş ve konforlu odalarımız, özenle hazırlanmış menüler sunan restoranımız ve misafir memnuniyetini öncelik alan profesyonel ekibimizle, kendinizi evinizde gibi hissedeceksiniz.
            Spa ve fitness olanaklarımızla dinlenip yenilenirken, çevredeki turistik yerleri keşfetmek için de ideal bir başlangıç noktasıdır.
            Size özel ayrıcalıklarla dolu bir tatil için Luxury Hotel’e davetlisiniz!
          </p>
        </div>
        <div class="col-lg-5 col-md-5 mb-4"></div>
        <img src="images/facilities/otel.jpg" class="w-100">

      </div>
    </div>
  </div>
  </div>




  <?php require('inc/footer.php'); ?>



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