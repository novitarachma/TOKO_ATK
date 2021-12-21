@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('VIEW DATA PRODUCT') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif                    
                    <div class="card-header">{{ $product->nama }}</div>
                        <div class="card-body">
                            Nama : {{ $product->nama }} <br>
                            Deskripsi : {{ $product->deskripsi }} <br>
                            Harga : {{ $product->harga }} <br>
                            Created at : {{ $product->created_at }} <br>
                            Updated at : {{ $product->updated_at }} <br>
                        </div>
                    </div>
                        <a href="/products" class="btn btn-primary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection