@extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __(' EDIT DATA PRODUCT') }}</div>

                    <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                    </div>
                    @endif

                    <form action="/products/{{$product->id}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        @method('PUT')
                        <input type="hidden" name="id" value="{{$product->id}}"></br>
                        <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" 
                        required="required" name="nama" value="{{$product->nama}}"></br>
                        </div>
                        <div class="form-group">
                        <label for="photo">Feature Image</label>
                        <input type="file" class="form-control" required="required" 
                        name="photo" value="{{$product->photo}}"></br>
                        <img width="150px" src="{{asset('storage/'.$product->photo)}}">
                        </div>
                        <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <input type="text" class="form-control" 
                        required="required" name="deskripsi" value="{{$product->deskripsi}}"></br>
                        </div>
                        <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" class="form-control" 
                        required="required" name="harga" value="{{$product->harga}}"></br>
                        </div>
                        <div class="form-group">
                        <label for="satuan">Satuan</label>
                        <input type="number" class="form-control" 
                        required="required" name="satuan" value="{{$product->satuan}}"></br>
                        </div>
                        <button type="submit" name="edit" class="btn btn-primary 
                        float-right">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection