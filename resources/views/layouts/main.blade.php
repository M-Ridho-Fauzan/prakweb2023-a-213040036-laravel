<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    {{-- icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    {{-- akhir icon --}}
    <link rel="stylesheet" href="css/style.css">{{-- File css ini dari folder public --}}
    <title>WPU | {{ $judul }}</title>
    <style>
        a {
            text-decoration: none;
            color: #000;
            transition: 0.2s;
        }

        a:hover {
            color: #555555;
            text-decoration: underline;

        }
    </style>
</head>

<body>

    @include('partials/navbar') {{-- Navbar partials --}}

    <div class="bg-light p-5 rounded-lg m-3">
        @yield('container')
    </div>

    {{-- footer --}}

    <br class=" mt-5">
    <div class="bg-light pt-5 pb-5 border-top border-secondary-subtle">
        <div class="container mt-5 mb-5">
            <h2><i class="bi bi-heart-fill text-danger"></i> Fitur Utama</h2>
            <div class="row">
                <div class="col-md-4">
                    <i class="bi bi-check-circle text-success"></i>
                    <h3>Responsive</h3>
                    <p>Halaman ini responsif dan dapat diakses dengan baik di berbagai perangkat.</p>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-tools text-primary"></i>
                    <h3>Mudah Digunakan</h3>
                    <p>Bootstrap membuat pengembangan web menjadi lebih mudah dan efisien.</p>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-palette text-warning"></i>
                    <h3>Desain Kustom</h3>
                    <p>Anda dapat menyesuaikan desain sesuai kebutuhan dengan mudah.</p>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-dark text-light text-center pb-1">
        <p>&copy; 2023 Ridho Fauzan</p>
    </footer>
    {{-- akhir footer --}}
    {{-- <script src="js/coba.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const linkTerbuka = document.getElementById("link-terbuka");

            linkTerbuka.addEventListener("click", function(event) {
                event.preventDefault(); // Menghentikan perilaku default tautan
                window.open(linkTerbuka.href, "_blank", "noopener,noreferrer");

                // Jika Anda ingin menutup tab saat mengklik tautan di tab baru, Anda dapat menggunakan kode berikut:
                // window.close();

                // Jika Anda ingin mengizinkan pengguna untuk menutup tab tersebut, Anda dapat menambahkan tautan khusus di halaman tersebut yang akan menutup tab.
            });
        });
    </script>
</body>

</html>
