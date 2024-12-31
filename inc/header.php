<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxury Hotel</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">



    <!-- Özel CSS -->
    <style>
        .button-62 {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 5px 30px;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 1000;
            /* z-index ekle */
        }

        .button-62:hover {
            background-color: #0056b3;
            color: #fff;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgb(99, 15, 8);">
        <div class="container px-4">
            <a class="navbar-brand" href="/">
                <span style="color:#ffffff; font-size:26px; font-weight:bold; letter-spacing: 1px;">Luxury Hotel</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
                    <li class="nav-item"><a class="nav-link" href="index.php">Anasayfa</a></li>
                    <li class="nav-item"><a class="nav-link" href="rooms.php">Odalarımız</a></li>
                    <li class="nav-item"><a class="nav-link" href="facilities.php">İmkanlarımız</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">Hakkımızda</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Bize Ulaşın</a></li>
                    <li class="nav-item pe-2">
                        <button class="button-62" role="button" data-bs-toggle="modal"
                            data-bs-target="#LoginModal">Giriş</button>
                    </li>
                    <li class="nav-item">
                        <button class="button-62" role="button" data-bs-toggle="modal"
                            data-bs-target="#registerModal">Kayıt Ol</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Login Modal -->
    <div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Giriş Yap</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="email" class="form-label">E-posta</label>
                            <input type="email" class="form-control" id="email" placeholder="E-posta adresinizi girin">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Şifre</label>
                            <input type="password" class="form-control" id="password" placeholder="Şifrenizi girin">
                        </div>
                        <button type="submit" class="btn btn-primary">Giriş Yap</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Register Modal -->
    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="">
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                            <i class="bi bi-person-lines-fill fs-3 me-2"></i>
                            Kullanıcı Kaydı
                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                            Not: Bilgileriniz kimliğinizle eşleşmelidir (Kimlik kartı, pasaport, ehliyet). Bu bilgiler
                            giriş
                            sırasında gerekli olacaktır.
                        </span>
                        <div class="container-fluid">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Ad</label>
                                    <input type="text" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Email adresi</label>
                                    <input type="email" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Telefon numarası</label>
                                    <input type="number" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Fotoğraf</label>
                                    <input type="file" class="form-control shadow-none">
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Adres</label>
                                    <textarea class="form-control shadow-none" rows="1"></textarea>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Posta Kodu</label>
                                    <input type="number" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Doğum tarihi</label>
                                    <input type="date" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Şifre</label>
                                    <input type="password" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Şifreyi doğrula</label>
                                    <input type="password" class="form-control shadow-none">
                                </div>
                                <div class="col-12 text-center mt-4">
                                    <button type="submit" class="btn btn-dark shadow-none">Kayıt Ol</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>