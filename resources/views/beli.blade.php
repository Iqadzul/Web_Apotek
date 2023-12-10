<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<style>
    h4,
    label {
        color: black;
    }

    .navbar .nav-link.dropdown-toggle {
        color: black;
    }
</style>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg shadow">
        <div class="container">
            <a class="navbar-brand" href="/" style="color: #FF8C00;">Go<strong style="color: blue;">Apotik</strong></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Obat
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/add">Catat</a></li>
                            <li><a class="dropdown-item" href="/tampil">Tampil</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
    <div class="container">
        <div class="card mt-5">
            <div class="row p-2">
                <div class="col-md-4">
                    <div class="card">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <img src="{{asset('foto/'.$data->foto)}}" class="card-img-top" style="width: 250px;">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $data->obat }}</h5>
                            <p class="card-text"><strong>Jenis obat:</strong> jenis {{ $data->jenis }}</p>
                            <br>
                            <p class="card-text"><span style="font-weight: bold">Harga:</span> Rp. {{ number_format($data->harga, 0, ',', '.') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="my-auto">Silahkan lengkapi data dibawah</h5>
                            <hr>
                            <form method="POST" action="/cart/{{$data->id}}">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="name">Nama Pembeli</label>
                                    <input id="name" class="form-control" type="text" name="nama_pembeli">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="name">Alamat Tujuan</label>
                                    <input id="name" class="form-control" type="text" name="alamat">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="name">No. Telp</label>
                                    <input id="name" class="form-control" type="text" name="noHP">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="name">Jumlah Barang</label>
                                    <input id="name" class="form-control" type="text" name="jumlah">
                                </div>
                                <hr>
                                <div class="d-flex justify-content-end">
                                    <button class="btn btn-success" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                            <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z" />
                                            <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>