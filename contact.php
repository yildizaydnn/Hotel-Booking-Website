<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Luxury Hotel - Bize Ulaşın</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
  <style>
    .contact-section {
      background-color: #f8f9fa;
      padding: 50px 0;
    }

    .form-control,
    .btn {
      border-radius: 0;
    }

    .btn-primary {
      background-color: #5a5a5a;
      border: none;
    }

    .btn-primary:hover {
      background-color: #343a40;
    }

    .map {
      height: 300px;
      width: 100%;
    }
  </style>
</head>

<body>
  <!-- Header -->
  <header class="bg-dark text-white py-3">
    <div class="container">
      <h1 class="text-center">Luxury Hotel - Bize Ulaşın</h1>
    </div>
  </header>

  <!-- Contact Section -->
  <section class="contact-section">
    <div class="container">
      <div class="row">
        <!-- Contact Form -->
        <div class="col-md-6">
          <h2>Bize Ulaşın</h2>
          <p>Herhangi bir sorunuz veya talebiniz için aşağıdaki formu doldurabilirsiniz:</p>
          <form>
            <div class="mb-3">
              <label for="name" class="form-label">Adınız</label>
              <input type="text" class="form-control" id="name" placeholder="Adınızı girin">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">E-posta</label>
              <input type="email" class="form-control" id="email" placeholder="E-posta adresinizi girin">
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">Mesajınız</label>
              <textarea class="form-control" id="message" rows="5" placeholder="Mesajınızı yazın"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Gönder</button>
          </form>
        </div>

        <!-- Contact Info -->
        <div class="col-md-6">
          <h2>İletişim Bilgileri</h2>
          <p>Bizimle aşağıdaki bilgilerden de iletişime geçebilirsiniz:</p>
          <ul class="list-unstyled">
            <li><i class="bi bi-geo-alt-fill"></i> Adres: Lorem Ipsum Cad. No: 123, İstanbul</li>
            <li><i class="bi bi-telephone-fill"></i> Telefon: +90 555 123 4567</li>
            <li><i class="bi bi-envelope-fill"></i> E-posta: info@luxuryhotel.com</li>
          </ul>

          <h3>Konumumuz</h3>
          <div class="map bg-secondary" id="map"></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-dark text-white py-3">
    <div class="container text-center">
      &copy; 2024 Luxury Hotel. Tüm hakları saklıdır.
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <iframe class="w-100" height="320"
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3011.3740576110454!2d28.91503357569448!3d40.99518532023156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab7f7b9620421%3A0xfe959152b4ae62cf!2zxLBzdGFuYnVsIFRvcGthcMSxIMOcbml2ZXJzaXRlc2k!5e0!3m2!1str!2str!4v1734812625551!5m2!1str!2str"
    loading="lazy"></iframe>"
  <script>
    // Google Maps API entegrasyonu (Varsa eklenebilir)
    // Harita örneği:
    function initMap() {
      const location = {
        lat: 41.0082,
        lng: 28.9784
      }; // İstanbul koordinatları
      const map = new google.maps.Map(document.getElementById('map'), {
        zoom: 14,
        center: location
      });
      const marker = new google.maps.Marker({
        position: location,
        map: map
      });
    }
  </script>
</body>

</html>