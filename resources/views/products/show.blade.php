<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Detail Produk</h2>
    <div>
        <strong>Nama:</strong> {{ $product->name }}<br>
        <strong>Harga:</strong> {{ $product->price }}<br>
        <strong>Stok:</strong> {{ $product->stock }}<br>
    </div>
    <br>
    <a href="{{ route('products.index') }}" class="btn btn-primary">Kembali ke Daftar Produk</a>    
</body>
</html>
