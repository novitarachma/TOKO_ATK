@extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __(' DATA TRANSAKSI') }}</div>

                    <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                    </div>
                    @endif

                    <form action="/transaksi" method="post">
                    @csrf
                    <div class="form-group">
                    <label for="diskon">Diskon</label>
                    <input type="text" class="form-control" 
                    required="required" name="diskon"></br>
                    </div>
                    <div class="form-group">
                    <label for="ongkir">Ongkir</label>
                    <input type="text" class="form-control" 
                    required="required" name="ongkir"></br>
                    </div>
                    <div class="form-group">
                    <label for="jumlah">Jumlah</label>
                    <input type="text" class="form-control" 
                    required="required" name="jumlah"></br>
                    </div>
                    <div class="form-group">
                    <label for="total">Total Bayar</label>
                    <input type="text" class="form-control" 
                    required="required" name="total"></br>
                    </div>
                    <div class="form-group">
                    <label for="status">Status</label>
                    <input type="text" class="form-control" 
                    required="required" name="status"></br>
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