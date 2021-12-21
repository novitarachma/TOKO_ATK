@extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __(' EDIT DATA TRANSAKSI') }}</div>

                    <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                    </div>
                    @endif

                    <form action="/transaksi/{{$transaksi->id}}" method="post">
                        {{csrf_field()}}
                        @method('PUT')
                        <input type="hidden" name="id" value="{{$transaksi->id}}"></br>
                        <div class="form-group">
                        <label for="diskon">Diskon</label>
                        <input type="text" class="form-control" 
                        required="required" name="diskon" value="{{$transaksi->diskon}}"></br>
                        </div>
                        <div class="form-group">
                        <label for="ongkir">Ongkir</label>
                        <input type="text" class="form-control" 
                        required="required" name="ongkir" value="{{$transaksi->ongkir}}"></br>
                        </div>
                        <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input type="text" class="form-control" 
                        required="required" name="jumlah" value="{{$transaksi->jumlah}}"></br>
                        </div>
                        <div class="form-group">
                        <label for="total">Total Harga</label>
                        <input type="text" class="form-control" 
                        required="required" name="total" value="{{$transaksi->total}}"></br>
                        </div>
                        <div class="form-group">
                        <label for="status">Status</label>
                        <input type="text" class="form-control" 
                        required="required" name="status" value="{{$transaksi->status}}"></br>
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