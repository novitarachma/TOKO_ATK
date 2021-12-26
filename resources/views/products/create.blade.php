@extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __(' DATA PRODUCT') }}</div>

                    <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                    </div>
                    @endif

                    <form action="/products" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" 
                    required="required" name="nama"></br>
                    </div>
                    <div class="form-group">
                    <label for="photo">Photo</label>
                    <input type="file" class="form-control" required="required" 
                    name="photo"></br>
                    <div>
                    <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <input type="text" class="form-control" 
                    required="required" name="deskripsi"></br>
                    </div>
                    <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control" 
                    required="required" name="harga"></br>
                    </div>
                    <div class="form-group">
                    <label for="satuan">Satuan</label>
                    <input type="number" class="form-control" 
                    required="required" name="satuan"></br>
                </select>
                    </div>
                    <button type="submit" name="add" class="btn btn-primary 
                    float-right">Add Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection