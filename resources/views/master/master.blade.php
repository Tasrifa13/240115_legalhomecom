<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Legal Home</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/navbar.css" />
    <link rel="stylesheet" href="assets/css/about.css" />
    <link rel="stylesheet" href="assets/css/home.css" />
    <link rel="stylesheet" href="assets/css/legalitas.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link href="theme/home/assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="theme/home/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="theme/home/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="theme/home/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="theme/home/assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="theme/home/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
    <link href="css/about.css" rel="stylesheet" />

    <link href="theme/home/assets/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&family=Roboto:wght@600&family=Josefin+Sana:ital,wght@0,100;0,200;0,300;0,400;0,500;1,600;1,700&display=swap" rel="stylesheet" />
    <link href="css/footer.css" rel="stylesheet" />

    <!-- Favicons -->
    <link href="theme/home/assets/img/favicon.png" rel="icon" />
    <link href="theme/home/assets/img/apple-touch-icon.png" rel="apple-touch-icon" />
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <!-- aos -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    @include('master.layout_home.header')
    @yield('content')
    @include('master.layout_home.footer')

    <!-- Vendor JS Files -->
    <script src="theme/home/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="theme/home/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="theme/home/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="theme/home/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="theme/home/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="theme/home/assets/vendor/php-email-form/validate.js"></script>
    <script src="theme/home/assets/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
</body>
</html>
