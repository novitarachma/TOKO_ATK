@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('VIEW DATA PELANGGAN') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif                    
                    <div class="card-header">{{ $pelanggan->nama }}</div>
                        <div class="card-body">
                            Nama : {{ $pelanggan->nama }} <br>
                            Alamat : {{ $pelanggan->alamat }} <br>
                            No Telepon : {{ $pelanggan->no_telepon }} <br>
                            Created at : {{ $pelanggan->created_at }} <br>
                            Updated at : {{ $pelanggan->updated_at }} <br>
                        </div>
                    </div>
                        <a href="/pelanggans" class="btn btn-primary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection