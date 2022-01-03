@extends('master')
@section('content')
<div class="container custom-product">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="slider-img" src="https://raw.githubusercontent.com/Aziz8860/TugasAkhirBasisData/main/images/Toko%20Tani%20Banner.png" alt="Banner Image 1">
          </div>
          <div class="carousel-item">
            <img class="slider-img" src="https://raw.githubusercontent.com/Aziz8860/TugasAkhirBasisData/main/images/Toko%20Tani%20Banner.png" alt="Banner Image 2">
          </div>
          <div class="carousel-item">
            <img class="slider-img" src="https://raw.githubusercontent.com/Aziz8860/TugasAkhirBasisData/main/images/Toko%20Tani%20Banner.png" alt="Banner Image 3">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="trending-wrapper">
      <h3>Trending Products</h3>
      @foreach ($products as $item)
      {{-- <div class="trending-item"> --}}
      <div class="float-start">
        <a href="detail/{{$item['id']}}">
          <img class="trending-img" src="{{$item['gallery']}}">
          <div>
            <h4>{{$item['name']}}</h4>
          </div>
        </a>
      </div>
      @endforeach
    </div>
</div>
@endsection