@extends('master')
@section('content')
<div class="custom-product">
     <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>Pesanan Saya</h4> <br>
            @foreach($orders as $item)
            <div class=" row searched-item cart-list-divider">
             <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                    <img class="trending-img" src="{{$item->gallery}}">
                </a>
             </div>
             <div class="col-sm-6">
                <div class="">
                    <h3>{{$item->name}}</h3>
                    <h6>Status Pengiriman: {{$item->status}}</h6>
                    <h6>Alamat: {{$item->address}}</h6>
                    <h6>Metode Pembayaran: {{$item->payment_status}}</h6>
                    <h6>Status Pembayaran: {{$item->payment_method}}</h6>
                </div>
             </div>
            </div>
            @endforeach
        </div>
     </div>
</div>
@endsection