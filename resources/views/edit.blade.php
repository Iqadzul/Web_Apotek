<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

    <!-- card -->
    <div class="card m-lg-4">
        <div class="card-header text-center">
            Tambah Data Obat
        </div>
        <div class="card-body">
            <!-- body -->
            <form action="/edit/{{$data->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- form text field -->
                <div class="mb-3">
                    <label for="exampleInputText" class="form-label">Nama Obat</label>
                    <input type="text" class="form-control" id="obar" name="obat" value="{{ $data->obat}}" aria-describedby="emailHelp">
                </div>
                <!-- end form text field -->
                <!-- form text field -->
                <div class="mb-3">
                    <label for="exampleInputText" class="form-label">Jenis Obat</label>
                    <input type="text" class="form-control" id="jenis" name="jenis" value="{{ $data->jenis}}"naria-describedby="emailHelp">
                </div>
                <!-- end form text field -->
                <!-- form text field -->
                <div class="mb-3">
                    <label for="exampleInputText" class="form-label">Harga Obat</label>
                    <input type="text" class="form-control" id="harga" name="harga" value="{{ $data->harga}}" aria-describedby="emailHelp">
                </div>
                <!-- end form text field -->
                <!-- form text field -->
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Deskripsi Produk</label>
                    <textarea class="form-control" id="desc" name="desc" rows="3">{{ $data->desc}}</textarea>
                </div>
                <!-- end form text field -->
                <!-- form text field -->
                <div class="mb-3">
                    <label for="exampleInputText" class="form-label">gambar Obat</label>
                    <input type="file" class="form-control" id="foto" name="foto" aria-describedby="emailHelp">
                </div>
                <!-- end form text field -->

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <!-- end body -->
        </div>
    </div>
    <!-- akhir card -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>