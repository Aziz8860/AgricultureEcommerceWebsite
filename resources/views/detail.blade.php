@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <br>
            <img width="500" src="{{$product['gallery']}}">
        </div>
        <div class="col-sm-6">
            <br>
            <a href="/">← Kembali</a>
            <br><br>
            <h2>{{$product['name']}}</h2>
            <br>
            <h3>Harga: {{$product['price']}}</h3>
            <br>
            <h5>{{$product['description']}}</h5>
            <br>
            <h6>Kategori: {{$product['category']}}</h6>
            <br><br>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value={{$product['id']}}>
                <button class="btn btn-primary">Tambah ke Keranjang</button>
            </form>
            <br><br>
            <button class="btn btn-success">Beli Sekarang</button>
            <br><br>
        </div>
    </div>
    
</div>
@endsection