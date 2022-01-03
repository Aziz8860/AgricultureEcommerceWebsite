<?php
  use App\Http\Controllers\ProductController;
  $total = 0;
  if(Session::has('user')) {
    $total = ProductController::cartItem();
  }
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Toko Tani</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/myorders">Orders</a>
          </li>
          @if(Session::has('admin') && Session::get('admin')['id'] == '1')
          <li class="nav-item">
            <a class="nav-link" href="/additem">Add Item</a>
          </li>
          @endif
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success me-2" type="submit">Search</button>
          <a href="/cartlist" class="btn" role="button" aria-pressed="true">Cart({{$total}})</a>
        </form>
        <ul class="navbar-nav">
          @if(Session::has('user'))
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{Session::get('user')['name']}}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="/logout">Logout</a></li>
            </ul>
          </li>
          @elseif(Session::has('admin'))
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{Session::get('admin')['nama']}}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="/logoutadmin">Logout</a></li>
            </ul>
          </li>
          @else
          <li><a href="/login">Login</a></li>
          <span>&nbsp &nbsp</span>
          <li><a href="/register">Register</a></li>
          @endif
        </ul>
      </div>
    </div>
  </nav>