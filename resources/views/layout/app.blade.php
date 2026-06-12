<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Counter Pulsa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body{
            font-family: 'Poppins', sans-serif;
            background-color: #f2f2f2;
        }

        .navbar{
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .nav-link{
            font-weight: 500;
            color: white
        }

        .nav-link:hover{
            color: #00b3ff !important;
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
       <div class="container-fluid px-4">

           <a class="navbar-brand fw-bold text-white fs-3" href="/">
               Zaqi Cell
           </a>

            <button class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNav">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard">
                            Dashboard
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/pelanggan">
                            Pelanggan
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/produk_pulsa">
                            Produk
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/transaksi_pulsa">
                            Transaksi
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/pembayaran">
                            Pembayaran
                        </a>

                    </li>

                </ul>
              <a href="/login" class="btn btn-danger ms-3">
    <i class="bi bi-box-arrow-right me-2"></i> Logout
</a>
                
            </div>

        </div>
    </nav>

      <div class="container content flex-grow-1 mt-4">
        @yield('content')
    </div>
</div>

    <footer class="bg-secondary text-white text-center py-3 mt-5">
        © 2026 Zaqi Cell
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>