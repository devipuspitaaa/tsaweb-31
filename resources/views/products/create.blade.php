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
        <h2>Tambahkan Produk</h2>
        <form method="POST" action="/products" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-floating mb-3">
                <input name="namaproduk" type="text" class="form-control" id="namaproduk" placeholder="contoh: Baju tidur">
                <label for="namaproduk">Nama Produk</label>
            </div>
            <div class="form-floating">
                <input name="deskripsiproduk" type="text" class="form-control" id="deskripsiproduk" placeholder="Deskripsi">
                <label for="deskripsiproduk">Deskripsi</label>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Gambar Produk</label>
                <input name="image" class="form-control" type="file" id="image">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>