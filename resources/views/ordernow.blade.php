<?php
  use App\Http\Controllers\ProductController;
  $totalPrice = 0;
  if(Session::has('user')) {
    $totalPrice = ProductController::cartItem();
  }
?>
@extends('master')
@section('content')
<div class="custom-product">
     <div class="col-sm-10">
        <div class="trending-wrapper">
        <h3>Total Pembelian</h3> <br>
        <table class="table">
            <tbody>
              <tr>
                <td>Amount</td>
                <td>Rp{{number_format($total*14000)}}</td>
              </tr>
              <tr>
                <td>Pajak</td>
                <td>Rp{{number_format($total*14000*0.02)}}</td>
              </tr>
              <tr>
                <td>Biaya Pengiriman</td>
                <td>Rp25,000</td>
              </tr>
              <tr>
                <td><b>Total</b></td>
                <td><b>Rp{{number_format($total*14000+$total*14000*0.02+25000)}}</b></td>
              </tr>
            </tbody>
          </table>

          <form action="/orderplace" method="POST">
            @csrf
            <div class="mb-3">
              <textarea name="address" placeholder="tuliskan alamat Anda" class="form-control"></textarea>
            </div>
            <div class="mb-3">
              <label for="pwd"><b>Payment Method</b></label> <br>
              <input type="radio" value="bank_transfer" name="payment"> <span>Bank Transfer</span> <br>
              <input type="radio" value="digital_wallet" name="payment"> <span>Digital Wallet</span> <br>
              <input type="radio" value="cod" name="payment"> <span>Cash on Delivery (COD)</span> <br>
            </div>
            <button type="submit" class="btn btn-primary">Order Now</button>
          </form>
        </div>
     </div>
</div>
@endsection