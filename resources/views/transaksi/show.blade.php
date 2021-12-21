@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('VIEW DATA TRANSAKSI') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif                    
                    <div class="card-header">{{ $transaksi->nama }}</div>
                        <div class="card-body">
                            Diskon : {{ $transaksi->diskon }} <br>
                            Ongkir : {{ $transaksi->ongkir }} <br>
                            Jumlah : {{ $transaksi->jumlah }} <br>
                            Total Harga : {{ $transaksi->total }} <br>
                            Status : {{ $transaksi->status }} <br>
                            Created at : {{ $transaksi->created_at }} <br>
                            Updated at : {{ $transaksi->updated_at }} <br>
                        </div>
                    </div>
                        <a href="/transaksi" class="btn btn-primary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection