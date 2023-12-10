<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GoApotik</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg shadow">
        <div class="container">
            <a class="navbar-brand" href="/" style="color: #FF8C00;">Go<strong style="color: blue;">Apotik</strong></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <form action="/tampilt" class="d-flex ms-auto" role="search" method="GET">
                    <input class="form-control me-2" type="search" name="search" placeholder="cari obat anda" aria-label="Search" style="width: 400px;">
                </form>
                <div class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Obat
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/add">Catat</a></li>
                            <li><a class="dropdown-item" href="/tampil">Tampil</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Transaksi
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/tampilt">Pembelian</a></li>
                            <li><a class="dropdown-item" href="/riwayat">Liat Pembelian</a></li>
                        </ul>
                    </li>
                </div>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->
    <!-- carosel -->
    <div class="container">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{asset('img/j5.jpg')}}" alt="First slide" style="height: 460px;">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('img/j6.jpg')}}" alt="Second slide" style="height: 460px;">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('img/j7.jpg')}}" alt="Third slide" style="height: 460px;">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only"></span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only"></span>
            </a>
        </div>
    </div>
    <!-- end carosel -->
    <!-- list -->
    <div class="container mt-2">
        <div class="text-center">
            <h2>Our Product</h2>
        </div>
    </div>
    <!-- produk -->
    <div class="container">
        <div class="row row-cols-1 row-cols-md-4 g-4 mt-2 mb-3">
            @foreach ($data as $dt)
            <div class="col">
                <div class="card h-100">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <img src="{{asset('foto/'.$dt->foto)}}" class="card-img-top" style="width: 250px;">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $dt->obat }}</h5>
                        <p class="card-text"><strong>Jenis obat:</strong> jenis {{ $dt->jenis }}</p>
                        <br>
                        <p class="card-text"><span style="font-weight: bold">Harga:</span> Rp. {{ number_format($dt->harga, 0, ',', '.') }}</p>
                        <div class="d-flex">
                            <a href="/beli/{{$dt->id}}" class="btn btn-primary">Beli</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{ $data->links() }}
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>