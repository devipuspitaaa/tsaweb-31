<!DOCTYPE html>
<html>

<head>
    <title></title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mt-2">
                    <h2>Toko Susu</h2>
                </div>
                <div class="float-right my-2">
                    <a class="btn btn-success" href="{{ route('products.create') }}"> Tambah Produk</a>
                </div>
            </div>
        </div>

        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif

        <table class="table table-bordered">
            <tr>
                <th>Nama Produk</th>
                <th>Deskripsi Produk</th>
                <th>Gambar Produk</th>
            </tr>
            @foreach ($products as $Product)
            <tr>

                <td>{{ $Product->nama }}</td>
                <td>{{ $Product->deskripsi }}</td>
                <td>
                    <img width="100px" height="100px" src="{{asset('storage/'.$Product->gambar)}}">
                </td>
                
            </tr>
            @endforeach
        </table>
    </div>
</body>

</html>