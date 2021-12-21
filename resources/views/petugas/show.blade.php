@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('VIEW DATA PETUGAS') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif                    
                    <div class="card-header">{{ $petugas->nama }}</div>
                        <div class="card-body">
                            Nama : {{ $petugas->nama }} <br>
                            Alamat : {{ $petugas->alamat }} <br>
                            No Telepon : {{ $petugas->no_telepon }} <br>
                            Created at : {{ $petugas->created_at }} <br>
                            Updated at : {{ $petugas->updated_at }} <br>
                        </div>
                    </div>
                        <a href="/petugas" class="btn btn-primary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection