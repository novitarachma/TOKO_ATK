@extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __(' DATA KATEGORI PELANGGAN') }}</div>

                    <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                    </div>
                    @endif

                    <form method="post" action="{{ route('kategori.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                    <label for="nama_kategori">Nama Kategori</label>
                    <input type="text" class="form-control"
                    required="required" name="nama_kategori"></br>
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
