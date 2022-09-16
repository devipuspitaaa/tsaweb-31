<!DOCTYPE html>
<html>

<head>
    <title></title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Detail Produk
            </div>

            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item" align="middle">
                    <img width="100px" height="100px" src="{{asset('storage/'.$products->gambar)}}" align="middle"></li>
                    <li class="list-group-item"><b>Nama: </b>{{$products->nama}}</li>
                    <li class="list-group-item"><b>Deskripsi: </b>{{$products->deskripsi}}</li>
                </ul>
            </div>

            <a class="btn btn-success mt3" href="{{ route('products.index') }}">Kembali</a>
        </div>
    </div>
</div>
</body>

</html>