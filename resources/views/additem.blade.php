@extends('master')
@section('content')
<div class="custom-product">
    <div class="trending-wrapper">
    <div class="row">
        <div class="d-flex justify-content-left">
            <form action="additem" method="POST">
                @csrf
                <h3>Tambahkan Item Baru</h3> <br>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                    <input name="name" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Harga</label>
                    <input name="price" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kategori</label> <br>
                    <input type="radio" value="Insektisida" name="category"> <span>Insektisida</span> <br>
                    <input type="radio" value="Herbisida" name="category"> <span>Herbisida</span> <br>
                    <input type="radio" value="Pupuk" name="category"> <span>Pupuk</span> <br>
                    <input type="radio" value="Peralatan" name="category"> <span>Peralatan</span> <br>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
                    <textarea name="description" class="form-control" id="exampleInputEmail1"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Link Gambar</label>
                    <textarea name="gallery" class="form-control" id="exampleInputEmail1"></textarea>
                </div>
                <button type="submit" class="btn btn-secondary">Tambahkan Item</button>
              </form>
        </div>
    </div>
</div>
</div>

@endsection