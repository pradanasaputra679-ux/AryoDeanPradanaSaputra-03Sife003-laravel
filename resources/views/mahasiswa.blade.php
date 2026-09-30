<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Profile Mahasiswa</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body class="bg-light d-flex flex-column min-vh-100">

    <!-- NAVBAR -->
    <nav class="navbar navbar-dark bg-primary">
        <div class="container">

            <a class="navbar-brand" href="#">
                UNPAM - Profile Mahasiswa
            </a>

        </div>
    </nav>


    <!-- CONTENT -->
    <div class="container flex-grow-1">

        <div class="row justify-content-center">

            <div class="col-md-6">

                <div class="card mt-5 shadow">

                    <!-- HEADER -->
                    <div class="card-header bg-warning text-white text-center py-4">

                        <div class="d-flex justify-content-center mb-3">

                            <img
                                src="{{ asset('foto-aryo.jpg') }}"
    class="rounded-circle img-thumbnail shadow-sm"
    style="width: 120px; height: 120px; object-fit: cover;"
    alt="Foto Aryo">

                        </div>

                        <h4 class="mb-2">
                            Data Mahasiswa
                        </h4>

                        <span class="badge bg-success">
                            {{ $mahasiswa['status'] }}
                        </span>

                    </div>


                    <!-- BODY -->
                    <div class="card-body">

                        <p>
                            <strong>Nama:</strong>
                            {{ $mahasiswa['nama'] }}
                        </p>

                        <p>
                            <strong>NIM:</strong>
                            {{ $mahasiswa['nim'] }}
                        </p>

                        <p>
                            <strong>Jurusan:</strong>
                            {{ $mahasiswa['prodi'] }}
                        </p>

                        <p>
                            <strong>Kampus:</strong>
                            {{ $mahasiswa['kampus'] }}
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- FOOTER -->
    <footer class="bg-light text-dark border-top text-center py-3 mt-auto">

        <p class="mb-0">
            &copy; {{ date('Y') }} UNPAM.
            All rights reserved.
        </p>

    </footer>

</body>

</html>