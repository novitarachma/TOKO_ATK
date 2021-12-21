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

                    <form class="form" method="get" action="{{ route('search') }}">
                        <div class="form-group w-100 mb-3">
                            <label for="search" class="d-block mr-2">Search</label>
                            <input type="text" name="search" class="form-control w-75 d-inline" 
                            id="search" placeholder="Search the name">
                            <button type="submit" class="btn btn-primary mb-1">Search</button>
                        </div>
                    </form>
                    <!-- kode program untuk form search -->
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    
                    <a href="/transaksi/create" class="btn btn-primary">Add Data</a> <br><br>

                    <table class="table table-responsive table-striped">
                        <thead>
                            <tr>
                                <th>Diskon</th>
                                <th>Ongkir</th>
                                <th>Jumlah</th>
                                <th>Total Harga</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($transaksi as $s)
                            <tr>
                                <td>{{ $s->diskon }}</td>
                                <td>{{ $s->ongkir }}</td>
                                <td>{{ $s->jumlah }}</td>
                                <td>{{ $s->total }}</td>
                                <td>{{ $s->status }}</td>
                            <td>
                                <form action="/transaksi/{{$s->id}}" method="post">
                                    <a href="/transaksi/{{$s->id}}/edit" class="btn btn-warning">Edit</a>
                                    <a href="/transaksi/{{$s->id}}" class="btn btn-info">Show</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection