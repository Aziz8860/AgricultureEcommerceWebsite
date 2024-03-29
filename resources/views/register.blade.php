@extends('master')
@section('content')
<div class="container custom-login">
    <div class="row">
        <div class="d-flex justify-content-center">
            <form action="register" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input name="name" class="form-control" id="exampleInputEmail1">
                  </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-secondary">Register</button>
              </form>
        </div>
    </div>
</div>

@endsection